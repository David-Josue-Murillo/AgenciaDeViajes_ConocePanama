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


// Crear la tabla viajes
$query = "SHOW TABLES FROM `$name_db` LIKE 'viajes'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_viaje INT NOT NULL AUTO_INCREMENT,
    nombre_viaje VARCHAR(30) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    id_destino INT NOT NULL,
    PRIMARY KEY (id_viaje)";
    
    if(!crear_tabla('viajes', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

// Crear la tabla paquetes
$query = "SHOW TABLES FROM `$name_db` LIKE 'paquetes'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_paquete INT NOT NULL AUTO_INCREMENT,
    nombre_paquete VARCHAR(30) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    id_destino INT NOT NULL,
    PRIMARY KEY (id_paquete)";
    
    if(!crear_tabla('paquetes', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

// Crear la tabla reservas
$query = "SHOW TABLES FROM `$name_db` LIKE 'reservas'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_reserva INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    id_viaje INT NOT NULL,
    fecha_reserva DATE NOT NULL,
    estado VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_reserva)";
    if(!crear_tabla('reservas', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

//Crear la tabla estamento
$query = "SHOW TABLES FROM `$name_db` LIKE 'estamento'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_estamento INT NOT NULL AUTO_INCREMENT,
    id_tipo_usuario INT NOT NULL,
    PRIMARY KEY (id_estamento)";
    if(!crear_tabla('estamento', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

