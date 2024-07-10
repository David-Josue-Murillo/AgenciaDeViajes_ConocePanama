<?php
// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}


if(isset($_POST['submit_nuevo_destino'])){
    
    // Obteniendo los datos del formulario
    $nombre_destino = $_POST['destino'] ? mysqli_real_escape_string($conexion, $_POST['$destino']) : false;
    $direccion = $_POST['direccion'] ? mysqli_real_escape_string($conexion, $_POST['$direccion']) : false; 
    $descripcion = $_POST['descripcion'] ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $url_imagen = $_POST['img-url'] ;

    // Creando la tabla destinos
    $sql = "INSERT INTO destinos (nombre_destino, direccion, descripcion, url_imagen) VALUES ('$nombre_destino', '$direccion', '$descripcion', '$url_imagen')";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo 'Destino creado correctamente';
    }
}

if(isset($_POST['submit_modificar_destino'])){
    echo 'Modificando destino';
}