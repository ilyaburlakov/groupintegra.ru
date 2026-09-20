<?php
header('Content-Type: application/json; charset=utf-8');

function respond($success, $message, $status = 200) {
    http_response_code($status);
    echo json_encode(
        ['success' => $success, 'message' => $message],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    );
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method', 405);
}

$host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
$host = preg_replace('/:\\d+$/', '', $host);
$allowedDomains = ['groupintegra.ru', 'www.groupintegra.ru'];

if (!in_array($host, $allowedDomains, true)) {
    respond(false, 'Invalid domain', 403);
}

if (!empty($_POST['website'])) {
    respond(false, 'Spam detected', 400);
}

$data = [];
foreach ($_POST as $key => $value) {
    if (is_string($value)) {
        $data[$key] = trim($value);
    }
}

foreach (['name', 'phone', 'form_type'] as $field) {
    if (($data[$field] ?? '') === '') {
        respond(false, "Field {$field} is required", 422);
    }
}

$name = mb_substr($data['name'], 0, 120);
$phone = mb_substr($data['phone'], 0, 40);
$formType = mb_substr($data['form_type'], 0, 120);
$email = $data['email'] ?? '';
$messageText = mb_substr($data['message'] ?? '', 0, 5000);

if (mb_strlen($name) < 2 || mb_strlen($phone) < 5) {
    respond(false, 'Проверьте имя и телефон', 422);
}

if (!preg_match('/\\d{5,}/', $phone)) {
    respond(false, 'Укажите корректный номер телефона', 422);
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Укажите корректный email', 422);
}

$formType = str_replace([chr(13), chr(10)], ' ', $formType);
$subject = 'Новая заявка с сайта: ' . $formType;

$fields = [
    'Имя' => $name,
    'Телефон' => $phone,
    'Email' => $email,
    'Сообщение' => $messageText,
];

$message = "<!doctype html>
<html lang=\"ru\">
<head>
<meta charset=\"utf-8\">
<title>Новая заявка</title>
<style>
table { border-collapse: collapse; width: 100%; }
th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
</style>
</head>
<body>
<h2>Данные заявки:</h2>
<table>
<tr><th>Поле</th><th>Значение</th></tr>";

foreach ($fields as $label => $value) {
    $message .= '<tr><td>' . htmlspecialchars($label, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') .
        '</td><td>' . nl2br(htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')) .
        '</td></tr>';
}

$message .= "</table>
<p><small>Отправлено с сайта " .
    htmlspecialchars($host, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') .
    "</small></p>
</body>
</html>";

$to = 'burlakov@groupintegra.ru';
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: no-reply@groupintegra.ru\r\n";
if ($email !== '') {
    $headers .= "Reply-To: " . $email . "\r\n";
}

if (mail($to, $subject, $message, $headers)) {
    respond(true, 'Заявка успешно отправлена!');
}

respond(false, 'Ошибка при отправке заявки. Попробуйте ещё раз позже.', 500);
