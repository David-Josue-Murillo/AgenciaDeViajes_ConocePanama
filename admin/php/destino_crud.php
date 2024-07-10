<?php
// Estableciendo la conexión a la base de datos
include_once '../../db/conexion.php';

// Iniciando una sesión
if(!$_SESSION) {
    session_start();
}


// Recibiendo  datos para crear un nuevo destino
if(isset($_POST['submit_nuevo_destino'])){
    
    // Obteniendo los datos del formulario
    $nombre_destino = $_POST['destino'] ? mysqli_real_escape_string($conexion, $_POST['$destino']) : false;
    $direccion = $_POST['direccion'] ? mysqli_real_escape_string($conexion, $_POST['$direccion']) : false; 
    $descripcion = $_POST['descripcion'] ? mysqli_real_escape_string($conexion, $_POST['descripcion']) : false;
    
    // Inicializando la variable de la url de la imagen
    $url_imagen = false;

    // Verificar si se ha subido un archivo
    if(isset($_FILES['img-url']) && $_FILES['img-url']['error'] == 0 ) {
        $archivo = $_FILES['img-url'];
        $nombre_archivo = $archivo['name'];
        $tmp_archivo = $archivo['tmp_name'];
        $tamano_archivo = $archivo['size'];
        $error_archivo = $archivo['error'];

        // Extensiones de imagen
        $extensiones_img = ['jpg', 'jpeg', 'png', 'gif'];   
        $ext_archivo = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION)); // Obtener la extension del archivo


        if(in_array($ext_archivo, $extensiones_img)) {
            $ruta_destino = 'uploads/' . uniqid('', true) . '.' . $ext_archivo;

            if (move_uploaded_file($tmp_archivo, $ruta_destino)) {
                $url_imagen = mysqli_real_escape_string($conexion, $ruta_destino);
            } else {
                $_SESSION['error_archivo'] = "Hubo un error al mover el archivo.";
                header('Location: ../../admin.php');
            }
        } else {
            $_SESSION['error_archivo'] = "El archivo no es una imagen válida.";
            header('Location: ../../admin.php');
        }
    }


    // Creando la tabla destinos
    /*$sql = "INSERT INTO destinos (nombre_destino, direccion, descripcion, url_imagen) VALUES ('$nombre_destino', '$direccion', '$descripcion', '$url_imagen')";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo 'Destino creado correctamente';
    }*/
}


// Recibiendo  datos para modificar un destino existente
if(isset($_POST['submit_modificar_destino'])){
    echo 'Modificando destino';
}