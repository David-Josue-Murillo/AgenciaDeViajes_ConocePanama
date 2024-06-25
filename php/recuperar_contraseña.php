<?php 

// Verificar si los datos del formulario llegan por POST
if(isset($_POST['submit_recover-pass'])) {
    // Conexion a la base de datos y funciones de consultas
    include '../db/conexion.php';
    include '../db/funciones.php.php';

    // Iniciando una sesión
    if(!$_SESSION) {
        session_start();
    }

    // Validando que todos los datos del formulario esten completos y sean correctos
    if(!isset($_POST['email']) && !isset($_POST['phone'])) {
        // Verificando que los datos del formulario sean correctos
        echo '<script>alert("Por favor, rellena todos los campos")</script>';
        die();
    } 

    $email = $_POST['email'] ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    $phone = $_POST['phone'] ? mysqli_real_escape_string($conexion, trim($_POST['phone'])) : false;
    
    $errores = array();
    // Validación de los campos del formulario
    // Validación del campo "email"
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailValido = true;
    } else {
        $emailValido = false;
        $errores['email'] = 'El correo electrónico no es válido';
    }

    // Validación del campo "phone"
    if(!empty($phone) && is_numeric($phone)) {
        $phoneValido = true;
    } else {    
        $phoneValido = false;
        $errores['phone'] = 'El número de teléfono no es válido';
    }

    $guardarUsuario = false;
    if(count($errores) == 0){
        $guardarUsuario = true;

        // Verificar si el usuario existe
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = $conexion->query($sql);

        if($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();

            // Verificar si el telefono del usuario coincide con el telefono del formulario
            if($usuario['telefono'] == $phone) {
                header('Location: ../index.php');
            } else {
                $_SESSION['error_recover'] = 'El correo electrónico y el número de teléfono no coinciden';
            }
        } else {
            $_SESSION['error_recover'] = 'El correo electrónico no existe';
        }
    }

    $_SESSION['errores'] = $errores;
    header('Location: ../recover-pass.php');
}