<?php
include '../admin/db/conexion.php'; // Asegúrate de incluir tu archivo de conexión a la base de datos

if (isset($_POST['destino'])) {
    $destinoId = $_POST['destino'];
    $sql = "SELECT fecha_inicio, fecha_fin FROM paquetes WHERE id_paquete = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $destinoId);
    $stmt->execute();
    $stmt->bind_result($fecha_inicio, $fecha_fin);
    $stmt->fetch();
    $stmt->close();
    
    $fechas = array(
        'fecha_inicio' => date('Y-m-d', strtotime($fecha_inicio)),
        'fecha_fin' => date('Y-m-d', strtotime($fecha_fin))
    );
    
    echo json_encode($fechas);
}

