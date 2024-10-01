<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};

require_once('../src/config.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ' .URL_PUBLIC. 'login.php');
    exit();
}

$conteudo = '
<div class="index">
    <h2>Dashboard</h2>
</div>
';
include_once(URL_TEMPLATES_PATH . 'layout.php');
?>
