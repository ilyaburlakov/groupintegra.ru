<?php
// Серверные настройки каталога хранятся отдельно от Git-репозитория.
// На Jino создайте catalog/includes/config.local.php на основе config.local.php.example.
$localConfig = __DIR__ . '/config.local.php';

if (!is_file($localConfig)) {
    http_response_code(500);
    exit('Не настроена серверная конфигурация каталога.');
}

require_once $localConfig;

// Публичные настройки сайта
define('SITE_NAME', 'Каталог товаров');
define('SITE_URL', 'https://groupintegra.ru');
define('UPLOAD_DIR', __DIR__ . '/../uploads/');

// Пагинация
define('PRODUCTS_PER_PAGE', 12);

// Сессия
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Подключение к БД
require_once __DIR__ . '/db.php';
