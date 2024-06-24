<?php

include_once 'conexion.php';
include_once 'funciones.php';

echo "<h1>Area de consultas</h1>";
$name_table = 'usuarios';
$name_db = 'conoce_panama';

$query = "SHOW TABLES FROM $name_db LIKE '$name_table'";
$resultado = $conexion->query($query);
$existe = $resultado->num_rows > 0;

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
