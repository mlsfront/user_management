<?php
require_once('../src/config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="<?php echo URL_ASSETS; ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Projeto Sistema de Login</h1>
        <nav>
            <ul>
                <li><a href="<?php echo URL_PUBLIC;?>index.php">Home</a></li>
                <li><a href="<?php echo URL_PUBLIC;?>login.php">Login</a></li>
                <li><a href="<?php echo URL_PUBLIC;?>register.php">Registrar</a></li>
                <li><a href="<?php echo URL_PUBLIC;?>reset_password.php">Recuperar Senha</a></li>
                <li><a href="<?php echo URL_PUBLIC;?>logout.php ">Sair</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-fluid">