<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';

$conect = new mysqli($host, $user, $pass);
if($conect->connect_error){
    die("La conexion ha fallado: " . $conexion->connect_error);
} 

// Consulta para crear la base de datos
$sql = "CREATE DATABASE $db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
$nombre_db = "conoce_panama";

if ($conn->query($sql) === TRUE) {
    echo "Base de datos '$nombre_db' creada exitosamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}

$conn->close();