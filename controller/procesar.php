<?php

require_once 'mailController.php';
require_once '../vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new MailController();
    $mail->sendMail($email, $name, $subject, $message);

    echo "ok";
}
