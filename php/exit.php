<?php

// Borrar todas las sessiones
session_unset();

// Borrar todas las variables de sesión
$_SESSION = array();

// Borrar todas las cookies
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

// Finalizar la sesión
session_destroy();

// Redireccionar al inicio
header('Location: ../index.php');