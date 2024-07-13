<?php

include_once '../admin/db/conexion.php';

if(isset($_POST['submit_pago'])){
    // Obtener datos del formulario
    $id_paquete = isset($_POST['id_paquete']) ? mysqli_real_escape_string($conexion, $_POST['id_paquete']) : false;
    $paquete = isset($_POST['paquete']) ? mysqli_real_escape_string($conexion, $_POST['paquete']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ?  $_POST['precio'] : false;
    $metodo_pago = isset($_POST['metodo_pago']) ? mysqli_real_escape_string($conexion, $_POST['metodo_pago']) : false;

    echo $precio;

    // Validar datos
    if(!$id_paquete || !$paquete || !$descripcion || !$precio || !$metodo_pago){
        echo "Error: Faltan datos";
        exit();
    }

    $sql = "INSERT INTO pagos (id_paquete, nombre_paquete, descripcion, precio_venta, metodo_pago) VALUES ( '$id_paquete', '$paquete', '$descripcion', '$precio', '$metodo_pago')";
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