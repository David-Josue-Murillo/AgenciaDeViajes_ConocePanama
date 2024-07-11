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
    $id_usuario = isset($_POST['id_usuario']) ? intval($_POST['id_usuario']) : false;
    $id_destino = isset($_POST['id_destino']) ? intval($_POST['id_destino']) : false;
    $id_paquete = isset($_POST['id_paquete']) ? intval($_POST['id_paquete']) : false;
    $fecha_reserva = isset($_POST['fecha_reserva']) ? mysqli_real_escape_string($conexion, $_POST['fecha_reserva']) : false;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : false;

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
    // Recibiendo los datos del formulario para modificar la reserva
    $id_reserva = isset($_POST['id_reserva']) ? intval($_POST['id_reserva']) : false;
    $id_usuario = isset($_POST['id_usuario']) ? intval($_POST['id_usuario']) : false;
    $id_destino = isset($_POST['id_destino']) ? intval($_POST['id_destino']) : false;
    $id_paquete = isset($_POST['id_paquete']) ? intval($_POST['id_paquete']) : false;
    $fecha_reserva = isset($_POST['fecha_reserva']) ? mysqli_real_escape_string($conexion, $_POST['fecha_reserva']) : false;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : false;

    // Validando que los datos del formulario esten completos y sean correctos
    if(empty($id_usuario) || empty($id_destino) || empty($id_paquete) || empty($fecha_reserva) || empty($estado)){
        header('Location: ../../admin.php');
        exit();
    }

    $sql = "UPDATE reservas SET id_usuario = '$id_usuario', id_destino = '$id_destino', id_paquete = '$id_paquete', fecha_reserva = '$fecha_reserva', estado = '$estado' WHERE id_reserva = '$id_reserva'";
    $resultado = $conexion->query($sql);

    if ($conexion->query($sql) === TRUE) {
        $_SESSION['completado'] = "Reserva actualizada exitosamente";
    } else {
        $_SESSION['error'] = "Error al actualizar la reserva";
    }

    // Redireccionando al panel de administración
    header('Location: ../../admin.php');
    exit();
}   

// Eliminar reserva
if (isset($_GET['id'])) {
    $id_reserva_delete = intval($_GET['id']);
    $sql = "DELETE FROM reservas WHERE id_reserva = '$id_reserva_delete'";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
        header('Location: ../../admin.php');
    }
}   