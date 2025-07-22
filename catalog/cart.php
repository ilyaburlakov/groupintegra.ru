<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'includes/config.php';
require_once 'includes/functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : null;
$session_id = session_id();
$cart_items = getCartItems($user_id, $session_id);
$total = getCartTotal();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    if (!isset($_POST['agree'])) {
        $_SESSION['error'] = 'Необходимо согласиться с обработкой персональных данных';
    } else {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        if ($name && $phone && $email && !empty($cart_items)) {
            $order_id = createOrder($user_id, $cart_items, $name, $phone, $email);
            if ($order_id) {
                $_SESSION['message'] = 'Заказ успешно оформлен! Номер заказа: ' . $order_id;
                header('Location: cart.php');
                exit;
            } else {
                $_SESSION['error'] = 'Ошибка при оформлении заказа';
            }
        } else {
            $_SESSION['error'] = 'Заполните все обязательные поля';
        }
    }
}

require_once 'includes/header.php';
?>

<div class="container mt-4">
    <h1 class="mb-4">Корзина</h1>
    
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <?php unset($_SESSION['message']); endif; ?>
    
    <?php if (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
    <?php unset($_SESSION['error']); endif; ?>
    
    <?php if (empty($cart_items)): ?>
    <div class="alert alert-info">Ваша корзина пуста</div>
    <a href="index.php" class="btn btn-primary">Перейти в каталог</a>
    <?php else: ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Товар</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Сумма</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cart_items as $item): ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <?php if (!empty($item['main_image'])): ?>
                                        <img src="/catalog/uploads/<?= escape($item['main_image']) ?>" width="50" height="50" class="img-thumbnail me-2">
                                        <?php else: ?>
                                        <span class="text-muted">Нет изображения</span>
                                        <?php endif; ?>
                                        <span><?= escape($item['name']) ?></span>
                                    </div>
                                </td>
                                <td><?= number_format($item['price'], 2, '.', ' ') ?> ₽</td>
                                <td>
                                    <form action="cart_handler.php" method="post" class="d-flex align-items-center">
                                        <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                        <div class="input-group" style="width: 120px;">
                                            <button type="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').value = Math.max(1, parseInt(this.parentNode.querySelector('input').value) - 1)">-</button>
                                            <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1" class="form-control text-center">
                                            <button type="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').value = parseInt(this.parentNode.querySelector('input').value) + 1">+</button>
                                        </div>
                                        <button type="submit" name="update_cart" class="btn btn-link ms-2"><i class="bi bi-arrow-repeat"></i></button>
                                    </form>
                                </td>
                                <td><?= number_format($item['total'], 2, '.', ' ') ?> ₽</td>
                                <td>
                                    <form action="cart_handler.php" method="post">
                                        <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                        <button type="submit" name="remove_from_cart" class="btn btn-link text-danger"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Итого</h5>
                    <p class="card-text">Общая сумма: <strong><?= number_format($total, 2, '.', ' ') ?> ₽</strong></p>
                    <form action="cart.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Имя *</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон *</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="agree" id="agree" class="form-check-input" required>
                            <label for="agree" class="form-check-label">
                                Я согласен с <a href="/privacy-policy.php" target="_blank">обработкой персональных данных</a>
                            </label>
                        </div>
                        <button type="submit" name="checkout" class="btn btn-primary w-100">Оформить заказ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>