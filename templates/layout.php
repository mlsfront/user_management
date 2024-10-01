<?php
include_once(URL_TEMPLATES_PATH . 'header.php');

// Incluindo o conteúdo específico da página
if (isset($conteudo)) {
    echo $conteudo;
}

include_once(URL_TEMPLATES_PATH . 'footer.php');
?>
