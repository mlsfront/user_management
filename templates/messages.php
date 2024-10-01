<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
};

if (isset($_SESSION['mensagem'])) {
    echo '<div class="mensagem">' . $_SESSION['mensagem'] . '</div>';
    unset($_SESSION['mensagem']);
}
?>
