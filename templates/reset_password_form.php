<?php
//require_once('../src/config.php');
include_once(URL_TEMPLATES_PATH . 'messages.php');

$conteudo = '
<div class="form-container">
    <h1 class="text-center my-4 pb-4" style="font-family:Noto Sans">Recuperar Senha</h1>
    <div class="d-flex align-items-center justify-content-center">
        <form class="shadow p-3 mb-5 bg-body-tertiary rounded flex-column row g-3 p-4" action="../public/reset_password.php" method="post">        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Seu e-mail" required>        
        <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
';
include_once(URL_TEMPLATES_PATH . 'layout.php');
?>
