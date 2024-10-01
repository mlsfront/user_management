<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};

require_once('../src/functions.php');
require_once('../src/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = limparEntrada($_POST['nome']);
    $email = limparEntrada($_POST['email']);
    $senha = limparEntrada($_POST['senha']);

    $resultado = registrarUsuario($nome, $email, $senha);
    $_SESSION['mensagem'] = $resultado;
    header('Location: ' . URL_PUBLIC . 'register.php');
    exit;
}

$conteudo = include_once(URL_TEMPLATES_PATH . 'register_form.php');
include_once (URL_TEMPLATES_PATH . 'layout.php');
?>
