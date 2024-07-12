<?php

echo "Pago exitoso";
include_once '../admin/db/conexion.php';

if(isset($_POST['submit_pago'])){
    // Obtener datos del formulario
    $paquete = isset($_POST['paquete']) ? mysqli_real_escape_string($conexion, $_POST['paquete']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $metodo_pago = isset($_POST['metodo_pago']) ? mysqli_real_escape_string($conexion, $_POST['metodo_pago']) : false;

    // Validar datos
    if(!$paquete || !$descripcion || !$precio || !$metodo_pago){
        echo "Error: Faltan datos";
        exit;
    }

    $sql = "INSERT INTO pagos (nombr_paquete, descripcion, precio_venta, metodo_pago) VALUES ('$paquete', '$descripcion', '$precio', '$metodo_pago')";
    $resultado = $conexion->query($sql);    // Ejecutando la consulta SQL

    // Verificando si se insertó correctamente
    if ($conexion->affected_rows > 0) {
        $_SESSION['completado'] = "Pago exitoso";
    } else {
        $_SESSION['error'] = "Error al procesar el pago";
    }

    // Redireccionar al formulario de inicio
    header('Location: ../index.php');
    exit();
}