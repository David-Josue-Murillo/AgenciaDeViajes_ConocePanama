<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'conoce_panama';

$conexion = new mysqli($host, $user, $pass, $db);
if($conexion->connect_error){
    die("No se pudo conectar a la base de datos: " . $conexion->connect_error);
} 

// Cofificación UTF-8
$conexion->query("SET NAMES 'utf8'");