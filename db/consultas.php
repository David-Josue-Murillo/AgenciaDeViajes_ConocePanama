<?php

include_once 'conexion.php';
include_once 'funciones.php';

// Consulta la creación y verificación de la tabla (si existen)
$name_db = 'conoce_panama';

// Crear la tabla usuarios
$query = "SHOW TABLES FROM `$name_db` LIKE 'usuarios'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_usuario INT NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR(20) NOT NULL, apellido VARCHAR(20) NOT NULL, 
    telefono INT NOT NULL, email VARCHAR(35) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL, PRIMARY KEY (id_usuario)";
    
    if(!crear_tabla($name_table, $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

// Crear la tabla destinos
$query = "SHOW TABLES FROM `$name_db` LIKE 'destinos'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_destino INT NOT NULL AUTO_INCREMENT, 
    nombre_destino VARCHAR(30) NOT NULL, ciudad VARCHAR(50) NOT NULL, 
    descripcion TEXT, PRIMARY KEY (id_destino)";
    
    if(!crear_tabla('destinos', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}



