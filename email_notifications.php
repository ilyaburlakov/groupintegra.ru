<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';

function sendEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        // Настройки SMTP
        $mail->isSMTP();
        $mail->Host       = 'ssl://smtp.jino.ru';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tasks@groupintegra.ru';
        $mail->Password   = 'Integra2021';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->CharSet = 'UTF-8';

        // Отправитель и получатель
        $mail->setFrom('tasks@groupintegra.ru', 'Группа Интегра');
        $mail->addAddress($to);

        // Тема и тело письма
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Отправка письма
        $mail->send();
        return true;
    } catch (Exception $e) {
        // Вывод ошибки пользователю
        echo "Mailer Error: " . $mail->ErrorInfo;
        
        // Запись ошибки в лог
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        return false;
    }
}
?>