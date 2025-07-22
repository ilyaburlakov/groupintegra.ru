<?php
// Настройки базы данных
define('DB_HOST', 'mysql.fc1ec553d08a.hosting.myjino.ru'); // или 'localhost' если скрипт на том же сервере
define('DB_NAME', 'j84911507_site');
define('DB_USER', 'j84911507_site');
define('DB_PASS', 'Integra2021');
define('DB_PORT', 3306);

// Настройки сайта
define('SITE_NAME', 'Каталог товаров');
define('SITE_URL', 'http://groupintegra.ru'); // замените на ваш реальный домен
define('UPLOAD_DIR', __DIR__ . '/../uploads/');

// Настройки пагинации
define('PRODUCTS_PER_PAGE', 12);

// Старт сессии
session_start();

// Подключение к БД
require_once 'db.php';
?>