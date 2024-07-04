<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Aquí debes reemplazar con tu lógica de validación, por ejemplo, verificando en una base de datos
  $validEmail = "admin@example.com";
  $validPassword = "password123";

  if ($email === $validEmail && $password === $validPassword) {
    $_SESSION['admin'] = true;
    header("Location: ../index.php");
    exit();
  } else {
    echo "Email o contraseña incorrectos.";
  }
}

