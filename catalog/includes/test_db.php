<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Параметры подключения
$host = 'mysql.fc1ec553d08a.hosting.myjino.ru';
$db   = 'j84911507_site';
$user = 'j84911507_site';
$pass = 'Integra2021';
$port = 3306;
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Подключение успешно!<br>";
    
    // Проверим список таблиц
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    echo "Таблицы в базе: " . implode(', ', $tables);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}