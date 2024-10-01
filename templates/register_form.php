<?php
//require_once('../src/config.php');
include_once(URL_TEMPLATES_PATH . 'messages.php');

$conteudo = '
<div class="form-container">
    <h2>Registrar</h2>
    <form action="../public/register.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <button type="submit">Registrar</button>
    </form>
</div>
';
include_once (URL_TEMPLATES_PATH . 'layout.php');
?>
