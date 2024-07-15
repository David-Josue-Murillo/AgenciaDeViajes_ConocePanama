<?php
include_once '../admin/db/conexion.php';
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

if (isset($input['id_paquete'])) {
    $id_paquete = $input['id_paquete'];

    $sql = "SELECT cantidad_personas FROM paquetes WHERE id_paquete = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('s', $id_paquete);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        echo json_encode(['success' => true, 'cantidad_personas' => $row['cantidad_personas']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'No se encontró el paquete']);
    }

    $stmt->close();
    $conexion->close();
} else {
    echo json_encode(['success' => false, 'message' => 'ID de paquete no proporcionado']);
}
?>
