<?php
// Убедитесь, что перед этой строкой нет пробелов или символов
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'includes/config.php';
require_once 'includes/functions.php';

// Проверяем, запущена ли сессия, чтобы избежать повторного вызова
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : null;
    $session_id = session_id();

    // Добавление в корзину
    if (isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
        $product_id = (int)$_POST['product_id'];
        $quantity = isset($_POST['quantity']) ? max(1, (int)$_POST['quantity']) : 1;
        addToCart($product_id, $quantity, $user_id, $session_id);
        $_SESSION['message'] = 'Товар добавлен в корзину';
    }

    // Обновление количества
    if (isset($_POST['update_cart']) && isset($_POST['product_id']) && isset($_POST['quantity'])) {
        $product_id = (int)$_POST['product_id'];
        $quantity = max(1, (int)$_POST['quantity']);
        updateCartItem($product_id, $quantity, $user_id, $session_id);
        $_SESSION['message'] = 'Корзина обновлена';
    }

    // Удаление из корзины
    if (isset($_POST['remove_from_cart']) && isset($_POST['product_id'])) {
        $product_id = (int)$_POST['product_id'];
        removeFromCart($product_id, $user_id, $session_id);
        $_SESSION['message'] = 'Товар удален из корзины';
    }

    // Редирект
    header('Location: ' . ($_SERVER['HTTP_REFERER'] ?? 'cart.php'));
    exit;
}