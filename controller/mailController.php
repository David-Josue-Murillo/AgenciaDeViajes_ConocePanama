<?php

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController
{
    public function sendMail($to, $name, $subject, $message)
    {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP para Gmail
            $mail->isSMTP();                                       // Usar SMTP
            $mail->Host       = 'smtp.gmail.com';                  // Servidor SMTP de Gmail
            $mail->SMTPAuth   = true;                              // Habilitar autenticación SMTP
            $mail->Username   = 'dm514821@gmail.com';       // Nombre de usuario SMTP (tu dirección de correo electrónico)
            $mail->Password   = 'olkk ddpk ztvd rjmq';              // Contraseña SMTP de tu cuenta de Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Habilitar cifrado TLS/STARTTLS
            $mail->Port       = 587;                               // Puerto TCP para conectarse a Gmail

            // Destinatario
            $mail->setFrom('dm514821@gmail.com', 'Conoce Panama');   // Remitente
            $mail->addAddress($to, $name);   // Añadir un destinatario
            //$mail->addAddress('david.murillo01@up.ac.pa', 'Daviddddd');
            // Contenido del correo
            $mail->isHTML(true);        // Establecer el formato del correo a HTML
            $mail->Subject = utf8_decode($subject);  // Asunto
            $mail->Body    = $message;  // Cuerpo del correo en HTML

            // Enviar el correo
            $mail->send();
            echo 'El correo se ha enviado correctamente.';
        } catch (Exception $e) {
            echo "El correo no pudo ser enviado. Error: {$mail->ErrorInfo}";
        }
    }

    public function sendMailSuscription($email, $message)
    {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP para Gmail
            $mail->isSMTP();                                       // Usar SMTP
            $mail->Host       = 'smtp.gmail.com';                  // Servidor SMTP de Gmail
            $mail->SMTPAuth   = true;                              // Habilitar autenticación SMTP
            $mail->Username   = 'dm514821@gmail.com';       // Nombre de usuario SMTP (tu dirección de correo electrónico)
            $mail->Password   = 'olkk ddpk ztvd rjmq';              // Contraseña SMTP de tu cuenta de Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Habilitar cifrado TLS/STARTTLS
            $mail->Port       = 587;                               // Puerto TCP para conectarse a Gmail

            // Destinatario
            $mail->setFrom($email, $email);   // Remitente
            $mail->addAddress("dm514821@gmail.com");   // Añadir un destinatario
            //$mail->addAddress('david.murillo01@up.ac.pa', 'Daviddddd');
            // Contenido del correo
            $mail->isHTML(true);        // Establecer el formato del correo a HTML
            $mail->Subject = utf8_decode("Suscripción");  // Asunto
            $mail->Body    =  $message;  // Cuerpo del correo en HTML

            // Enviar el correo
            $mail->send();
            echo 'El correo se ha enviado correctamente.';
        } catch (Exception $e) {
            echo "El correo no pudo ser enviado. Error: {$mail->ErrorInfo}";
        }
    }
}

