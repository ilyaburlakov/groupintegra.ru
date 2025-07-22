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

// Обработка удаления заказа
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $pdo->prepare("DELETE FROM order_items WHERE order_id = ?")->execute([$id]);
    $pdo->prepare("DELETE FROM orders WHERE id = ?")->execute([$id]);
    $_SESSION['message'] = 'Заказ успешно удален';
    header('Location: orders.php');
    exit;
}

// Обработка изменения статуса
if (isset($_POST['update_status']) && isset($_POST['order_id']) && isset($_POST['status'])) {
    $order_id = (int)$_POST['order_id'];
    $status = $_POST['status'];
    if (in_array($status, ['new', 'processing', 'completed', 'cancelled'])) {
        $stmt = $pdo->prepare("UPDATE orders SET status = ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$status, $order_id]);
        $_SESSION['message'] = 'Статус заказа обновлен';
    } else {
        $_SESSION['message'] = 'Недопустимый статус';
    }
    header('Location: orders.php');
    exit;
}

// Поиск, фильтр по статусу и пагинация
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$status = isset($_GET['status']) ? trim($_GET['status']) : '';
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

// Получение заказов
$where = [];
$params = [];
if ($search) {
    $where[] = "(o.customer_name LIKE ? OR o.customer_email LIKE ? OR o.customer_phone LIKE ?)";
    $params[] = "%$search%";
    $params[] = "%$search%";
    $params[] = "%$search%";
}
if ($status && in_array($status, ['new', 'processing', 'completed', 'cancelled'])) {
    $where[] = "o.status = ?";
    $params[] = $status;
}
$where_clause = $where ? "WHERE " . implode(" AND ", $where) : "";

$sql = "SELECT o.*, u.email as user_email
        FROM orders o
        LEFT JOIN users u ON o.user_id = u.id
        $where_clause
        ORDER BY o.created_at DESC
        LIMIT ? OFFSET ?";

$stmt = $pdo->prepare($sql);
foreach ($params as $i => $param) {
    $stmt->bindValue($i + 1, $param);
}
$stmt->bindValue(count($params) + 1, $per_page, PDO::PARAM_INT);
$stmt->bindValue(count($params) + 2, $offset, PDO::PARAM_INT);
$stmt->execute();
$orders = $stmt->fetchAll();

// Общее количество заказов
$total_sql = "SELECT COUNT(*) FROM orders o $where_clause";
$total = $pdo->prepare($total_sql);
foreach ($params as $i => $param) {
    $total->bindValue($i + 1, $param);
}
$total->execute();
$total_orders = $total->fetchColumn();
$total_pages = ceil($total_orders / $per_page);

// Список статусов для фильтра
$statuses = ['new' => 'Новый', 'processing' => 'В обработке', 'completed' => 'Завершен', 'cancelled' => 'Отменен'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление заказами</title>
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
                            <a class="nav-link active text-white" href="orders.php">
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
                <h1 class="h2">Управление заказами</h1>
                
                <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
                <?php unset($_SESSION['message']); endif; ?>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="get" class="d-flex w-100 align-items-center">
                            <input type="text" name="search" class="form-control me-2" placeholder="Поиск по имени, email или телефону" value="<?= escape($search) ?>">
                            <select name="status" class="form-select me-2" style="width: 200px;">
                                <option value="">Все статусы</option>
                                <?php foreach ($statuses as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $status === $value ? 'selected' : '' ?>><?= $label ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button type="submit" class="btn btn-primary">Найти</button>
                        </form>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Клиент</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Сумма</th>
                                <th>Статус</th>
                                <th>Дата</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= escape($order['customer_name']) ?></td>
                                <td><?= escape($order['user_email'] ?: $order['customer_email']) ?></td>
                                <td><?= escape($order['customer_phone']) ?></td>
                                <td><?= number_format($order['total'], 2, '.', ' ') ?> ₽</td>
                                <td>
                                    <form method="post" class="d-inline">
                                        <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                            <?php foreach ($statuses as $value => $label): ?>
                                            <option value="<?= $value ?>" <?= $order['status'] === $value ? 'selected' : '' ?>><?= $label ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <input type="hidden" name="update_status" value="1">
                                    </form>
                                </td>
                                <td><?= date('d.m.Y H:i', strtotime($order['created_at'])) ?></td>
                                <td>
                                    <a href="order_details.php?id=<?= $order['id'] ?>" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="orders.php?delete=<?= $order['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Удалить этот заказ?')">
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
                            <a class="page-link" href="?page=<?= $page-1 ?><?= $search ? '&search='.urlencode($search) : '' ?><?= $status ? '&status='.urlencode($status) : '' ?>">
                                «
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="?page=<?= $i ?><?= $search ? '&search='.urlencode($search) : '' ?><?= $status ? '&status='.urlencode($status) : '' ?>">
                                <?= $i ?>
                            </a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?page=<?= $page+1 ?><?= $search ? '&search='.urlencode($search) : '' ?><?= $status ? '&status='.urlencode($status) : '' ?>">
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