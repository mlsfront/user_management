<?php
require_once('../src/functions.php');
require_once('../src/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = limparEntrada($_POST['email']);
    $senha = limparEntrada($_POST['senha']);
    
    $resultado = loginUsuario($email, $senha);
    if ($resultado === true) {
        header('Location: ' . URL_PUBLIC . 'dashboard.php');
        exit;
    } else {
        $_SESSION['mensagem'] = $resultado;
        header('Location: ' . URL_PUBLIC . 'login.php');
        exit;
    }
}

$conteudo = include_once(URL_TEMPLATES_PATH . 'login_form.php');
include_once (URL_TEMPLATES_PATH . 'layout.php');
?>
