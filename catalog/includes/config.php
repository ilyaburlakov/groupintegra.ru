<?php
// Публичный код не содержит реквизитов БД.
// На Jino секретная конфигурация хранится вне web-каталога: ~/incs/groupintegra-catalog.php.
// Для локальной разработки допускается catalog/includes/config.local.php (не попадает в Git).
$serverConfig = __DIR__ . '/../../../../incs/groupintegra-catalog.php';
$localConfig = __DIR__ . '/config.local.php';

if (is_file($serverConfig)) {
    require_once $serverConfig;
} elseif (is_file($localConfig)) {
    require_once $localConfig;
} else {
    http_response_code(500);
    exit('Не настроена серверная конфигурация каталога.');
}

define('SITE_NAME', 'Каталог товаров');
define('SITE_URL', 'https://groupintegra.ru');
define('UPLOAD_DIR', __DIR__ . '/../uploads/');
define('PRODUCTS_PER_PAGE', 12);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/db.php';
