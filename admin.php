<?php 
if(!isset($_SESSION)){
    session_start();
}

if(isset($_GET['user'])){
    $id_usuario = $_GET['user'];
    $_SESSION['id_usuario'] = $id_usuario;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['nombre_user']. ' ' . $_SESSION['apellido_user']; ?></title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['nombre_user']. ' ' . $_SESSION['apellido_user']; ?></h1>
</body>
</html>