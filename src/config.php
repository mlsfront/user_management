<?php
// Configurações do banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'meu_projeto');
define('DB_USER', 'root'); // Substitua pelo seu usuário do MySQL
define('DB_PASS', '');   // Substitua pela sua senha do MySQL

// Configurações do PHPMailer
define('MAIL_HOST', 'smtp.exemplo.com'); // Substitua pelo seu servidor SMTP
define('MAIL_USERNAME', 'seu_email@exemplo.com'); // Substitua pelo seu email
define('MAIL_PASSWORD', 'sua_senha'); // Substitua pela sua senha
define('MAIL_PORT', 587);

// Caminho absoluto para o diretório do projeto
if (!defined('PATH_BASE')) {
    define('PATH_BASE', '/opt/lampp/htdocs/projeto/'); // Caminho absoluto
}

// URL base do projeto
if (!defined('URL_BASE')) {
    define('URL_BASE', 'http://localhost/projeto/');
}

if (!defined('URL_ASSETS')) {
    define('URL_ASSETS', URL_BASE . 'assets/');
}

if (!defined('URL_PUBLIC')) {
    define('URL_PUBLIC', URL_BASE . 'public/');
}

if (!defined('URL_PUBLIC_PATH')) {
    define('URL_PUBLIC_PATH', PATH_BASE . 'public/');
}

if (!defined('URL_SRC')) {
    define('URL_SRC', URL_BASE . 'src/');
}

if (!defined('URL_TEMPLATES')) {
    define('URL_TEMPLATES', URL_BASE . 'templates/');
}

if (!defined('URL_TEMPLATES_PATH')) {
    define('URL_TEMPLATES_PATH', PATH_BASE . 'templates/');
}
