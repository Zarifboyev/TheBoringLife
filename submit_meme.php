<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Foydalanuvchi kiritmalarini olish va tozalash
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $memeTitle = htmlspecialchars($_POST['memeTitle']);
    $description = htmlspecialchars($_POST['description']);

    // Email jo'natish uchun ma'lumotlarni sozlash
    $to = 'staff@umail.uz';
    $subject = "New Meme Submission: $memeTitle";
    $message = "
        <html>
        <head><title>Meme Submission</title></head>
        <body>
            <h2>New Meme Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Title:</strong> $memeTitle</p>
            <p><strong>Description:</strong> $description</p>
        </body>
        </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: noreply@boringworld.com" . "\r\n";

    // Emailni jo‘natish
    if (mail($to, $subject, $message, $headers)) {
        echo "Meme submitted successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>
