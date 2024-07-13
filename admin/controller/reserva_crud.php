<?php
// Estableciendo la conexión a la base de datos
include_once '../db/conexion.php';
include_once '../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}

// Recibiendo  datos para modificar una reserva existente
if (isset($_POST['submit_modificar_reserva'])) {
    // Recibiendo los datos del formulario para modificar la reserva
    $id_reserva = isset($_POST['id_reserva']) ? intval($_POST['id_reserva']) : false;
    $nombre_usuario = isset($_POST['nombre_usuario']) ? mysqli_real_escape_string($conexion ,$_POST['nombre_usuario']) : false;
    $nombre_paquete = isset($_POST['nombre_paquete']) ? mysqli_real_escape_string($conexion ,$_POST['nombre_paquete']) : false;
    $descripcion = isset($_POST['descripcion_reserva']) ? mysqli_real_escape_string($conexion, $_POST['descripcion_reserva']) : false;
    $precio_reserva = isset($_POST['precio_reserva']) ? intval($_POST['precio_reserva']) : false;
    $metodo_pago = isset($_POST['metodo_pago']) ? mysqli_real_escape_string($conexion, $_POST['metodo_pago']) : false;

    // Validando que los datos del formulario esten completos y sean correctos
    if(empty($id_reserva) || empty($nombre_usuario) || empty($nombre_paquete) || empty($descripcion) || empty($precio_reserva) || empty($metodo_pago)){
        header('Location: ../admin.php');
        exit();
    }

    // Obtener solo el nombre del usuario
    $nombre = explode(' ', $nombre_usuario);
    $nombre_usuario = $nombre[0];

    //Obtener el id del usuario
    $sql = "SELECT id_usuario FROM usuarios WHERE nombre = '$nombre_usuario'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $id_usuario = $resultado->fetch_assoc();
    }

    // Obtener el id del paquete
    $sql = "SELECT id_paquete FROM paquetes WHERE nombre_paquete = '$nombre_paquete'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        $id_paquete = $resultado->fetch_assoc();
    }

    // Variable en donde se almacena el id del usuario y el id del paquete
    $id_usuario = $id_usuario['id_usuario'];
    $id_paquete = $id_paquete['id_paquete'];

    $sql = "UPDATE reservas SET id_usuario = '$id_usuario', id_paquete = '$id_paquete', descripcion = '$descripcion', precio_venta = '$precio_reserva', metodo_pago = '$metodo_pago' WHERE id_reserva = '$id_reserva'";
    $resultado = $conexion->query($sql);

    if ($conexion->query($sql) === TRUE) {
        $_SESSION['completado'] = "Reserva actualizada exitosamente";
    } else {
        $_SESSION['error'] = "Error al actualizar la reserva";
    }

    // Redireccionando al panel de administración
    header('Location: ../admin.php');
    exit();
}   

// Eliminar reserva
if (isset($_GET['id'])) {
    $id_reserva_delete = intval($_GET['id']);
    $sql = "DELETE FROM reservas WHERE id_reserva = '$id_reserva_delete'";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
        header('Location: ../admin.php');
    }
}   