<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

// Проверка авторизации
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// Константы путей
define('UPLOAD_BASE_DIR', '/home/users/j/j84911507/domains/groupintegra.ru/catalog/uploads/');
define('UPLOAD_BASE_URL', '/catalog/uploads/');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;
$categories = [];
$product_categories = [];
$images = [];
$specifications = [];
$errors = [];

// Получение данных товара
if ($id) {
    try {
        // Основная информация
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch();
        
        if (!$product) {
            $_SESSION['error'] = 'Товар не найден';
            header('Location: products.php');
            exit;
        }

        // Категории
        $stmt = $pdo->prepare("SELECT category_id FROM product_categories WHERE product_id = ?");
        $stmt->execute([$id]);
        $product_categories = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Изображения
        $stmt = $pdo->prepare("SELECT * FROM product_images WHERE product_id = ? ORDER BY is_main DESC, id");
        $stmt->execute([$id]);
        $images = $stmt->fetchAll();

        // Характеристики
        $stmt = $pdo->prepare("SELECT * FROM specifications WHERE product_id = ?");
        $stmt->execute([$id]);
        $specifications = $stmt->fetchAll();

    } catch (PDOException $e) {
        $_SESSION['error'] = 'Ошибка загрузки данных: ' . $e->getMessage();
        header('Location: products.php');
        exit;
    }
}

