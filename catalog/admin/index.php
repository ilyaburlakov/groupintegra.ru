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

// Получаем статистику
$stats = [
    'products_count' => $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn(),
    'orders_count' => $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn(),
    'popular_products' => $pdo->query("SELECT name, views FROM products ORDER BY views DESC LIMIT 5")->fetchAll(),
    'carts_count' => getActiveCartsCount(),
    'cart_items' => getPopularCartItems()
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
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
                            <a class="nav-link active text-white" href="index.php">
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
                            <a class="nav-link text-white" href="carts.php">
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
                <h1 class="h2">Панель управления</h1>
                
                <!-- Статистика -->
                <div class="row my-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Товаров в каталоге</h5>
                                <p class="card-text display-4"><?= $stats['products_count'] ?></p>
                                <a href="products.php" class="text-white">Управление товарами</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Заказов</h5>
                                <p class="card-text display-4"><?= $stats['orders_count'] ?></p>
                                <a href="orders.php" class="text-white">Просмотр заказов</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Активных корзин</h5>
                                <p class="card-text display-4"><?= $stats['carts_count'] ?></p>
                                <a href="carts.php" class="text-white">Просмотр корзин</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Популярные товары -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Самые просматриваемые товары</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Товар</th>
                                        <th>Просмотры</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stats['popular_products'] as $product): ?>
                                    <tr>
                                        <td><?= escape($product['name']) ?></td>
                                        <td><?= $product['views'] ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Популярные товары в корзинах -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0">Популярные товары в корзинах</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Товар</th>
                                        <th>Количество</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stats['cart_items'] as $item): ?>
                                    <tr>
                                        <td><?= escape($item['name']) ?></td>
                                        <td><?= $item['total_quantity'] ?></td>
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