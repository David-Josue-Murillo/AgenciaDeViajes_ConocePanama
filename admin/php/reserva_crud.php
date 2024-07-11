<?php
// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}

// Recibiendo  datos para crear una nueva reserva
if (isset($_POST['submit_nueva_reserva'])) {
    echo 'Probando que los dats se hayan creado';
}

// Recibiendo  datos para modificar una reserva existente
if (isset($_POST['submit_modificar_reserva'])) {
    echo 'Probando que los dats se hayan modificado';
}   

// Eliminar reserva
if (isset($_GET['reserva'])) {
    echo 'Id de la reserva que se va a eliminar: ' . $_GET['reserva'];
}   