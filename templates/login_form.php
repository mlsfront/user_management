<?php
//require_once('../src/config.php');
include_once(URL_TEMPLATES_PATH . 'messages.php');

$conteudo = '
<div class="container">
    <h1 class="text-center my-4 pb-4" style="font-family:Noto Sans">Login</h1>
    <div class="d-flex align-items-center justify-content-center">
      <form class="shadow p-3 mb-5 bg-body-tertiary rounded flex-column row g-3 p-4" action="../public/login.php" method="post">
        <div class="col-auto">
          <label for="email" class="visually-hidden">E-mail</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail">
        </div>
        <div class="col-auto">
          <label for="senha" class="visually-hidden">Senha</label>
          <input type="password" class="form-control" name="senha" id="senha" placeholder="Sua senha">
        </div>
        <div class="col-auto">
          <label for="enviar" class="visually-hidden">Enviar</label>
          <button type="submit" class="btn btn-primary mb-3">Enviar</button>
        </div>
      </form>
    </div
</div>
';
include_once(URL_TEMPLATES_PATH . 'layout.php');
?>
