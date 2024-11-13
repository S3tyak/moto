<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your_email@example.com"; // Замените на свой email
    $subject = "Сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Ваше сообщение отправлено. Спасибо!";
    } else {
        echo "К сожалению, произошла ошибка. Пожалуйста, попробуйте позже.";
    }
}
?>