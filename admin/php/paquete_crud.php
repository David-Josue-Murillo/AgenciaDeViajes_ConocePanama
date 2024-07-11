<?php
// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}


// Recibiendo  datos para crear un nuevo destino
if (isset($_POST['submit_nuevo_paquete'])) {
    echo "Recibiendo  datos para crear un nuevo destino";
    // Obteniendo los datos del formulario
    /*$nombre_destino = isset($_POST['destino']) ? mysqli_real_escape_string($conexion, $_POST['destino']) : false;
    $direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion, $_POST['direccion']) : false; 
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $url_imagen = isset($_POST['img-url']) ? $_POST['img-url'] : false;

    // Insertando los datos en la tabla destinos
    $sql = "INSERT INTO destinos (nombre_destino, direccion, descripcion, url_imagen) VALUES ('$nombre_destino', '$direccion', '$descripcion', '$url_imagen')";
    $resultado = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Destino creado correctamente';
    } else {
        $_SESSION['error'] = 'Error al crear el destino';
    }

    header('Location: ../../admin.php');
    exit();*/
}


// Recibiendo  datos para modificar un destino existente
if(isset($_POST['submit_modificar_paquete'])){
    echo "Recibiendo  datos para modificar un destino existente";
    /*$id_destino = intval($_POST['id_destino']);
    $nombre_destino = isset($_POST['destino']) ? mysqli_real_escape_string($conexion, $_POST['destino']) : false;
    $direccion = isset($_POST['direccion']) ? mysqli_real_escape_string($conexion, $_POST['direccion']) : false; 
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $url_imagen = isset($_POST['img-url']) ? $_POST['img-url'] : false;

    $sql = "UPDATE destinos SET nombre_destino = '$nombre_destino', direccion = '$direccion', descripcion = '$descripcion', url_imagen = '$url_imagen' WHERE id_destino = '$id_destino'";

    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario actualizado exitosamente";
        header('Location: ../../admin.php');
    }*/
}


// Eliminar destino
if(isset($_GET['destino'])){
    $id_usuario_delete = intval($_GET['destino']);
    $sql = "DELETE FROM destinos WHERE id_destino = '$id_usuario_delete'";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
        header('Location: ../../admin.php');
    }
}