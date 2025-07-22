<?php
// Функция для безопасного вывода данных
function escape($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Функция для получения дерева категорий
function getCategoryTree($parent_id = null) {
    global $pdo;
    
    $sql = "SELECT * FROM categories WHERE parent_id " . ($parent_id ? "= :parent_id" : "IS NULL") . " ORDER BY name";
    $stmt = $pdo->prepare($sql);
    
    if ($parent_id) {
        $stmt->bindParam(':parent_id', $parent_id, PDO::PARAM_INT);
    }
    
    $stmt->execute();
    $categories = $stmt->fetchAll();
    
    foreach ($categories as &$category) {
        $category['children'] = getCategoryTree($category['id']);
    }
    
    return $categories;
}

// Функция для получения товаров с фильтрами
function getFilteredProducts($filters = [], $page = 1, $per_page = 12) {
    global $pdo;
    
    $offset = ($page - 1) * $per_page;
    $where = [];
    $params = [];
    
    // Фильтр по категории
    if (!empty($filters['category_id'])) {
        $where[] = "p.id IN (SELECT product_id FROM product_categories WHERE category_id = :category_id)";
        $params[':category_id'] = $filters['category_id'];
    }
    
    // Фильтр по поиску
    if (!empty($filters['search'])) {
        $where[] = "(p.name LIKE :search OR p.sku LIKE :search OR p.description LIKE :search)";
        $params[':search'] = '%' . $filters['search'] . '%';
    }
    
    // Фильтр по цене
    if (!empty($filters['min_price'])) {
        $where[] = "p.price >= :min_price";
        $params[':min_price'] = $filters['min_price'];
    }
    
    if (!empty($filters['max_price'])) {
        $where[] = "p.price <= :max_price";
        $params[':max_price'] = $filters['max_price'];
    }
    
    $where_clause = $where ? "WHERE " . implode(" AND ", $where) : "";
    
    // Получаем товары
    $sql = "SELECT p.*, 
                   (SELECT image_path FROM product_images WHERE product_id = p.id LIMIT 1) as main_image
            FROM products p
            $where_clause
            LIMIT :limit OFFSET :offset";
    
    $stmt = $pdo->prepare($sql);
    
    foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value);
    }
    
    $stmt->bindValue(':limit', $per_page, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

// Функция для подсчета общего количества товаров
function countFilteredProducts($filters = []) {
    global $pdo;
    
    $where = [];
    $params = [];
    
    // Те же фильтры, что и в getFilteredProducts
    if (!empty($filters['category_id'])) {
        $where[] = "id IN (SELECT product_id FROM product_categories WHERE category_id = :category_id)";
        $params[':category_id'] = $filters['category_id'];
    }
    
    if (!empty($filters['search'])) {
        $where[] = "(name LIKE :search OR sku LIKE :search OR description LIKE :search)";
        $params[':search'] = '%' . $filters['search'] . '%';
    }
    
    if (!empty($filters['min_price'])) {
        $where[] = "price >= :min_price";
        $params[':min_price'] = $filters['min_price'];
    }
    
    if (!empty($filters['max_price'])) {
        $where[] = "price <= :max_price";
        $params[':max_price'] = $filters['max_price'];
    }
    
    $where_clause = $where ? "WHERE " . implode(" AND ", $where) : "";
    
    $sql = "SELECT COUNT(*) FROM products $where_clause";
    $stmt = $pdo->prepare($sql);
    
    foreach ($params as $key => $value) {
        $stmt->bindValue($key, $value);
    }
    
    $stmt->execute();
    return $stmt->fetchColumn();
}

// Функция для получения полной информации о товаре
function getProductDetails($product_id) {
    global $pdo;
    
    // Увеличиваем счетчик просмотров
    $pdo->prepare("UPDATE products SET views = views + 1 WHERE id = ?")->execute([$product_id]);
    
    // Получаем основную информацию
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();
    
    if (!$product) {
        return null;
    }
    
    // Получаем изображения
    $stmt = $pdo->prepare("SELECT * FROM product_images WHERE product_id = ? ORDER BY is_main DESC, id");
    $stmt->execute([$product_id]);
    $product['images'] = $stmt->fetchAll();
    
    // Получаем характеристики
    $stmt = $pdo->prepare("SELECT * FROM specifications WHERE product_id = ?");
    $stmt->execute([$product_id]);
    $product['specifications'] = $stmt->fetchAll();
    
    // Получаем категории
    $stmt = $pdo->prepare("SELECT c.id, c.name 
                          FROM categories c
                          JOIN product_categories pc ON c.id = pc.category_id
                          WHERE pc.product_id = ?");
    $stmt->execute([$product_id]);
    $product['categories'] = $stmt->fetchAll();
    
    return $product;
}

// Функция для получения популярных товаров
function getPopularProducts($limit = 5) {
    global $pdo;
    
    $stmt = $pdo->prepare("SELECT p.*, 
                                  (SELECT image_path FROM product_images WHERE product_id = p.id LIMIT 1) as main_image
                           FROM products p
                           ORDER BY views DESC
                           LIMIT ?");
    $stmt->bindValue(1, $limit, PDO::PARAM_INT);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

// Функции для работы с корзиной
function addToCart($product_id, $quantity = 1, $user_id = null, $session_id = null) {
    global $pdo;

    if (!$session_id) {
        $session_id = session_id();
    }

    // Проверяем, есть ли уже товар в корзине
    $stmt = $pdo->prepare("SELECT * FROM carts WHERE product_id = ? AND (user_id = ? OR session_id = ?)");
    $stmt->execute([$product_id, $user_id, $session_id]);
    $cart_item = $stmt->fetch();

    if ($cart_item) {
        // Обновляем количество
        $stmt = $pdo->prepare("UPDATE carts SET quantity = quantity + ?, updated_at = NOW() WHERE id = ?");
        $stmt->execute([$quantity, $cart_item['id']]);
    } else {
        // Добавляем новый товар
        $stmt = $pdo->prepare("INSERT INTO carts (user_id, session_id, product_id, quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user_id, $session_id, $product_id, $quantity]);
    }

    // Обновляем сессию для совместимости
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][$product_id] = isset($_SESSION['cart'][$product_id]) ? $_SESSION['cart'][$product_id] + $quantity : $quantity;
}

function removeFromCart($product_id, $user_id = null, $session_id = null) {
    global $pdo;

    if (!$session_id) {
        $session_id = session_id();
    }

    $stmt = $pdo->prepare("DELETE FROM carts WHERE product_id = ? AND (user_id = ? OR session_id = ?)");
    $stmt->execute([$product_id, $user_id, $session_id]);

    // Обновляем сессию
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

function updateCartItem($product_id, $quantity, $user_id = null, $session_id = null) {
    global $pdo;

    if (!$session_id) {
        $session_id = session_id();
    }

    $stmt = $pdo->prepare("UPDATE carts SET quantity = ?, updated_at = NOW() WHERE product_id = ? AND (user_id = ? OR session_id = ?)");
    $stmt->execute([max(1, (int)$quantity), $product_id, $user_id, $session_id]);

    // Обновляем сессию
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = max(1, (int)$quantity);
    }
}

function getCartItems($user_id = null, $session_id = null) {
    global $pdo;

    if (!$session_id) {
        $session_id = session_id();
    }

    $stmt = $pdo->prepare("
        SELECT p.*, c.quantity, c.quantity * p.price as total,
               (SELECT image_path FROM product_images WHERE product_id = p.id LIMIT 1) as main_image
        FROM carts c
        JOIN products p ON c.product_id = p.id
        WHERE c.user_id = ? OR c.session_id = ?
    ");
    $stmt->execute([$user_id, $session_id]);
    return $stmt->fetchAll();
}

function getCartTotal() {
    $total = 0;
    $items = getCartItems();
    
    foreach ($items as $item) {
        $total += $item['total'];
    }
    
    return $total;
}

function clearCart($user_id = null, $session_id = null) {
    global $pdo;

    if (!$session_id) {
        $session_id = session_id();
    }

    $stmt = $pdo->prepare("DELETE FROM carts WHERE user_id = ? OR session_id = ?");
    $stmt->execute([$user_id, $session_id]);

    unset($_SESSION['cart']);
}

// Функция для получения количества активных корзин
function getActiveCartsCount() {
    global $pdo;
    $stmt = $pdo->query("SELECT COUNT(DISTINCT COALESCE(user_id, session_id)) FROM carts");
    return $stmt->fetchColumn();
}

// Функция для получения популярных товаров в корзинах
function getPopularCartItems($limit = 5) {
    global $pdo;
    $stmt = $pdo->prepare("
        SELECT p.name, SUM(c.quantity) as total_quantity
        FROM carts c
        JOIN products p ON c.product_id = p.id
        GROUP BY c.product_id
        ORDER BY total_quantity DESC
        LIMIT ?
    ");
    $stmt->bindValue(1, $limit, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll();
}

// Функция для создания заказа
function createOrder($user_id, $cart_items, $customer_name, $customer_phone, $customer_email) {
    global $pdo;
    
    try {
        $pdo->beginTransaction();
        
        // Считаем общую сумму
        $total = array_reduce($cart_items, function($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);
        
        // Создаем заказ
        $stmt = $pdo->prepare("INSERT INTO orders 
                              (user_id, customer_name, customer_phone, customer_email, total, created_at)
                              VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->execute([
            $user_id,
            $customer_name,
            $customer_phone,
            $customer_email,
            $total
        ]);
        
        $order_id = $pdo->lastInsertId();
        
        // Добавляем элементы заказа
        $stmt = $pdo->prepare("INSERT INTO order_items
                              (order_id, product_id, product_name, price, quantity, total)
                              VALUES (?, ?, ?, ?, ?, ?)");
        
        foreach ($cart_items as $item) {
            $stmt->execute([
                $order_id,
                $item['id'],
                $item['name'],
                $item['price'],
                $item['quantity'],
                $item['price'] * $item['quantity']
            ]);
        }
        
        // Очищаем корзину в базе после создания заказа
        $session_id = session_id();
        clearCart($user_id, $session_id);
        
        $pdo->commit();
        return $order_id;
    } catch (PDOException $e) {
        $pdo->rollBack();
        error_log("Order creation error: " . $e->getMessage());
        return false;
    }
}

function createSlug($string) {
    $slug = preg_replace('/[^a-z0-9а-яё\s-]/ui', '', $string);
    $slug = str_replace(' ', '-', $slug);
    $slug = mb_strtolower($slug, 'UTF-8');
    $slug = preg_replace('/-+/', '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}
?>