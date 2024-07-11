<?php

// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

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
        header('Location: ../../admin.php');
        exit();
    }

    // Creando el nuevo guia
    $sql = "INSERT INTO guias (nombre_completo, url_perfil, designacion) VALUES ('$nombre_guia', '$url_perfil', '$id_designacion')";
    $resultado = $conexion->query($sql);

    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = 'Guia creado correctamente';
    } else {
        $_SESSION['error'] = 'Error al crear el guia';
    }

    // Redireccionando al panel de administración
    header('Location: ../../admin.php');
    exit();
}

if(isset($_POST['submit_modificar_guia'])){
    echo 'Recibido modificar guia';
}

if(isset($_GET['id'])){
    echo 'Recibido borrar guia';
}
