<?php
require_once '../includes/config.php';
require_once '../includes/functions.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$category = null;
$all_categories = [];

if ($id) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        $category = $stmt->fetch();
        
        if (!$category) {
            $_SESSION['error'] = 'Категория не найдена';
            header('Location: categories.php');
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = 'Ошибка при загрузке категории: ' . $e->getMessage();
        header('Location: categories.php');
        exit;
    }
}

// Получаем все категории (кроме текущей)
try {
    $sql = "SELECT * FROM categories";
    if ($id) {
        $sql .= " WHERE id != $id";
    }
    $sql .= " ORDER BY name";
    
    $all_categories = $pdo->query($sql)->fetchAll();
} catch (PDOException $e) {
    $_SESSION['error'] = 'Ошибка при загрузке списка категорий: ' . $e->getMessage();
    header('Location: categories.php');
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_category'])) {
    $name = trim($_POST['name']);
    $parent_id = !empty($_POST['parent_id']) ? (int)$_POST['parent_id'] : null;
    
    if (empty($name)) {
        $error = 'Название категории обязательно';
    } else {
        $slug = createSlug($name);
        
        try {
            $stmt = $pdo->prepare("UPDATE categories SET name = ?, slug = ?, parent_id = ? WHERE id = ?");
            $stmt->execute([$name, $slug, $parent_id, $id]);
            
            $_SESSION['success'] = 'Категория "' . htmlspecialchars($name) . '" успешно обновлена';
            header('Location: categories.php');
            exit;
        } catch (PDOException $e) {
            $error = 'Ошибка при обновлении категории: ' . $e->getMessage();
        }
    }
}

require_once 'header.php';
?>

<div class="container-fluid">
    <div class="row">
        <?php require_once 'sidebar.php'; ?>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h1 class="h2"><?= $id ? 'Редактирование категории' : 'Добавление категории' ?></h1>
            
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            
            <form method="post">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Название категории *</label>
                            <input type="text" class="form-control" id="name" name="name" 
                                   value="<?= htmlspecialchars($category['name'] ?? '') ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Родительская категория</label>
                            <select class="form-select" id="parent_id" name="parent_id">
                                <option value="">-- Без родительской категории --</option>
                                <?php foreach ($all_categories as $cat): ?>
                                    <?php if ($cat['id'] != $id): ?>
                                        <option value="<?= $cat['id'] ?>"
                                            <?= isset($category['parent_id']) && $category['parent_id'] == $cat['id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($cat['name']) ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <button type="submit" name="update_category" class="btn btn-primary">
                            <?= $id ? 'Обновить' : 'Добавить' ?>
                        </button>
                        <a href="categories.php" class="btn btn-secondary">Отмена</a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>

<?php require_once 'footer.php'; ?>