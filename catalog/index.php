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
    'max_price' => isset($_GET['max_price']) ? (float)$_GET['max_price'] : null
];

// Пагинация
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$per_page = 12;

// Получаем данные
$products = getFilteredProducts($filters, $page, $per_page);
$total_products = countFilteredProducts($filters);
$total_pages = ceil($total_products / $per_page);

// Получаем категории для фильтра
$categories = getCategoryTree();

require_once 'includes/header.php';
?>

<div class="container mt-4">
    <h1 class="mb-4">Каталог товаров</h1>
    
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">Фильтры</div>
                <div class="card-body">
                    <form method="get" action="">
                        <div class="mb-3">
                            <label for="search" class="form-label">Поиск</label>
                            <input type="text" class="form-control" id="search" name="search" 
                                   value="<?= !empty($filters['search']) ? escape($filters['search']) : '' ?>" 
                                   placeholder="Название или артикул">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Категории</label>
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
                        
                        <div class="mb-3">
                            <label class="form-label">Цена</label>
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
                        
                        <button type="submit" class="btn btn-primary w-100">Применить</button>
                        <a href="?" class="btn btn-outline-secondary w-100 mt-2">Сбросить</a>
                    </form>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header bg-primary text-white">Популярные товары</div>
                <div class="card-body">
                    <?php foreach (getPopularProducts(3) as $product): ?>
                    <div class="mb-3">
                        <a href="product.php?id=<?= $product['id'] ?>" class="text-decoration-none">
                            <div class="d-flex align-items-center">
                                <?php if (!empty($product['main_image'])): ?>
                        <img src="/catalog/uploads/<?= escape($product['main_image']) ?>" class="img-thumbnail me-2" width="50" height="50">
                                <?php else: ?>
                                <span class="text-muted">Нет изображения</span>
                                <?php endif; ?>
                                <div>
                                    <div class="fw-bold"><?= escape($product['name']) ?></div>
                                    <div class="text-primary"><?= number_format($product['price'], 2, '.', ' ') ?> ₽</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <?php if (!empty($filters['search'])): ?>
            <div class="alert alert-info mb-4">
                Результаты поиска по запросу: "<strong><?= escape($filters['search']) ?></strong>"
                <span class="float-end">Найдено товаров: <?= $total_products ?></span>
            </div>
            <?php endif; ?>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php if (empty($products)): ?>
                <div class="col">
                    <div class="alert alert-warning">Товары не найдены. Попробуйте изменить параметры поиска.</div>
                </div>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <div class="col">
                    <div class="card h-100">
                        <?php if (!empty($product['main_image'])): ?>
                        <img src="/catalog/uploads/<?= escape($product['main_image']) ?>" 
                             class="card-img-top" 
                             alt="<?= escape($product['name']) ?>"
                             style="height: 200px; object-fit: contain;">
                        <?php else: ?>
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                            <span class="text-muted">Нет изображения</span>
                        </div>
                        <?php endif; ?>
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= escape($product['name']) ?></h5>
                            <p class="text-muted small mb-2">Артикул: <?= escape($product['sku']) ?></p>
                            <h4 class="text-primary mb-3"><?= number_format($product['price'], 2, '.', ' ') ?> ₽</h4>
                            
                            <?php if (!empty($product['short_description'])): ?>
                            <p class="card-text text-muted"><?= escape($product['short_description']) ?></p>
                            <?php endif; ?>
                        </div>
                        
                        <div class="card-footer bg-transparent">
                            <div class="d-flex gap-2">
                                <a href="product.php?id=<?= $product['id'] ?>" class="btn btn-outline-primary flex-grow-1">Подробнее</a>
                                <form action="cart_handler.php" method="post" class="d-inline">
                                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                    <input type="hidden" name="quantity" value="1">
                                    <button type="submit" name="add_to_cart" class="btn btn-primary">
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
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?<?= http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>" aria-label="Previous">
                            <span aria-hidden="true">«</span>
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
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>