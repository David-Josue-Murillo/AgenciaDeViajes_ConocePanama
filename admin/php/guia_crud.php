<?php

// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}

if(isset($_POST['submit_nuevo_guia'])){
    echo 'Recibido nuevo guia';
}

if(isset($_POST['submit_modificar_guia'])){
    echo 'Recibido modificar guia';
}

if(isset($_GET['id'])){
    echo 'Recibido borrar guia';
}
