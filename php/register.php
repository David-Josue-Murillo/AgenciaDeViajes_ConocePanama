<?php

echo "Pruebaa 1<br>";
// Verificar si los datos del formulario llegan por POST
if(isset($_POST['submit_register'])) {
    // Conexion a la base de datos y funciones de consultas
    include '../admin/db/conexion.php';
    include '../admin/db/funciones.php.php';
    
    // Iniciando una sesión
    if(!$_SESSION) {
        session_start();
    }

    // Validando que todos los datos del formulario esten completos y sean correctos
    if(!isset($_POST['name']) && !isset($_POST['lastname']) && !isset($_POST['phone']) && !isset($_POST['email']) && !isset($_POST['password']) && !isset($_POST['confirmpassword'])) {
        // Verificando que los datos del formulario sean correctos
        echo '<script>alert("Por favor, rellena todos los campos")</script>';
        die();
    } 

    echo "Pruebaa 2<br>";
    $name = $_POST['name'] ? mysqli_real_escape_string($conexion, $_POST['name']) : false;
    $lastname = $_POST['lastname'] ? mysqli_real_escape_string($conexion, $_POST['lastname']) : false;
    $phone = $_POST['phone'] ? intval($_POST['phone']) : false;
    $email = $_POST['email'] ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    $password = $_POST['password'] ? mysqli_real_escape_string($conexion, $_POST['password']) : false;
    $confirmpassword = $_POST['confirmpassword'] ? mysqli_real_escape_string($conexion, $_POST['confirmpassword']) : false;
      
    $errores = array();

    // Validación de los campos del formulario
    // Validación del campo "name" 
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $nameValido = true;
    } else {
        $nameValido = false;
        $errores['name'] = 'El nombre no es válido';
    }

    // Validación del campo "lastname" 
    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
        $lastnameValido = true;
    } else {
        $lastnameValido = false;
        $errores['lastname'] = 'El apellido no es válido';
    }

    //Validación del campo "phone"
    if(!empty($phone) && is_numeric($phone)) {
        $phoneValido = true;
    } else {
        $phoneValido = false;
        $errores['phone'] = 'El número de teléfono no es válido';
    }

    // Validación del campo "email"
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailValido = true;
    } else {
        $emailValido = false;
        $errores['email'] = 'El correo electrónico no es válido';
    }

    if(!empty($password) && strlen($password) >= 6) {
        $passwordValido = true;

        // Validación del campo "confirmpassword"
        if($password != $confirmpassword) {
            $passwordValido = false;
            $errores['confirmpassword'] = 'Las contraseñas no coinciden';
        }
    } else {
        $passwordValido = false;
        $errores['password'] = 'La contraseña no es válida';
    }

    echo "Pruebaa 3<br>";
    $guardarUsuario = false;
    if(count($errores) == 0){
        $guardarUsuario = true;

        // Cifrar la contraseña
        $passwordSegura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        // Insertar usuario en la tabla usuarios en la base de datos
        $sql = "INSERT INTO usuarios (nombre, apellido, telefono, email, password, tipo_usuario) VALUES ('$name', '$lastname', $phone, '$email', '$passwordSegura', 3);";
        if($conexion->query($sql)) {
            echo "Pruebaa 4<br>";
            // Redireccionar al formulario de login
            $_SESSION['completado'] = "Registro completado exitosamente";    
            header('Location: ../pages/login.php');
            exit();
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    }    

    echo "Pruebaa 5<br>";
    $_SESSION['errores'] = $errores;
    $_SESSION['incompleto'] = "Registro fallido";   
    header('Location: ../pages/login.php');
    exit();
}