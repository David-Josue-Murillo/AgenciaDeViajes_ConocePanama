<?php

include_once 'conexion.php';
include_once 'funciones.php';

// Consulta la creación y verificación de la tabla (si existen)
$name_db = 'u973323379_David';


/* ************************************************************************** */
                            /* Creación de tablas */
/* ************************************************************************** */


// Crear la tabla usuarios
$query = "SHOW TABLES FROM `$name_db` LIKE 'usuarios'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_usuario INT NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR(20) NOT NULL, 
    apellido VARCHAR(20) NOT NULL, 
    telefono INT NOT NULL, 
    email VARCHAR(35) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL,
    tipo_usuario INT NOT NULL,
    PRIMARY KEY (id_usuario)";
    
    if(!crear_tabla('usuarios', $campos_user, $conexion)) {
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
    nombre_destino VARCHAR(30) NOT NULL, 
    direccion VARCHAR(50) NOT NULL,
    descripcion TEXT,
    ulr_imagen VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_destino)";
    
    if(!crear_tabla('destinos', $campos_user, $conexion)) {
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
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    descripcion TEXT NOT NULL,
    cantidad_personas INT NOT NULL,
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
    id_paquete INT NOT NULL,
    descripcion_reserva TEXT NOT NULL,
    precio_venta DECIMAL(10,2) NOT NULL,
    metodo_pago VARCHAR(10) NOT NULL,
    PRIMARY KEY (id_reserva)";
    if(!crear_tabla('reservas', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}


// Crear la tabla guias
$query = "SHOW TABLES FROM `$name_db` LIKE 'guias'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "guia_id INT NOT NULL AUTO_INCREMENT,
    nombre_guia VARCHAR(50) NOT NULL,
    url_perfil VARCHAR(255) NOT NULL,
    designacion INT NOT NULL,
    PRIMARY KEY (guia_id)";
    
    if(!crear_tabla('guias', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else { 
        echo "Error al crear la tabla";
    }
}


// Crear la tabla fecha_paquetes
$query = "SHOW TABLES FROM `$name_db` LIKE 'fecha_paquetes'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "id_fecha_paquete INT NOT NULL AUTO_INCREMENT,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    id_destino INT NOT NULL,
    PRIMARY KEY (id_fecha_paquete)";
    
    if(!crear_tabla('fecha_paquetes', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}


// Crear la tabla tipo_usuarios
$query = "SHOW TABLES FROM `$name_db` LIKE 'tipo_usuarios'";
$resultado = $conexion->query($query);

if(!$resultado->num_rows){
    $campos_user = "usuario_id INT NOT NULL AUTO_INCREMENT,
    tipo_usuario VARCHAR(15) NOT NULL,
    PRIMARY KEY (usuario_id)";

    if(!crear_tabla('tipo_usuarios', $campos_user, $conexion)) {
        echo "Tabla creada con éxito";
    } else {
        echo "Error al crear la tabla";
    }
}

header('Location: ../../index.php');
exit();