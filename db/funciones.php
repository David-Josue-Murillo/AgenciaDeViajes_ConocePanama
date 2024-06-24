<?php 

// Conexión a la base de datos
include_once 'conexion.php';

// Función para verificar si la tabla existe
function tabla_existe($tabla, $db) {
    $query = "SHOW TABLES FROM $db LIKE '$tabla'";
    $resultado = $db->query($query);
    $existe = $resultado->num_rows > 0;
    return $existe;
}

// Función para crear la tabla
function crear_tabla($tabla, $campos, $db) {
    $query = "CREATE TABLE $tabla ($campos)";
    $db->query($query);
}

// Función para insertar un registro
function insertar_registro($tabla, $campos, $valores, $db) {
    $query = "INSERT INTO $tabla ($campos) VALUES ($valores)";
    $db->query($query);
}

// Función para actualizar un registro
function actualizar_registro($tabla, $campos, $valores, $db) {
    $query = "UPDATE $tabla SET $campos WHERE $valores";
    $db->query($query);
}

// Función para eliminar un registro
function eliminar_registro($tabla, $campos, $valores, $db) {
    $query = "DELETE FROM $tabla WHERE $campos = $valores";
    $db->query($query);
}

// Función para obtener todos los registros de una tabla
function obtener_todos_registros($tabla, $campos, $db) {
    $query = "SELECT $campos FROM $tabla";
    $resultado = $db->query($query);
    $registros = $resultado->fetch_all(MYSQLI_ASSOC);
    return $registros;
}

// Función para obtener un registro específico de una tabla
function obtener_registro($tabla, $campos, $valores, $db) {
    $query = "SELECT $campos FROM $tabla WHERE $valores";
    $resultado = $db->query($query);
    $registro = $resultado->fetch_assoc();
    return $registro;
}

// Función para obtener el número de registros de una tabla
function obtener_cantidad_registros($tabla, $campos, $db) {
    $query = "SELECT COUNT(*) FROM $tabla";
    $resultado = $db->query($query);
    $cantidad = $resultado->fetch_assoc()['COUNT(*)'];
    return $cantidad;
}

// Función para obtener la lista de campos de una tabla
function obtener_lista_de_campos($tabla, $db) {
    $query = "DESCRIBE $tabla";
    $resultado = $db->query($query);
    $campos = [];
    while ($registro = $resultado->fetch_assoc()) {
        $campos[] = $registro['Field'];
    }
    return $campos;
}

// Función para obtener la lista de campos de una tabla
function obtener_lista_de_fechas($tabla, $db) {
    $query = "DESCRIBE $tabla";
    $resultado = $db->query($query);
    $campos = [];
    while ($registro = $resultado->fetch_assoc()) {
        $campos[] = $registro['Field'];
    }
    return $campos;
}

// Función para obtener la lista de campos de una tabla
function obtener_lista_de_tipos($tabla, $db) {
    $query = "DESCRIBE $tabla";
    $resultado = $db->query($query);
    $campos = [];
    while ($registro = $resultado->fetch_assoc()) {
        $campos[] = $registro['Field'];
    }
    return $campos;
}
