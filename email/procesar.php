<?php

include_once '../admin/db/conexion.php';
include_once 'mailController.php';
include_once '../lib/vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new MailController();
    $mail->sendMail($email, $name, $subject, $message);

    echo "ok";
}

if(isset($_POST['send_email'])){
    
    // Obtener datos de la solicitud
    $email = isset($_POST['user_email']) ? $_POST['user_email'] : false;
    $asunto = isset($_POST['asunto_email']) ?  mysqli_real_escape_string($conexion, $_POST['asunto_email']) : false;
    $mensaje = isset($_POST['mensaje_email']) ?  mysqli_real_escape_string($conexion, $_POST['mensaje_email']) : false;
    $nameUser = "";

    // Validar datos
    if (!$email || !$asunto || !$mensaje) {
        echo "Error: Faltan datos";
        exit;
    }

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexion->query($sql);

    // Obteniendo nombre de usuario
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $nameUser = $user['nombre'] . ' ' . $user['apellido'];
    }

    // Enviar correo
    $mail = new MailController();
    $mail->sendMailUser($email, $nameUser, $asunto, $mensaje);

    header('Location: ../admin/admin.php');
    exit;
}