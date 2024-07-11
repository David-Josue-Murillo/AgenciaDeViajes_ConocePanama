<?php

require_once 'mailController.php';
require_once '../lib/vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new MailController();
    $mail->sendMail($email, $name, $subject, $message);

    echo "ok";
}

if (isset($_POST['email'])){
    $emailSuscribe = $_POST['email'];

    $mail = new MailController();
    $mail->sendMailSuscription($emailSuscribe, "Se ha suscrito un nuevo usuario");

    echo "ok";
}