<?php

include_once '../admin/db/conexion.php';

if(isset($_POST['submit_pago'])){
    // Obtener datos del formulario
    $id_paquete = isset($_POST['id_paquete']) ? mysqli_real_escape_string($conexion, $_POST['id_paquete']) : false;
    $paquete = isset($_POST['paquete']) ? mysqli_real_escape_string($conexion, $_POST['paquete']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    $precio = isset($_POST['precio']) ? mysqli_real_escape_string($conexion, $_POST['precio']) : false;
    $metodo_pago = isset($_POST['metodo_pago']) ? mysqli_real_escape_string($conexion, $_POST['metodo_pago']) : false;

    // Verificando datos en pantalla
    echo "La id del paquete es: ". $id_paquete."<br>";
    echo "El nombre del paquete es: ". $paquete."<br>";
    echo "La descripcion del paquete es: ". $descripcion."<br>";
    echo "El precio del paquete es: ". $precio."<br>";
    echo "El metodo de pago es: ". $metodo_pago."<br>";

    // Validar datos
    /*if(!$paquete || !$descripcion || !$precio || !$metodo_pago){
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
    exit();*/
}