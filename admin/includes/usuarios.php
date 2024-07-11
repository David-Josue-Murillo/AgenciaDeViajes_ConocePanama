<?php
include_once '../db/conexion.php';

$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $usuarios = array();
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-0" id="contenedor_usuarios">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4">Panel de Administrador</h1>
                            <a href="../php/crear_usuario.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Crear Usuario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="../js/admin.js"></script>
</body>

</html>