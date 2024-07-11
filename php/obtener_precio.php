<?php
include '../admin/db/conexion.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

if (isset($_POST['destino'])) {
    $destinoId = $_POST['destino'];
    $sql = "SELECT precio FROM paquetes WHERE id_paquete = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $destinoId);
    $stmt->execute();
    $stmt->bind_result($precio);
    $stmt->fetch();
    $stmt->close();
    echo $precio;
}
