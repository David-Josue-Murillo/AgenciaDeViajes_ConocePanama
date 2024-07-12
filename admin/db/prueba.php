<?php

include_once 'conexion.php';

echo "ok<br>";

$sql = "SELECT * FROM destinos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $destinos = array();
    while ($row = $resultado->fetch_assoc()) {
        $destinos[] = $row;
    }
}

echo "La id del destino es: ". $destinos[0]['id_destino']."<br>";
$id_destino = $destinos[0]['id_destino'];

$sql = "SELECT * FROM paquetes WHERE id_destino = '$id_destino'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    $id_paquete = $resultado->fetch_assoc();
}

echo "La id del paquete es: ". $id_paquete['id_paquete'];
