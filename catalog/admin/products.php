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

// Обработка удаления товара
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $pdo->prepare("DELETE FROM products WHERE id = ?")->execute([$id]);
    $_SESSION['message'] = 'Товар успешно удален';
    header('Location: products.php');
    exit;
}

// Поиск и пагинация
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

// Получение товаров
$sql = "SELECT p.*, 
               (SELECT image_path FROM product_images WHERE product_id = p.id LIMIT 1) as main_image
        FROM products p
        WHERE p.name LIKE ? OR p.sku LIKE ?
        ORDER BY p.id DESC
        LIMIT ? OFFSET ?";

$stmt = $pdo->prepare($sql);
$search_param = "%$search%";
$stmt->bindValue(1, $search_param);
$stmt->bindValue(2, $search_param);
$stmt->bindValue(3, $per_page, PDO::PARAM_INT);
$stmt->bindValue(4, $offset, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll();

// Общее количество товаров
$total = $pdo->prepare("SELECT COUNT(*) FROM products WHERE name LIKE ? OR sku LIKE ?");
$total->execute([$search_param, $search_param]);
$total_products = $total->fetchColumn();
$total_pages = ceil($total_products / $per_page);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление товарами</title>
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
                            <a class="nav-link active text-white" href="products.php">
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
                <h1 class="h2">Управление товарами</h1>
                
                <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
                <?php unset($_SESSION['message']); endif; ?>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <form method="get" class="d-flex w-75">
                                <input type="text" name="search" class="form-control me-2" placeholder="Поиск по названию или артикулу" value="<?= escape($search) ?>">
                                <button type="submit" class="btn btn-primary">Найти</button>
                            </form>
                            <a href="edit_product.php" class="btn btn-success">
                                <i class="bi bi-plus"></i> Добавить товар
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Изображение</th>
                                <th>Название</th>
                                <th>Артикул</th>
                                <th>Цена</th>
                                <th>Просмотры</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td>
                                    <?php if ($product['main_image']): ?>
                                    <img src="/catalog/uploads/<?= escape($product['main_image']) ?>" width="50" height="50" class="img-thumbnail">
                                    <?php else: ?>
                                    <span class="text-muted">Нет</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= escape($product['name']) ?></td>
                                <td><?= escape($product['sku']) ?></td>
                                <td><?= number_format($product['price'], 2, '.', ' ') ?> ₽</td>
                                <td><?= $product['views'] ?></td>
                                <td>
                                    <a href="edit_product.php?id=<?= $product['id'] ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="products.php?delete=<?= $product['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Удалить этот товар?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <!-- Пагинация -->
                <?php if ($total_pages > 1): ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-4">
                        <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $page-1 ?><?= $search ? '&search='.urlencode($search) : '' ?>">
                                «
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?><?= $search ? '&search='.urlencode($search) : '' ?>">
                                <?= $i ?>
                            </a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $page+1 ?><?= $search ? '&search='.urlencode($search) : '' ?>">
                                »
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>