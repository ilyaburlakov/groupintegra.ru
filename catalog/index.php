<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Параметры фильтрации
$filters = [
    'category_id' => isset($_GET['category']) ? (int)$_GET['category'] : null,
    'search' => isset($_GET['search']) ? trim($_GET['search']) : null,
    'min_price' => isset($_GET['min_price']) ? (float)$_GET['min_price'] : null,
    'max_price' => isset($_GET['max_price']) ? (float)$_GET['max_price'] : null,
    'sort' => isset($_GET['sort']) ? $_GET['sort'] : 'name_asc'
];

// SEO настройки
$page_title = "Усиление сотовой связи | Каталог товаров";
$meta_description = "Купить оборудование для усиления сотовой связи - характеристики, описание, цена. Доставка по всей России.";

// Пагинация
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = 12;

// Получаем данные
$products = getFilteredProducts($filters, $page, $per_page);
$total_products = countFilteredProducts($filters);
$total_pages = ceil($total_products / $per_page);

// Получаем категории для фильтра
$categories = getCategoryTree();

// Корзина
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$user_id = isset($_SESSION['user_id']) ? (int)$_SESSION['user_id'] : null;
$session_id = session_id();
$cart_items = getCartItems($user_id, $session_id);
$cart_count = count($cart_items);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?> - Группа Интегра</title>
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="усиление сотовой связи, каталог товаров, GSM репитеры, оборудование связи, Группа Интегра">
    <meta property="og:title" content="<?= $page_title ?> - Группа Интегра">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://groupintegra.ru/catalog/">
    <meta property="og:image" content="/images/catalog-og.jpg">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://groupintegra.ru/catalog/">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<style>
    :root {
        --main-color: #4A90E2;
        --accent-color: #FF6F61;
        --bg-color: #F8F9FA;
        --text-color: #2D2D2D;
        --light: #FFFFFF;
        --gray: #6C757D;
        --success: #28A745;
        --warning: #FFC107;
        --danger: #DC3545;
        --border-color: #E5E7EB;
        --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    body {
        background-color: var(--bg-color);
        font-family: 'Roboto', sans-serif;
        color: var(--text-color);
        line-height: 1.6;
        overflow-x: hidden;
    }

    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Секция контента каталога */
    .catalog-section {
        padding: 100px 0;
        position: relative;
    }

    /* Заголовок каталога */
    .catalog-header {
        background: var(--light);
        border-bottom: 1px solid var(--border-color);
        padding: 2rem 0;
        margin-bottom: 2rem;
    }

    .catalog-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
        color: var(--text-color);
    }

    .cart-button {
        background: var(--main-color);
        border: none;
        color: var(--light);
        border-radius: 3px;
        padding: 12px 24px;
        transition: var(--transition);
        text-decoration: none;
        font-weight: 600;
        position: relative;
    }

    .cart-button:hover {
        background: #3A7BD5;
        color: var(--light);
        transform: translateY(-2px);
    }

    .cart-badge {
        background: var(--accent-color) !important;
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border-radius: 50%;
        position: absolute;
        top: -8px;
        right: -8px;
    }

    /* Фильтры */
    .filters-card {
        background: var(--light);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 2rem;
        position: sticky;
        top: 20px;
    }

    .filters-header {
        background: var(--main-color);
        color: var(--light);
        padding: 1.25rem;
        font-weight: 600;
        font-size: 1.1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .filters-body {
        padding: 1.5rem;
    }

    .form-control, .form-select {
        border: 1px solid var(--border-color);
        border-radius: 3px;
        padding: 12px 16px;
        transition: var(--transition);
        background: var(--light);
        font-size: 0.95rem;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--main-color);
        box-shadow: 0 0 0 0.2rem rgba(74, 144, 226, 0.15);
        background: var(--light);
    }

    .form-label {
        font-weight: 600;
        color: var(--text-color);
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }

    .btn-apply-filters {
        background: var(--main-color);
        border: none;
        border-radius: 3px;
        padding: 12px 24px;
        font-weight: 600;
        color: var(--light);
        transition: var(--transition);
    }

    .btn-apply-filters:hover {
        background: #3A7BD5;
        transform: translateY(-2px);
        color: var(--light);
    }

    .btn-reset-filters {
        background: transparent;
        border: 1px solid var(--border-color);
        border-radius: 3px;
        padding: 11px 24px;
        font-weight: 500;
        color: var(--text-color);
        transition: var(--transition);
        text-decoration: none;
    }

    .btn-reset-filters:hover {
        background: var(--bg-color);
        border-color: var(--main-color);
        color: var(--main-color);
    }

    /* Популярные товары */
    .popular-products {
        background: var(--light);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        overflow: hidden;
        margin-top: 1.5rem;
    }

    .popular-header {
        background: var(--accent-color);
        color: var(--light);
        padding: 1.25rem;
        font-weight: 600;
        font-size: 1.1rem;
        border-bottom: 1px solid var(--border-color);
    }

    .popular-item {
        padding: 1rem;
        border-bottom: 1px solid var(--border-color);
        transition: var(--transition);
        text-decoration: none;
        display: block;
    }

    .popular-item:hover {
        background: var(--bg-color);
        text-decoration: none;
    }

    .popular-item:last-child {
        border-bottom: none;
    }

    .popular-item img {
        border-radius: 3px;
        object-fit: cover;
    }

    /* Результаты поиска */
    .search-results {
        background: var(--light);
        border: 1px solid var(--border-color);
        border-left: 4px solid var(--main-color);
        padding: 1.5rem;
        margin-bottom: 2rem;
        color: var(--text-color);
    }

    .search-query {
        color: var(--main-color);
        font-weight: 700;
    }

    .search-count {
        background: var(--main-color);
        color: var(--light);
        padding: 0.5rem 1rem;
        border-radius: 3px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* Карточки товаров */
    .product-card {
        background: var(--light);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        transition: var(--transition);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        border-color: var(--main-color);
    }

    .product-image-container {
        position: relative;
        overflow: hidden;
        background: var(--bg-color);
        border-bottom: 1px solid var(--border-color);
    }

    .product-image {
        height: 220px;
        object-fit: contain;
        transition: var(--transition);
        padding: 1rem;
        width: 100%;
    }

    .product-card:hover .product-image {
        transform: scale(1.05);
    }

    .no-image-placeholder {
        height: 220px;
        background: var(--bg-color);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--gray);
        font-size: 0.9rem;
        border-bottom: 1px solid var(--border-color);
    }

    .product-body {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .product-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--text-color);
        margin-bottom: 0.75rem;
        line-height: 1.4;
        text-decoration: none;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-title:hover {
        color: var(--main-color);
        text-decoration: none;
    }

    .product-sku {
        background: var(--bg-color);
        color: var(--gray);
        padding: 0.25rem 0.75rem;
        border-radius: 3px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
        font-weight: 500;
        border: 1px solid var(--border-color);
    }

    .product-price {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--main-color);
        margin-bottom: 1rem;
    }

    .product-description {
        color: var(--gray);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 1.5rem;
        flex-grow: 1;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .product-footer {
        padding: 0 1.5rem 1.5rem;
        margin-top: auto;
    }

    .btn-details {
        background: transparent;
        border: 1px solid var(--main-color);
        color: var(--main-color);
        border-radius: 3px;
        padding: 10px 20px;
        font-weight: 600;
        transition: var(--transition);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-details:hover {
        background: var(--main-color);
        color: var(--light);
        text-decoration: none;
    }

    .btn-add-cart {
        background: var(--accent-color);
        border: none;
        color: var(--light);
        border-radius: 3px;
        padding: 10px 16px;
        transition: var(--transition);
        font-weight: 600;
    }

    .btn-add-cart:hover {
        background: #E65A50;
        color: var(--light);
        transform: translateY(-2px);
    }

    /* Пагинация */
    .pagination {
        background: var(--light);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 1rem;
        margin-top: 3rem;
    }

    .page-item .page-link {
        border: 1px solid var(--border-color);
        color: var(--text-color);
        padding: 12px 16px;
        margin: 0 2px;
        border-radius: 3px;
        font-weight: 500;
        transition: var(--transition);
        background: var(--light);
    }

    .page-item.active .page-link {
        background: var(--main-color);
        border-color: var(--main-color);
        color: var(--light);
    }

    .page-item .page-link:hover:not(.active) {
        background: var(--bg-color);
        color: var(--main-color);
        border-color: var(--main-color);
    }

    /* Алерты */
    .alert {
        border: 1px solid;
        border-radius: 8px;
        padding: 1.25rem 1.5rem;
        margin-bottom: 2rem;
    }

    .alert-success {
        background: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert-warning {
        background: #fff3cd;
        border-color: #ffeaa7;
        color: #856404;
        text-align: center;
        font-weight: 500;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .catalog-title {
            font-size: 2rem;
        }
        
        .filters-card {
            position: static;
            margin-bottom: 2rem;
        }
        
        .product-card {
            margin-bottom: 1.5rem;
        }
        
        .product-image {
            height: 180px;
        }
        
        .no-image-placeholder {
            height: 180px;
        }

        .cart-button {
            padding: 10px 16px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .container {
            padding: 0 15px;
        }

        .catalog-header {
            padding: 1.5rem 0;
        }

        .catalog-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .d-flex.justify-content-between {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .cart-button {
            align-self: flex-end;
        }
    }

    /* Стили для общих компонентов */
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 60px;
        position: relative;
        display: inline-block;
        color: var(--text-color);
        text-align: center;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: var(--accent-color);
        border-radius: 0;
    }

    .btn {
        font-weight: 600;
        transition: var(--transition);
        border-radius: 3px;
    }

    .btn:hover {
        transform: translateY(-2px);
    }
</style>
</head>
<body>

<!-- Подключаем хедер из корневой директории -->
<?php include '../header.php'; ?>

<!-- Секция каталога -->
<section class="catalog-section">
    <div class="catalog-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="catalog-title">Каталог товаров</h1>
                <a href="cart.php" class="cart-button text-decoration-none">
                    <i class="bi bi-cart"></i> Корзина
                    <?php if ($cart_count > 0): ?>
                    <span class="cart-badge">
                        <?= $cart_count ?>
                    </span>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert alert-success">
            <i class="bi bi-check-circle me-2"></i><?= $_SESSION['message'] ?>
        </div>
        <?php unset($_SESSION['message']); ?>
        <?php endif; ?>
        
        <div class="row">
            <div class="col-lg-3">
                <div class="filters-card">
                    <div class="filters-header">
                        <i class="bi bi-funnel me-2"></i>Фильтры поиска
                    </div>
                    <div class="filters-body">
                        <form method="get" action="">
                            <div class="mb-4">
                                <label for="search" class="form-label">
                                    <i class="bi bi-search me-2"></i>Поиск товара
                                </label>
                                <input type="text" class="form-control" id="search" name="search" 
                                       value="<?= !empty($filters['search']) ? escape($filters['search']) : '' ?>" 
                                       placeholder="Название или артикул">
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="bi bi-grid me-2"></i>Категории
                                </label>
                                <select class="form-select" name="category">
                                    <option value="">Все категории</option>
                                    <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>" 
                                        <?= $filters['category_id'] == $category['id'] ? 'selected' : '' ?>>
                                        <?= escape($category['name']) ?>
                                    </option>
                                    <?php foreach ($category['children'] as $child): ?>
                                        <option value="<?= $child['id'] ?>" 
                                            <?= $filters['category_id'] == $child['id'] ? 'selected' : '' ?>>
                                              └ <?= escape($child['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="bi bi-currency-ruble me-2"></i>Диапазон цен
                                </label>
                                <div class="row g-2">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="От" 
                                               name="min_price" value="<?= !empty($filters['min_price']) ? escape($filters['min_price']) : '' ?>">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="До" 
                                               name="max_price" value="<?= !empty($filters['max_price']) ? escape($filters['max_price']) : '' ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">
                                    <i class="bi bi-sort-down me-2"></i>Сортировка
                                </label>
                                <select class="form-select" name="sort">
                                    <option value="name_asc" <?= $filters['sort'] == 'name_asc' ? 'selected' : '' ?>>По названию (А-Я)</option>
                                    <option value="name_desc" <?= $filters['sort'] == 'name_desc' ? 'selected' : '' ?>>По названию (Я-А)</option>
                                    <option value="price_asc" <?= $filters['sort'] == 'price_asc' ? 'selected' : '' ?>>По цене (дешевые сначала)</option>
                                    <option value="price_desc" <?= $filters['sort'] == 'price_desc' ? 'selected' : '' ?>>По цене (дорогие сначала)</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-apply-filters w-100 mb-3">
                                <i class="bi bi-check2 me-2"></i>Применить фильтры
                            </button>
                            <a href="?" class="btn btn-reset-filters w-100">
                                <i class="bi bi-arrow-clockwise me-2"></i>Сбросить все
                            </a>
                        </form>
                    </div>
                </div>
                
                <div class="popular-products">
                    <div class="popular-header">
                        <i class="bi bi-star me-2"></i>Популярные товары
                    </div>
                    <div>
                        <?php foreach (getPopularProducts(3) as $product): ?>
                        <a href="product.php?id=<?= $product['id'] ?>" class="popular-item">
                            <div class="d-flex align-items-center">
                                <?php if (!empty($product['main_image'])): ?>
                                <img src="/catalog/uploads/<?= escape($product['main_image']) ?>" 
                                     class="me-3" width="60" height="60" alt="<?= escape($product['name']) ?>">
                                <?php else: ?>
                                <div class="bg-light d-flex align-items-center justify-content-center me-3" 
                                     style="width: 60px; height: 60px; border-radius: 3px; border: 1px solid var(--border-color);">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                                <?php endif; ?>
                                <div class="flex-grow-1">
                                    <div class="fw-bold text-dark small"><?= escape($product['name']) ?></div>
                                    <div class="text-primary fw-bold"><?= number_format($product['price'], 2, '.', ' ') ?> ₽</div>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-9">
                <?php if (!empty($filters['search'])): ?>
                <div class="search-results">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">
                                <i class="bi bi-search me-2"></i>Результаты поиска
                            </h5>
                            <p class="mb-0">По запросу: "<span class="search-query"><?= escape($filters['search']) ?></span>"</p>
                        </div>
                        <div class="search-count">
                            Найдено: <?= $total_products ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
                    <?php if (empty($products)): ?>
                    <div class="col-12">
                        <div class="alert alert-warning text-center">
                            <i class="bi bi-exclamation-triangle fs-1 d-block mb-3"></i>
                            <h5>Товары не найдены</h5>
                            <p class="mb-0">Попробуйте изменить параметры поиска или сбросить фильтры</p>
                        </div>
                    </div>
                    <?php else: ?>
                    <?php foreach ($products as $product): ?>
                    <div class="col">
                        <div class="product-card">
                            <a href="product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
                                <div class="product-image-container">
                                    <?php if (!empty($product['main_image'])): ?>
                                    <img src="/catalog/uploads/<?= escape($product['main_image']) ?>" 
                                         class="product-image" 
                                         alt="<?= escape($product['name']) ?>">
                                    <?php else: ?>
                                    <div class="no-image-placeholder">
                                        <div class="text-center">
                                            <i class="bi bi-image fs-1 text-muted d-block mb-2"></i>
                                            <span>Нет изображения</span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                            
                            <div class="product-body">
                                <span class="product-sku">
                                    <i class="bi bi-tag me-1"></i><?= escape($product['sku']) ?>
                                </span>
                                
                                <a href="product.php?id=<?= $product['id'] ?>" class="product-title">
                                    <?= escape($product['name']) ?>
                                </a>
                                
                                <div class="product-price">
                                    <?= number_format($product['price'], 2, '.', ' ') ?> ₽
                                </div>
                                
                                <?php if (!empty($product['short_description'])): ?>
                                <p class="product-description"><?= escape($product['short_description']) ?></p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="product-footer">
                                <div class="d-flex gap-2">
                                    <a href="product.php?id=<?= $product['id'] ?>" class="btn-details flex-grow-1">
                                        <i class="bi bi-eye me-2"></i>Подробнее
                                    </a>
                                    <form action="cart_handler.php" method="post" class="d-inline">
                                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" name="add_to_cart" class="btn-add-cart">
                                            <i class="bi bi-cart-plus"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                
                <?php if ($total_pages > 1): ?>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $i])) ?>"><?= $i ?></a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Подключаем футер из корневой директории -->
<?php include '../footer.php'; ?>

<!-- Скрипты -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация AOS
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out'
    });

    // Плавный скролл к результатам при применении фильтров
    if (window.location.search) {
        setTimeout(() => {
            const resultsSection = document.querySelector('.col-lg-9');
            if (resultsSection) {
                resultsSection.scrollIntoView({ 
                    behavior: 'smooth', 
                    block: 'start' 
                });
            }
        }, 100);
    }
});
</script>

</body>
</html>
