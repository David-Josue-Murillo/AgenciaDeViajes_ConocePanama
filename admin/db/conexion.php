<?php

//Servidor FilleZilaa
/*$host = 'localhost';
$user = 'u973323379_David';
$pass = 'Lucha533.';
$db = 'u973323379_David';*/

//Servidor Local
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'conoce_panama';

$conexion = new mysqli($host, $user, $pass, $db);
if($conexion->connect_error){
    echo "No se pudo conectar a la base de datos: ";
    die("No se pudo conectar a la base de datos: " . $conexion->connect_error);
} 

// Cofificación UTF-8
$conexion->query("SET NAMES 'utf8'");

