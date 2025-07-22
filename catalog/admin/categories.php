<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// Обработка добавления категории
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_category'])) {
    $name = trim($_POST['name']);
    $parent_id = !empty($_POST['parent_id']) ? (int)$_POST['parent_id'] : null;
    
    if (empty($name)) {
        $_SESSION['error'] = 'Название категории обязательно';
    } else {
        $slug = createSlug($name);
        
        try {
            $stmt = $pdo->prepare("INSERT INTO categories (name, slug, parent_id) VALUES (?, ?, ?)");
            $stmt->execute([$name, $slug, $parent_id]);
            
            $_SESSION['success'] = 'Категория "' . htmlspecialchars($name) . '" успешно добавлена';
            header('Location: categories.php');
            exit;
        } catch (PDOException $e) {
            error_log("Category add error: " . $e->getMessage());
            $_SESSION['error'] = 'Ошибка при добавлении категории: ' . $e->getMessage();
        }
    }
}

// Обработка удаления категории
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    
    try {
        // Проверка на существование товаров
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM product_categories WHERE category_id = ?");
        $stmt->execute([$id]);
        $products_count = $stmt->fetchColumn();
        
        if ($products_count > 0) {
            $_SESSION['error'] = 'Нельзя удалить категорию с товарами';
        } else {
            $pdo->prepare("DELETE FROM categories WHERE id = ?")->execute([$id]);
            $_SESSION['success'] = 'Категория успешно удалена';
        }
        header('Location: categories.php');
        exit;
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Ошибка при удалении категории: ' . $e->getMessage();
        header('Location: categories.php');
        exit;
    }
}

// Получаем все категории (простой плоский список)
function getAllCategories() {
    global $pdo;
    
    try {
        $stmt = $pdo->query("
            SELECT c.*, 
                   COUNT(pc.product_id) as products_count,
                   p.name as parent_name
            FROM categories c
            LEFT JOIN product_categories pc ON c.id = pc.category_id
            LEFT JOIN categories p ON c.parent_id = p.id
            GROUP BY c.id
            ORDER BY c.name
        ");
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log("Categories fetch error: " . $e->getMessage());
        return [];
    }
}

$categories = getAllCategories();

require_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php require_once 'sidebar.php'; ?>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h1 class="h2">Управление категориями</h1>
            
            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($_SESSION['error']) ?></div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>
            
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?= htmlspecialchars($_SESSION['success']) ?></div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">Добавить категорию</div>
                        <div class="card-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Название категории *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="parent_id" class="form-label">Родительская категория</label>
                                    <select class="form-select" id="parent_id" name="parent_id">
                                        <option value="">-- Без родительской категории --</option>
                                        <?php foreach ($categories as $cat): ?>
                                            <?php if ($cat['parent_id'] === null): ?>
                                                <option value="<?= $cat['id'] ?>">
                                                    <?= htmlspecialchars($cat['name']) ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <button type="submit" name="add_category" class="btn btn-primary">
                                    Добавить категорию
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Список категорий</div>
                        <div class="card-body">
                            <?php if (empty($categories)): ?>
                                <div class="alert alert-info">Нет категорий</div>
                            <?php else: ?>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Название</th>
                                                <th>Родительская</th>
                                                <th>Товаров</th>
                                                <th>Действия</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($categories as $category): ?>
                                                <tr>
                                                    <td><?= $category['id'] ?></td>
                                                    <td>
                                                        <?= htmlspecialchars($category['name']) ?>
                                                        <div class="text-muted small">/<?= $category['slug'] ?></div>
                                                    </td>
                                                    <td><?= $category['parent_name'] ?? '-' ?></td>
                                                    <td><?= $category['products_count'] ?></td>
                                                    <td>
                                                        <a href="edit_category.php?id=<?= $category['id'] ?>" 
                                                           class="btn btn-sm btn-outline-primary"
                                                           title="Редактировать">
                                                            <i class="bi bi-pencil"></i>
                                                        </a>
                                                        <a href="categories.php?delete=<?= $category['id'] ?>" 
                                                           class="btn btn-sm btn-outline-danger" 
                                                           title="Удалить"
                                                           onclick="return confirm('Удалить категорию <?= htmlspecialchars(addslashes($category['name'])) ?>?')">
                                                            <i class="bi bi-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require_once 'footer.php'; ?>