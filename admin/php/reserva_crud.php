<?php
// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}

// Recibiendo  datos para crear una nueva reserva
if (isset($_POST['submit_nueva_reserva'])) {
    // Recibiendo los datos del formulario para crear la reserva
    $id_usuario = isset($_POST['id_usuario']) ? mysqli_real_escape_string($conexion, $_POST['id_usuario']) : false;
    $id_destino = isset($_POST['id_destino']) ? mysqli_real_escape_string($conexion, $_POST['id_destino']) : false;
    $id_paquete = isset($_POST['id_paquete']) ? mysqli_real_escape_string($conexion, $_POST['id_paquete']) : false;
    $fecha_reserva = isset($_POST['fecha_reserva']) ? mysqli_real_escape_string($conexion, $_POST['fecha_reserva']) : false;
    $estado = isset($_POST['estado']) ? mysqli_real_escape_string($conexion, $_POST['estado']) : false;

    // Validando que los datos del formulario esten completos y sean correctos
    if(empty($id_usuario) || empty($id_destino) || empty($id_paquete) || empty($fecha_reserva) || empty($estado)){
        header('Location: ../../admin.php');
        exit();
    }

    // Crear la reserva en la base de datos
    $sql = "INSERT INTO reservas (id_usuario, id_destino, id_paquete, fecha_reserva, estado) VALUES ('$id_usuario', '$id_destino', '$id_paquete', '$fecha_reserva', '$estado')";
    $resultado = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Reserva creada correctamente';
    } else {
        $_SESSION['error'] = 'Error al crear la reserva';   
    }

    // Redireccionando al panel de administración
    header('Location: ../../admin.php');
    exit();
}

// Recibiendo  datos para modificar una reserva existente
if (isset($_POST['submit_modificar_reserva'])) {
    echo 'Probando que los dats se hayan modificado';
}   

// Eliminar reserva
if (isset($_GET['reserva'])) {
    echo 'Id de la reserva que se va a eliminar: ' . $_GET['reserva'];
}   