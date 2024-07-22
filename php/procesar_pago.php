<?php

include_once '../admin/db/conexion.php';
include_once '../email/mailController.php';
include_once '../lib/vendor/autoload.php';


if(isset($_POST['submit_pago'])){
    // Obtener datos del formulario
    $id_usuario = isset($_POST['id_usuario']) ? mysqli_real_escape_string($conexion, $_POST['id_usuario']) : false;
    $id_paquete = isset($_POST['id_paquete']) ? mysqli_real_escape_string($conexion, $_POST['id_paquete']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ?  $_POST['precio'] : false;
    $metodo_pago = isset($_POST['metodo_pago']) ? mysqli_real_escape_string($conexion, $_POST['metodo_pago']) : false;


    // Validar datos
    if(!$id_usuario || !$id_paquete || !$descripcion || !$precio || !$metodo_pago){
        echo "Error: Faltan datos";
        exit();
    }


    $sql = "INSERT INTO reservas (id_usuario, id_paquete, descripcion_reserva, precio_venta, metodo_pago) VALUES ( $id_usuario, $id_paquete, '$descripcion', '$precio', '$metodo_pago')";
    $resultado = $conexion->query($sql);    // Ejecutando la consulta SQL

    echo $precio;
    
    // Verificando si se insertó correctamente
    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = "Pago exitoso";

        // Obteniendo correo de usuario
        $sql = "SELECT nombre, apellido, email FROM usuarios WHERE id_usuario = '$id_usuario'";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            $email = $resultado->fetch_assoc();
            
            // Enviar correo de confirmación
            $mail = new MailController();
            $mail->sendMailConfirmation($email['email'], $email['nombre'] . ' ' . $email['apellido'], "Pago exitoso", "Se ha procesado tu pago con éxito");
        }
        
    
    } else {
        $_SESSION['error'] = "Error al procesar el pago";
    }

    // Redireccionar al formulario de inicio
    header('Location: ../index.php');
    exit();
}