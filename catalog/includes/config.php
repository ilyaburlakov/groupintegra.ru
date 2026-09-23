<?php
// Конфигурация каталога.
// Секреты не хранятся в Git. На сервере этот файл должен быть настроен
// отдельно от репозитория либо заменён серверным конфигурационным файлом.

define('DB_HOST', getenv('INTEGRA_DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('INTEGRA_DB_NAME') ?: '');
define('DB_USER', getenv('INTEGRA_DB_USER') ?: '');
define('DB_PASS', getenv('INTEGRA_DB_PASS') ?: '');
define('DB_PORT', (int)(getenv('INTEGRA_DB_PORT') ?: 3306));

define('SITE_NAME', 'Каталог товаров');
define('SITE_URL', 'https://groupintegra.ru');
define('UPLOAD_DIR', __DIR__ . '/../uploads/');

define('PRODUCTS_PER_PAGE', 12);

session_start();

require_once 'db.php';
?>