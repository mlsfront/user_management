<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};

require_once('../src/functions.php');
require_once('../src/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = limparEntrada($_POST['email']);
    $resultado = recuperarSenha($email);
    $_SESSION['mensagem'] = $resultado;
    header('Location: ' . URL_PUBLIC . 'reset_password.php');
    exit;
}

$conteudo = include_once(URL_TEMPLATES_PATH . 'reset_password_form.php');
include_once (URL_TEMPLATES_PATH . 'layout.php');
?>
