<?php 

// Verificar si los datos del formulario llegan por POST
if(isset($_POST['submit_recover-pass'])) {
    // Conexion a la base de datos y funciones de consultas
    include '../admin/db/conexion.php';
    include '../admin/db/funciones.php.php';

    // Iniciando una sesión
    if(!$_SESSION) {
        session_start();
    }


    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);


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

    if(count($errores) == 0){
        // Verificar si el usuario existe
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = $conexion->query($sql);

        if($resultado->num_rows > 0) {
            $user = $resultado->fetch_assoc();

            // Verificar si el telefono del usuario coincide con el telefono del formulario
            if($user['telefono'] == $phone) {
                // Si el usuario existe, redirigir al formulario de inicio de sesión
                $_SESSION['user-email'] = $user['email'];
                $_SESSION['phone'] = $user['telefono'];
                $_SESSION['completado'] = true;
            } else {
                $_SESSION['error_recover'] = 'El número de teléfono no coinciden';
            }
        } else {
            $_SESSION['error_recover'] = 'El correo electrónico no existe';
        }
    }

    $_SESSION['errores'] = $errores;
    header('Location: ../recover-pass.php');
}


