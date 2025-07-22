<?php
header('Content-Type: application/json');
$allowedDomains = ['groupintegra.ru', 'www.groupintegra.ru']; // Замените на ваш домен
$currentDomain = $_SERVER['HTTP_HOST'];

if (!in_array($currentDomain, $allowedDomains)) {
    echo json_encode(['success' => false, 'message' => 'Invalid domain']);
    exit;
}

// Проверка на спам
if (!empty($_POST['website'])) {
    echo json_encode(['success' => false, 'message' => 'Spam detected']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

$data = $_POST;
$required = ['name', 'phone', 'form_type'];

foreach ($required as $field) {
    if (empty($data[$field])) {
        echo json_encode(['success' => false, 'message' => "Field $field is required"]);
        exit;
    }
}

$to = 'burlakov@groupintegra.ru';
$subject = 'Новая заявка с сайта: ' . $data['form_type'];

$message = "
<html>
<head>
<title>Новая заявка</title>
<style>
table { border-collapse: collapse; width: 100%; }
th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
</style>
</head>
<body>
<h2>Данные заявки:</h2>
<table>
<tr><th>Поле</th><th>Значение</th></tr>
";

foreach ($data as $key => $value) {
    if ($key === 'form_type') continue;
    $message .= "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
}

$message .= "
</table>
<p><small>Отправлено с сайта " . $_SERVER['HTTP_HOST'] . "</small></p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: no-reply@" . $_SERVER['HTTP_HOST'] . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Заявка успешно отправлена!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Ошибка при отправке заявки']);
}