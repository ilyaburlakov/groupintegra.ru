<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$product = getProductDetails((int)$_GET['id']);

if (!$product) {
    header('HTTP/1.0 404 Not Found');
    die('Товар не найден');
}

$similar_products = [];
if (!empty($product['categories'])) {
    $category_ids = array_column($product['categories'], 'id');
    $placeholders = implode(',', array_fill(0, count($category_ids), '?'));
    
    $sql = "SELECT p.*, 
                   (SELECT image_path FROM product_images WHERE product_id = p.id LIMIT 1) as main_image
            FROM products p
            JOIN product_categories pc ON p.id = pc.product_id
            WHERE pc.category_id IN ($placeholders) AND p.id != ?
            GROUP BY p.id
            LIMIT 4";
    
    $stmt = $pdo->prepare($sql);
    $params = array_merge($category_ids, [$product['id']]);
    $stmt->execute($params);
    $similar_products = $stmt->fetchAll();
}

require_once 'includes/header.php';
?>

<div class="container mt-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Каталог</a></li>
            <?php if (!empty($product['categories'])): ?>
            <li class="breadcrumb-item">
                <a href="index.php?category=<?= $product['categories'][0]['id'] ?>">
                    <?= escape($product['categories'][0]['name']) ?>
                </a>
            </li>
            <?php endif; ?>
            <li class="breadcrumb-item active" aria-current="page"><?= escape($product['name']) ?></li>
        </ol>
    </nav>
    
    <?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
    <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="product-gallery">
                <?php if (!empty($product['images'])): ?>
                <div class="main-image mb-3 text-center">
                    <img src="/catalog/uploads/<?= escape($product['images'][0]['image_path']) ?>" 
                         class="img-fluid rounded" 
                         alt="<?= escape($product['name']) ?>"
                         id="mainProductImage"
                         style="max-height: 400px; object-fit: contain;">
                </div>
                
                <div class="thumbnail-container d-flex flex-wrap gap-2 justify-content-center">
                    <?php foreach ($product['images'] as $image): ?>
                    <div class="thumbnail" style="width: 80px; cursor: pointer;">
                        <img src="/catalog/uploads/<?= escape($image['image_path']) ?>" 
                             class="img-thumbnail <?= $image['is_main'] ? 'border-primary' : '' ?>"
                             style="width: 100%; height: 80px; object-fit: cover;"
                             onclick="document.getElementById('mainProductImage').src = this.src">
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php else: ?>
                <div class="bg-light d-flex align-items-center justify-content-center" style="height: 300px;">
                    <span class="text-muted">Нет изображения</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="col-lg-6">
            <h1 class="mb-3"><?= escape($product['name']) ?></h1>
            <p class="text-muted">Артикул: <?= escape($product['sku']) ?></p>
            
            <div class="price-block mb-4">
                <h2 class="text-primary"><?= number_format($product['price'], 2, '.', ' ') ?> ₽</h2>
                <?php if ($product['old_price'] > 0): ?>
                <del class="text-muted"><?= number_format($product['old_price'], 2, '.', ' ') ?> ₽</del>
                <?php endif; ?>
            </div>
            
            <div class="actions mb-4">
                <form action="cart_handler.php" method="post" class="d-flex align-items-center gap-2">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <div class="input-group" style="width: 120px;">
                        <button type="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').value = Math.max(1, parseInt(this.parentNode.querySelector('input').value) - 1)">-</button>
                        <input type="number" name="quantity" value="1" min="1" class="form-control text-center">
                        <button type="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').value = parseInt(this.parentNode.querySelector('input').value) + 1">+</button>
                    </div>
                    <button type="submit" name="add_to_cart" class="btn btn-primary">
                        <i class="bi bi-cart-plus"></i> Добавить в корзину
                    </button>
                </form>
            </div>
            
            <div class="description mb-4">
                <h3>Описание</h3>
                <div class="product-description">
                    <?= nl2br(escape($product['description'])) ?>
                </div>
            </div>
            
            <div class="specifications mb-4">
                <h3>Характеристики</h3>
                <?php if (!empty($product['specifications'])): ?>
                <table class="table table-striped">
                    <tbody>
                        <?php foreach ($product['specifications'] as $spec): ?>
                        <tr>
                            <th style="width: 40%"><?= escape($spec['name']) ?></th>
                            <td><?= escape($spec['value']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <p class="text-muted">Характеристики не указаны</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php if (!empty($similar_products)): ?>
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-4">Похожие товары</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <?php foreach ($similar_products as $similar): ?>
                <div class="col">
                    <div class="card h-100">
                        <?php if (!empty($similar['main_image'])): ?>
                        <img src="<?= escape($similar['main_image']) ?>" class="card-img-top p-3" alt="<?= escape($similar['name']) ?>">
                        <?php else: ?>
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 150px;">
                            <span class="text-muted">Нет изображения</span>
                        </div>
                        <?php endif; ?>
                        
                        <div class="card-body">
                            <h5 class="card-title"><?= escape($similar['name']) ?></h5>
                            <p class="text-primary"><?= number_format($similar['price'], 2, '.', ' ') ?> ₽</p>
                        </div>
                        
                        <div class="card-footer bg-transparent">
                            <div class="d-flex gap-2">
                                <a href="product.php?id=<?= $similar['id'] ?>" class="btn btn-outline-primary flex-grow-1">Подробнее</a>
                                <form action="cart_handler.php" method="post" class="d-inline">
                                    <input type="hidden" name="product_id" value="<?= $similar['id'] ?>">
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
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>