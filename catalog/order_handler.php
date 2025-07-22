<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Метод не разрешен']);
    exit;
}

// Валидация данных
$errors = [];
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$product_id = (int)($_POST['product_id'] ?? 0);
$product_name = trim($_POST['product_name'] ?? '');

if (empty($name)) $errors[] = 'Укажите ваше имя';
if (empty($phone)) $errors[] = 'Укажите ваш телефон';
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Укажите корректный email';
if (empty($product_id)) $errors[] = 'Не указан товар';

if (!empty($errors)) {
    echo json_encode(['success' => false, 'message' => implode('<br>', $errors)]);
    exit;
}

try {
    // Сохраняем заказ в базу данных
    $stmt = $pdo->prepare("INSERT INTO orders 
                          (product_id, product_name, customer_name, customer_phone, customer_email, message, created_at)
                          VALUES (?, ?, ?, ?, ?, ?, NOW())");
    $stmt->execute([$product_id, $product_name, $name, $phone, $email, $message]);
    
    // Здесь можно добавить отправку email-уведомления
    // sendOrderNotification($name, $phone, $email, $product_name, $message);
    
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    error_log('Order error: ' . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Ошибка при сохранении заказа']);
}
?>