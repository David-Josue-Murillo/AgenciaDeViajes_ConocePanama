<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require '../vendor/phpmailer/phpmailer/src/Exception.php';
//require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require '../vendor/phpmailer/phpmailer/src/SMTP.php';

class MailController {

    public function sendMail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'youremail@gmail.com';
            $mail->Password   = 'yourpassword';
            $mail->Port       = 465;
            $mail->setFrom('youremail@gmail.com', 'Your Name');
            $mail->addAddress($to);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}