// Получение всех категорий
try {
    $categories = $pdo->query("SELECT * FROM categories ORDER BY name")->fetchAll();
} catch (PDOException $e) {
    $errors[] = 'Ошибка загрузки категорий: ' . $e->getMessage();
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $sku = trim($_POST['sku'] ?? '');
    $price = (float)str_replace(',', '.', $_POST['price'] ?? '0');
    $description = trim($_POST['description'] ?? '');
    $short_description = trim($_POST['short_description'] ?? '');
    $selected_categories = $_POST['categories'] ?? [];

    // Валидация
    if (empty($name)) $errors[] = 'Укажите название';
    if (empty($sku)) $errors[] = 'Укажите артикул';
    if ($price <= 0) $errors[] = 'Укажите цену';

    if (empty($errors)) {
        try {
            $pdo->beginTransaction();

            // Сохранение товара
            if ($id) {
                $stmt = $pdo->prepare("UPDATE products SET 
                    name=?, sku=?, price=?, description=?, short_description=?, updated_at=NOW() 
                    WHERE id=?");
                $stmt->execute([$name, $sku, $price, $description, $short_description, $id]);
            } else {
                $stmt = $pdo->prepare("INSERT INTO products 
                    (name, sku, price, description, short_description, created_at, updated_at)
                    VALUES (?, ?, ?, ?, ?, NOW(), NOW())");
                $stmt->execute([$name, $sku, $price, $description, $short_description]);
                $id = $pdo->lastInsertId();
            }

            // Категории
            $pdo->prepare("DELETE FROM product_categories WHERE product_id = ?")->execute([$id]);
            if ($selected_categories) {
                $stmt = $pdo->prepare("INSERT INTO product_categories (product_id, category_id) VALUES (?, ?)");
                foreach ($selected_categories as $cat_id) {
                    $stmt->execute([$id, $cat_id]);
                }
            }

            // Загрузка изображений
            if (!empty($_FILES['images']['name'][0])) {
                $upload_dir = UPLOAD_BASE_DIR . 'products/' . $id . '/';
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }

                foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                    if ($_FILES['images']['error'][$key] === UPLOAD_ERR_OK) {
                        $ext = pathinfo($_FILES['images']['name'][$key], PATHINFO_EXTENSION);
                        $filename = uniqid() . '.' . $ext;
                        $filepath = $upload_dir . $filename;
                        
                        if (move_uploaded_file($tmp_name, $filepath)) {
                            $is_main = ($key == 0 && empty($images));
                            $db_path = 'products/' . $id . '/' . $filename;
                            $pdo->prepare("INSERT INTO product_images 
                                (product_id, image_path, is_main) VALUES (?, ?, ?)")
                                ->execute([$id, $db_path, $is_main]);
                        }
                    }
                }
            }

            // Удаление изображений
            if (!empty($_POST['delete_images'])) {
                foreach ($_POST['delete_images'] as $img_id) {
                    $img = $pdo->query("SELECT image_path FROM product_images WHERE id = $img_id")->fetch();
                    if ($img) {
                        $filepath = UPLOAD_BASE_DIR . $img['image_path'];
                        if (file_exists($filepath)) {
                            unlink($filepath);
                        }
                        $pdo->prepare("DELETE FROM product_images WHERE id = ?")->execute([$img_id]);
                    }
                }
            }

            // Основное изображение
            if (!empty($_POST['main_image'])) {
                $pdo->prepare("UPDATE product_images SET is_main = 0 WHERE product_id = ?")->execute([$id]);
                $pdo->prepare("UPDATE product_images SET is_main = 1 WHERE id = ?")->execute([$_POST['main_image']]);
            }

            // Характеристики
            $pdo->prepare("DELETE FROM specifications WHERE product_id = ?")->execute([$id]);
            if (!empty($_POST['spec_name'])) {
                $stmt = $pdo->prepare("INSERT INTO specifications (product_id, name, value) VALUES (?, ?, ?)");
                foreach ($_POST['spec_name'] as $i => $spec_name) {
                    $spec_value = $_POST['spec_value'][$i] ?? '';
                    if (!empty($spec_name) && !empty($spec_value)) {
                        $stmt->execute([$id, $spec_name, $spec_value]);
                    }
                }
            }

            $pdo->commit();
            $_SESSION['success'] = 'Товар сохранен';
            header("Location: edit_product.php?id=$id");
            exit;

        } catch (PDOException $e) {
            $pdo->rollBack();
            $errors[] = 'Ошибка сохранения: ' . $e->getMessage();
        }
    }
}

require_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php require_once 'sidebar.php'; ?>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h1 class="h2"><?= $id ? 'Редактирование' : 'Добавление' ?> товара</h1>
            
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?= htmlspecialchars($_SESSION['success']) ?></div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header">Основные данные</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Название *</label>
                                    <input type="text" class="form-control" name="name" 
                                           value="<?= htmlspecialchars($product['name'] ?? '') ?>" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Артикул *</label>
                                    <input type="text" class="form-control" name="sku" 
                                           value="<?= htmlspecialchars($product['sku'] ?? '') ?>" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Цена *</label>
                                    <input type="text" class="form-control" name="price" 
                                           value="<?= isset($product['price']) ? number_format($product['price'], 2, '.', '') : '' ?>" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Краткое описание</label>
                                    <textarea class="form-control" name="short_description" rows="3"><?= 
                                        htmlspecialchars($product['short_description'] ?? '') ?></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label">Описание</label>
                                    <textarea class="form-control editor" name="description" rows="6"><?= 
                                        htmlspecialchars($product['description'] ?? '') ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">Характеристики</div>
                            <div class="card-body">
                                <div id="specs-container">
                                    <?php foreach ($specifications as $i => $spec): ?>
                                        <div class="row mb-2 spec-row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" name="spec_name[]" 
                                                       value="<?= htmlspecialchars($spec['name']) ?>" placeholder="Название">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" name="spec_value[]" 
                                                       value="<?= htmlspecialchars($spec['value']) ?>" placeholder="Значение">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-remove-spec">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if (empty($specifications)): ?>
                                        <div class="row mb-2 spec-row">
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" name="spec_name[]" placeholder="Название">
                                            </div>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" name="spec_value[]" placeholder="Значение">
                                            </div>
                                            <div class="col-md-2">
                                                <button type="button" class="btn btn-danger btn-remove-spec">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <button type="button" id="btn-add-spec" class="btn btn-secondary mt-2">
                                    <i class="bi bi-plus"></i> Добавить
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">Категории</div>
                            <div class="card-body">
                                <?php foreach ($categories as $cat): ?>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" name="categories[]" 
                                               id="cat-<?= $cat['id'] ?>" value="<?= $cat['id'] ?>"
                                               <?= in_array($cat['id'], $product_categories) ? 'checked' : '' ?>>
                                        <label class="form-check-label" for="cat-<?= $cat['id'] ?>">
                                            <?= htmlspecialchars($cat['name']) ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">Изображения</div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Загрузить новые</label>
                                    <input type="file" class="form-control" name="images[]" multiple accept="image/*">
                                    <small class="text-muted">До 5 изображений</small>
                                </div>
                                
                                <?php if (!empty($images)): ?>
                                    <div class="mt-3">
                                        <label class="form-label">Текущие изображения</label>
                                        <div class="row g-2">
                                            <?php foreach ($images as $img): ?>
                                                <div class="col-6">
                                                    <div class="border p-2">
                                                        <img src="<?= UPLOAD_BASE_URL . htmlspecialchars($img['image_path']) ?>" 
                                                             class="img-fluid mb-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" 
                                                                   name="main_image" value="<?= $img['id'] ?>"
                                                                   <?= $img['is_main'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label">Основное</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" 
                                                                   name="delete_images[]" value="<?= $img['id'] ?>">
                                                            <label class="form-check-label text-danger">Удалить</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="bi bi-save"></i> Сохранить
                                </button>
                                <a href="products.php" class="btn btn-secondary w-100 mt-2">
                                    <i class="bi bi-x-circle"></i> Отмена
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

<script>
// Добавление характеристики
document.getElementById('btn-add-spec').addEventListener('click', function() {
    const container = document.getElementById('specs-container');
    const newRow = document.createElement('div');
    newRow.className = 'row mb-2 spec-row';
    newRow.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" name="spec_name[]" placeholder="Название">
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" name="spec_value[]" placeholder="Значение">
        </div>
        <div class="col-md-2">
            <button type="button" class="btn btn-danger btn-remove-spec">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    `;
    container.appendChild(newRow);
});

// Удаление характеристики
document.addEventListener('click', function(e) {
    if (e.target.classList.contains('btn-remove-spec')) {
        e.target.closest('.spec-row').remove();
    }
});

// Инициализация редактора
if (typeof ClassicEditor !== 'undefined') {
    ClassicEditor.create(document.querySelector('.editor'), {
        toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                'undo', 'redo'
            ]
        }
    }).catch(error => {
        console.error(error);
    });
}
</script>

<?php require_once 'footer.php'; ?>