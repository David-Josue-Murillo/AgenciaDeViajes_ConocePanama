<?php
include_once '../../db/conexion.php';
include_once '../../db/funciones.php';
include_once '../../php/helpers.php';

borrarError();
if (!$_SESSION) {
    session_start();
}

// Crear nuevo usuario
if (isset($_POST['submit_nuevo_usuario'])) {

    $name = $_POST['name'] ? mysqli_real_escape_string($conexion, $_POST['name']) : false;
    $lastname = $_POST['lastname'] ? mysqli_real_escape_string($conexion, $_POST['lastname']) : false;
    $phone = $_POST['phone'] ? mysqli_real_escape_string($conexion, $_POST['phone']) : false;
    $email = $_POST['email'] ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    $password = $_POST['password'] ? mysqli_real_escape_string($conexion, $_POST['password']) : false;
    $tipo_usuario = intval($_POST['tipo_usuario']);

    $errores = array();

    // Validación de los campos del formulario
    // Validación del campo "name" 
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) {
        $nameValido = true;
    } else {
        $nameValido = false;
        $errores['name'] = 'El nombre no es válido';
    }

    // Validación del campo "lastname" 
    if (!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]/", $lastname)) {
        $lastnameValido = true;
    } else {
        $lastnameValido = false;
        $errores['lastname'] = 'El apellido no es válido';
    }

    //Validación del campo "phone"
    if (!empty($phone) && is_numeric($phone)) {
        $phoneValido = true;
    } else {
        $phoneValido = false;
        $errores['phone'] = 'El número de teléfono no es válido';
    }

    // Validación del campo "email"
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailValido = true;
    } else {
        $emailValido = false;
        $errores['email'] = 'El correo electrónico no es válido';
    }

    if (!empty($password) && strlen($password) >= 6) {
        $passwordValido = true;
    } else {
        $passwordValido = false;
        $errores['password'] = 'La contraseña no es válida';
    }

    $guardarUsuario = false;
    if (count($errores) == 0) {
        $guardarUsuario = true;

        // Cifrar la contraseña
        $passwordSegura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        // Insertar usuario en la tabla usuarios en la base de datos
        $sql = "INSERT INTO usuarios VALUES (null, '$name', '$lastname', '$phone', '$email', '$passwordSegura', '$tipo_usuario');";

        if ($conexion->query($sql) === TRUE) {
            // Redireccionar al formulario de login
            $_SESSION['completado'] = "Registro completado exitosamente";
            header('Location: ../../admin.php');
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    }

    $_SESSION['completado'] = $errores;
    $_SESSION['incompleto'] = "Registro completado exitosamente";
    header('Location: ../../admin.php');
}

// Modificar usuario
if (isset($_POST['submit_modificar_usuario'])) {
    
    $id_usuario = intval($_POST['id_usuario']);
    $name = $_POST['name'] ? mysqli_real_escape_string($conexion, $_POST['name']) : false;
    $lastname = $_POST['lastname'] ? mysqli_real_escape_string($conexion, $_POST['lastname']) : false;
    $phone = $_POST['phone'] ? mysqli_real_escape_string($conexion, $_POST['phone']) : false;
    $email = $_POST['email'] ? mysqli_real_escape_string($conexion, trim($_POST['email'])) : false;
    $tipo_usuario = intval($_POST['tipo_usuario']);

    $sql = "UPDATE usuarios SET nombre = '$name', apellido = '$lastname', telefono = '$phone', email = '$email', tipo_usuario = '$tipo_usuario' WHERE id_usuario = '$id_usuario'";

    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario actualizado exitosamente";
        header('Location: ../../admin.php');
    }
}

// Eliminar usuario
if(isset($_GET['user'])){
    $id_usuario_delete = intval($_GET['user']);
    $sql = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario_delete'";
    if ($conexion->query($sql) === TRUE) {
        // Redireccionar al formulario de login
        $_SESSION['completado'] = "Usuario eliminado exitosamente";
        header('Location: ../../admin.php');
    }
}