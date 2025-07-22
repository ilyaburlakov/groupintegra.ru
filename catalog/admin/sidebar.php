<?php
// Проверка авторизации
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>
<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">
                    <i class="bi bi-speedometer2"></i> Панель управления
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : '' ?>" href="products.php">
                    <i class="bi bi-box-seam"></i> Товары
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'categories.php' ? 'active' : '' ?>" href="categories.php">
                    <i class="bi bi-tags"></i> Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white <?= basename($_SERVER['PHP_SELF']) == 'orders.php' ? 'active' : '' ?>" href="orders.php">
                    <i class="bi bi-cart"></i> Заказы
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