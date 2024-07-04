<?php


if (isset($_POST['submit_login'])) {
    include '../../db/conexion.php'; // Incluyendo la conexión a la base de datos
    include '../../db/funciones.php'; // Incluyendo las funciones de la base de datos

    if (!isset($_SESSION)) { // Verificando si no hay una sesión iniciada
        session_start(); // Iniciando la sesión
    }

    $email = trim($_POST['email']); // Obteniendo el email del usuario
    $password = $_POST['password']; // Obteniendo la contraseña del usuario

    // Veroficando que el email existan en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'"; // consulta SQL para verificar si el email existe en la base de datos
    $resultado = $conexion->query($sql); // Ejecutando la consulta SQL

    if($resultado->num_rows > 0) { // Verificando si hubo resultados
        $user = $resultado->fetch_assoc(); // Se obtiene el regirstro del usuario obtennido de la consulta
        $email = $user['email']; // Obteniendo el email del usuario

        // Se verifica si la contraseña del usuario coincide con la contraseña introducida
        if(password_verify($password, $user['password'])) {
            // Si la contraseña es correcta, iniciamos una sesión
            $_SESSION['id_usuario'] = $user['id_usuario'];
            $_SESSION['nombre_user'] = $user['nombre'];
            $_SESSION['apellido_user'] = $user['apellido'];
            $_SESSION['telefono_user'] = $user['telefono'];
            $_SESSION['email_user'] = $user['email'];

            // Redireccionamos al formulario de inicio de sesión
            $_SESSION['login'] = true;
            header('Location: ../../admin.php');
        } else {
            $_SESSION['error_login'] = "Contraseña incorrecta";
            header('Location: ../../admin.php');
        }
    } else {
        $_SESSION['error_login'] = "Usuario no encontrado";
        header('Location: ../../admin.php');
    }
    
}
