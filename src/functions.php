<?php
function limparEntrada($data) {
    return htmlspecialchars(trim($data));
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarSenha($senha) {
    return strlen($senha) >= 6;
}
