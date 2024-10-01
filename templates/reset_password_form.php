<?php
//require_once('../src/config.php');
include_once(URL_TEMPLATES_PATH . 'messages.php');

$conteudo = '
<div class="form-container">
    <h2>Recuperar Senha</h2>
    <form action="../public/reset_password.php" method="post">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Enviar</button>
    </form>
</div>
';
include_once(URL_TEMPLATES_PATH . 'layout.php');
?>
