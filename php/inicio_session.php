<?php

if(isset($_POST['submit_login'])){
    // Conexion a la base de datos y funciones de consultas
    include '../db/conexion.php';
    include '../db/funciones.php.php';

    // Iniciando una sesión
    if(!$_SESSION) {
        session_start();
    }

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Verificando si el usuario existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0) {
        // Obtenemos el regirstro del usuario obtennido de la consulta
        $user = $resultado->fetch_assoc();

        // Verificamos si la contraseña del usuario coincide con la contraseña introducida
        if(password_verify($password, $user['password'])) {
            // Si la contraseña es correcta, iniciamos una sesión
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['nombre_user'] = $user['nombre'];
            $_SESSION['apellido_user'] = $user['apellido'];
            $_SESSION['telefono_user'] = $user['telefono'];
            $_SESSION['email_user'] = $user['email'];

            // Redireccionamos al formulario de inicio de sesión
            $_SESSION['login_existe'] = true;
            header('Location: ../index.php');
        } else {
            $_SESSION['error_login'] = "Contraseña incorrecta";
            header('Location: ../login.php');
        }
    } else {
        $_SESSION['error_login'] = "Usuario no encontrado";
        header('Location: ../login.php');
    }
}

