<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../includes/config.php';
require_once '../includes/functions.php';

// Проверка авторизации
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// Получение всех корзин
$stmt = $pdo->query("
    SELECT c.*, p.name as product_name, u.email as user_email
    FROM carts c
    JOIN products p ON c.product_id = p.id
    LEFT JOIN users u ON c.user_id = u.id
    ORDER BY c.updated_at DESC
");
$carts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление корзинами</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Сайдбар -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">
                                <i class="bi bi-speedometer2"></i> Панель управления
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="products.php">
                                <i class="bi bi-box-seam"></i> Товары
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="categories.php">
                                <i class="bi bi-tags"></i> Категории
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="orders.php">
                                <i class="bi bi-cart"></i> Заказы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="carts.php">
                                <i class="bi bi-basket"></i> Корзины
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <a class="nav-link text-danger" href="logout.php">
                                <i class="bi bi-box-arrow-right"></i> Выход
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Основной контент -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <h1 class="h2">Управление корзинами</h1>
                
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Активные корзины</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Пользователь</th>
                                        <th>Товар</th>
                                        <th>Количество</th>
                                        <th>Дата обновления</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($carts as $cart): ?>
                                    <tr>
                                        <td><?= $cart['user_email'] ? escape($cart['user_email']) : 'Гость (' . escape($cart['session_id']) . ')' ?></td>
                                        <td><?= escape($cart['product_name']) ?></td>
                                        <td><?= $cart['quantity'] ?></td>
                                        <td><?= date('d.m.Y H:i', strtotime($cart['updated_at'])) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>