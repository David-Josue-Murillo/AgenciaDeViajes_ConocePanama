<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';

$conexion = new mysqli($host, $user, $pass, "");
if($conexion->connect_error){
    die("No se pudo conectar a la base de datos: " . $conexion->connect_error);
} else {
    echo "Conectado a la base de datos";
}

