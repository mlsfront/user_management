<?php
require_once('database.php');
require_once('functions.php');
require_once('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Função para registrar um novo usuário
function registrarUsuario($nome, $email, $senha) {
    global $pdo;

    // Verifica se o email já está cadastrado
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() > 0) {
        return "<p style='color:red;'>Email já cadastrado.</p>";
    }

    // Criptografa a senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Insere o usuário no banco de dados
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt->execute(['nome' => $nome, 'email' => $email, 'senha' => $senhaHash]);

    return "<p style='color:green;'>Usuário registrado com sucesso.</p>";
}

function loginUsuario($email, $senha) {
    global $pdo;

    // Busca o usuário pelo email
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $usuario = $stmt->fetch();

    // Verifica a senha
    if ($usuario && password_verify($senha, $usuario['senha'])) {
        // Iniciar sessão e armazenar informações do usuário
        session_start();
        $_SESSION['usuario_id'] = $usuario['id'];
        return true;
    } else {
        return "Email ou senha incorretos.";
    }
}

function recuperarSenha($email) {
    global $pdo;

    // Verifica se o email está cadastrado
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() === 0) {
        return "<p style='color:red;'>Email não cadastrado.</p>";
    }

    // Gera um token de recuperação
    $token = bin2hex(random_bytes(16));
    $expiracao = date('Y-m-d H:i:s', strtotime('+1 hour'));

    // Salva o token no banco de dados
    $stmt = $pdo->prepare("INSERT INTO recuperacao_senha (email, token, expiracao) VALUES (:email, :token, :expiracao)");
    $stmt->execute(['email' => $email, 'token' => $token, 'expiracao' => $expiracao]);

    // Enviar email com o token
    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor
        $mail->isSMTP();
        $mail->Host = MAIL_HOST; // Usando a constante do config.php
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME; // Usando a constante do config.php
        $mail->Password = MAIL_PASSWORD; // Usando a constante do config.php
        $mail->SMTPSecure = 'tls';
        $mail->Port = MAIL_PORT; // Usando a constante do config.php

        // Remetente e destinatário
        $mail->setFrom(MAIL_USERNAME, 'Seu Nome'); // Usando a constante do config.php
        $mail->addAddress($email);

        // Configuração de charset
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true); // Define que o conteúdo do email é HTML

        // Conteúdo do email
        $linkRedefinicao = "http://localhots/projeto/public/reset_password.php?token=$token"; // Substitua pelo seu domínio real
        $mail->Subject = 'Recuperação de Senha';
        $mail->Body = "Clique no link para redefinir sua senha: <a href='$linkRedefinicao'>Redefinir Senha</a>";

        $mail->send();
        return "<p style='color:green;'>Instruções de recuperação de senha foram enviadas para seu email.</p>";
    } catch (Exception $e) {
        return "<p style='color:red;'>Erro ao enviar o email: {$mail->ErrorInfo}</p>";
    }
}
