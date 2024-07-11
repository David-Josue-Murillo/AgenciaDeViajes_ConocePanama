<?php
// Estableciendo la conexión a la base de datos
include_once '../db/conexion.php';
include_once '../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}


// Recibiendo  datos para crear un nuevo paquete
if (isset($_POST['submit_nuevo_paquete'])) {
    // Obteniendo los datos del formulario para crear el paquete
    $nombre_paquete = isset($_POST['paquete']) ? mysqli_real_escape_string($conexion, $_POST['paquete']) : false;
    $fecha_inicio = isset($_POST['fecha_inicio']) ?  $_POST['fecha_inicio'] : false;
    $fecha_fin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $id_destino = intval($_POST['id_destino']);

    // Insertando los datos en la tabla paquetes
    $sql = "INSERT INTO paquetes (nombre_paquete, fecha_inicio, fecha_fin, descripcion, precio, id_destino) VALUES ('$nombre_paquete', '$fecha_inicio', '$fecha_fin', '$descripcion', '$precio', '$id_destino')";
    $resultado = $conexion->query($sql);    // Ejecutando la consulta SQL

    // Verificando si se insertó correctamente
    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Destino creado correctamente';
    } else {
        $_SESSION['error'] = 'Error al crear el destino';
    }

    // Redireccionando al panel de administración
    header('Location: ../admin.php');
    exit();
}


// Recibiendo  datos para modificar un paquete existente
if(isset($_POST['submit_modificar_paquete'])){
    // Obteniendo los datos del formulario para modificar el paquete
    $id_paquete = intval($_POST['id_paquete']);
    $nombre_paquete = isset($_POST['paquete']) ? mysqli_real_escape_string($conexion, $_POST['paquete']) : false;
    $fecha_inicio = isset($_POST['fecha_inicio']) ?  $_POST['fecha_inicio'] : false;
    $fecha_fin = isset($_POST['fecha_fin']) ? $_POST['fecha_fin'] : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $id_destino = intval($_POST['id_destino']);

    // Actualizando los datos en la tabla paquetes
    $sql = "UPDATE paquetes SET nombre_paquete = '$nombre_paquete', fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', descripcion = '$descripcion', precio = '$precio', id_destino = '$id_destino' WHERE id_paquete = '$id_paquete'";
    $resultado = $conexion->query($sql);    // Ejecutando la consulta SQL

    // Verificando si se actualizó correctamente
    if ($conexion->query($sql) === TRUE) {
        $_SESSION['completado'] = "Usuario actualizado exitosamente";
    } else {
        $_SESSION['error'] = 'Error al actualizar el paquete';
    }

    // Redireccionando al panel de administración
    header('Location: ../admin.php');
    exit();
}


// Eliminar paquete
if(isset($_GET['paquete'])){
    $id_usuario_delete = intval($_GET['paquete']); // Obtener el id de usuario
    $sql = "DELETE FROM paquetes WHERE id_paquete = '$id_usuario_delete'"; // Consulta para eliminar el usuario
    
    // Ejecundo la consulta SQL
    if ($conexion->query($sql) === TRUE) {
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
    } else {
        $_SESSION['error'] = 'Error al eliminar el usuario';
    }

    // Redireccionar al panel de administración
    header('Location: ../admin.php');
    exit();
}