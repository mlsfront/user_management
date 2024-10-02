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
    <style>

        .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">
    <header class="bg-dark text-white p-3">
        <h1>Projeto Sistema de Login</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="<?php echo URL_PUBLIC;?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>" href="<?php echo URL_PUBLIC;?>login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?php echo basename($_SERVER['PHP_SELF']) == 'register.php' ? 'active' : ''; ?>" href="<?php echo URL_PUBLIC;?>register.php">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white <?php echo basename($_SERVER['PHP_SELF']) == 'reset_password.php' ? 'active' : ''; ?>" href="<?php echo URL_PUBLIC;?>reset_password.php">Recuperar Senha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light disabled" aria-disabled="true">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo URL_PUBLIC;?>logout.php">Sair</a>
                </li>
            </ul>
        </nav>

    </header>

    <div class="py-4">