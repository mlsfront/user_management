<?php
function redirecionar($url) {
    header("Location: $url");
    exit();
}
