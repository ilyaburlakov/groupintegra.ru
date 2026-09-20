<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

/**
 * Отправка HTML-письма через SMTP.
 *
 * SMTP-параметры берутся из переменных окружения:
 * SMTP_HOST, SMTP_PORT, SMTP_USER, SMTP_PASSWORD, SMTP_ENCRYPTION,
 * SMTP_FROM_EMAIL, SMTP_FROM_NAME.
 */
function sendEmail($to, $subject, $body) {
    $host = getenv('SMTP_HOST') ?: 'smtp.jino.ru';
    $port = (int) (getenv('SMTP_PORT') ?: 465);
    $username = getenv('SMTP_USER') ?: '';
    $password = getenv('SMTP_PASSWORD') ?: '';
    $encryption = strtolower(getenv('SMTP_ENCRYPTION') ?: 'ssl');
    $fromEmail = getenv('SMTP_FROM_EMAIL') ?: $username;
    $fromName = getenv('SMTP_FROM_NAME') ?: 'Группа Интегра';

    if ($username === '' || $password === '' || $fromEmail === '') {
        error_log('SMTP configuration is incomplete; email was not sent.');
        return false;
    }

    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
        error_log('Invalid recipient address.');
        return false;
    }

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->Port = $port;
        $mail->CharSet = 'UTF-8';

        if ($encryption === 'ssl' || $encryption === 'smtps') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'tls' || $encryption === 'starttls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();

        return true;
    } catch (Exception $e) {
        error_log('Message could not be sent: ' . $e->getMessage());
        return false;
    }
}
