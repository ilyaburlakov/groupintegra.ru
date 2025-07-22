<?php
session_start();

// Простые учетные данные (замените на свои)
define('ADMIN_LOGIN', 'admin');
define('ADMIN_PASSWORD', 'Integra2021');

// Проверка авторизации
if (isset($_POST['login'])) {
    if ($_POST['login'] === ADMIN_LOGIN && $_POST['password'] === ADMIN_PASSWORD) {
        $_SESSION['admin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
}

// Если уже авторизован - редирект
if (isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в панель управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .login-form { max-width: 400px; margin: 50px auto; }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form bg-white p-4 rounded shadow">
            <h2 class="text-center mb-4">Вход в админку</h2>
            <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <form method="post">
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login" name="login" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>