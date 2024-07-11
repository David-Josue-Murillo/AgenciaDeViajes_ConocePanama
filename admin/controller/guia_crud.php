<?php

// Estableciendo la conexión a la base de datos
include_once '../db/conexion.php';
include_once '../db/funciones.php';
include_once '../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}

if(isset($_POST['submit_nuevo_guia'])){
    // Obteniendo los datos del formulario para la creacion de un nuevo guia
    $nombre_guia = isset($_POST['nombre_guia']) ? mysqli_real_escape_string($conexion, $_POST['nombre_guia']) : false;
    $id_designacion = $_POST['id_designacion'] ? intval($_POST['id_designacion']) : false;
    $url_perfil = isset($_POST['url_perfil']) ? mysqli_real_escape_string($conexion, $_POST['url_perfil']) : false;
    
    // Validando que los datos del formulario esten completos y sean correctos
    if(empty($nombre_guia) || empty($id_designacion) || empty($url_perfil)){
        header('Location: ../admin.php');
        exit();
    }

    // Creando el nuevo guia
    $sql = "INSERT INTO guias (nombre_guia, url_perfil, designacion) VALUES ('$nombre_guia', '$url_perfil', '$id_designacion')";
    $resultado = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Guia creado correctamente';
    } else {
        $_SESSION['error'] = 'Error al crear el guia';
    }

    // Redireccionando al panel de administración
    header('Location: ../admin.php');
    exit();
}

if(isset($_POST['submit_modificar_guia'])){
    // Obteniendo los datos del formulario para modificar el guia
    $id_guia = isset($_POST['id_guia']) ? intval($_POST['id_guia']) : false;
    $nombre_guia = isset($_POST['nombre_guia']) ? mysqli_real_escape_string($conexion, $_POST['nombre_guia']) : false;
    $id_designacion = $_POST['id_designacion'] ? intval($_POST['id_designacion']) : false;
    $url_perfil = isset($_POST['url_perfil']) ? mysqli_real_escape_string($conexion, $_POST['url_perfil']) : false;
    
    // Validando que los datos del formulario esten completos y sean correctos
    if(empty($nombre_guia) || empty($id_designacion) || empty($url_perfil)){
        header('Location: ../admin.php');
        exit();
    }

    // Actualizando los datos en la tabla guias
    $sql = "UPDATE guias SET nombre_guia = '$nombre_guia', designacion = '$id_designacion', url_perfil = '$url_perfil' WHERE guia_id = '$id_guia'";
    $resultado = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Guia actualizado exitosamente';
    } else {
        $_SESSION['error'] = 'Error al actualizar la guia'; 
    }

    // Redireccionando al panel de administración
    header('Location: ../admin.php');
    exit();
}

// Eliminar guia
if (isset($_GET['id'])) {
    $id_guia_delete = intval($_GET['id']);
    $sql = "DELETE FROM guias WHERE guia_id = '$id_guia_delete'";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
        header('Location: ../admin.php');
    }
} 
