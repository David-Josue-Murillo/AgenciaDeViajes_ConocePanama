<?php
include_once 'db/conexion.php';

$contador = 1;

// Consulta para obtener los datos de la tabla usuarios
$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $usuarios = array();
    while ($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

// Consulta para obtener los datos de la tabla detinos
$sql = "SELECT * FROM destinos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $destinos = array();
    while ($row = $result->fetch_assoc()) {
        $destinos[] = $row;
    }
}

// Consulta para obtener los datos de la tabla paquetes
$sql = "SELECT * FROM paquetes";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $paquetes = array();
    while ($row = $result->fetch_assoc()) {
        $paquetes[] = $row;
    }
}

// Consulta para obtener los datos de la tabla reservas
$sql = "SELECT * FROM reservas";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $reservas = array();
    while ($row = $result->fetch_assoc()) {
        $reservas[] = $row;
    }
}

// Consulta para obtener los datos de los guias
$sql = "SELECT * FROM guias";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $guias = array();
    while ($row = $result->fetch_assoc()) {
        $guias[] = $row;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel de administración de la agencia de viajes en Panamá">
    <meta name="author" content="David Murillo">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="../assets/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Administrador</title>
</head>

<body>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    include_once '../php/helpers.php'
    ?>

    <?php if (!isset($_SESSION['login'])) : ?>
        <div class="container login-container">
            <div class="container-fluid bg-success">
                <h2 class="text-center font-weight-bold">Administrador</h2>
                <form id="loginForm" action="controller/login.php" method="post">
                    <div class="form-group mb-2">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Su email" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Su contraseña" required>
                    </div>

                    <?php if (isset($_SESSION['error_login'])) : ?>
                        <p class="alerta alerta-error"><?= $_SESSION['error_login'] ?></p>
                    <?php endif; ?>

                    <div class="form-group">
                        <input type="submit" name="submit_login" class="btn btn-primary btn-block w-100" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['login']) && $_SESSION['tipo_usuario'] != 3) : ?>
        <?php
        $rol = '';
        if ($_SESSION['tipo_usuario'] == 1) {
            $rol = 'ROOT';
        } else {
            $rol = 'Admin';
        }
        ?>

        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="logo" href="#">CONOCE PANAMÁ</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right text-center" style="margin-right: 30px;">
                            <li><a href=""><?php echo $_SESSION['nombre_user'] . ' ' . $_SESSION['apellido_user']; ?> - <?= $rol ?></a></li>
                            <li><a href="../php/exit.php">Salir</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center user-image-back">
                            <img id="logo_img" src="../assets/img/logo.png" class="img-responsive" />
                        </li>

                        <li>
                            <a href="#" id="usuarios"><i class="fa fa-table "></i>Usuarios</a>
                        </li>

                        <li>
                            <a href="#" id="destinos"><i class="fa fa-globe "></i>Destinos</a>
                        </li>

                        <li>
                            <a href="#" id="paquetes"><i class="fa fa-briefcase "></i>Paquetes</a>
                        </li>

                        <li>
                            <a href="#" id="reservas"><i class="fa fa-check"></i>Reservas</a>
                        </li>

                        <li>
                            <a href="#" id="guias"><i class="fa fa-users"></i>Guias</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->

            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-10">
                            <h2>Panel de Administrador</h2>
                        </div>
                        <div class="col-md-2">
                            <h2><i id="iconMail" class="fa fa-envelope-o"></i></h2>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-12 col-md-6 border-1 border-dark-subtle">
                            <div class="chart-container" id="chart__container">

                            </div>
                        </div>

                        <div class="col-12 col-md-6 border-1 border-dark-subtle">
                            <div class="chart-container" id="chart__container">

                            </div>
                        </div>
                    </div>
            </div>

            <!-- HTML Oculto para cargar el modal para enviar email -->
            <div class="contenedor-modal">
                <div class="modal-content col-md-6">
                    <div class="modal-header text-center">
                        <h3 id="modal-titulo"></h3>
                    </div>
                    <div class="modal-body">
                        <form action="../email/procesar.php" method="post" class="form-group" id="send_email">
                            <div class="form-group row">
                                <div class="form-group col-md-12">
                                    <label for="user_email">Para: </label><br>
                                    <select name="user_email" id="userEmail" class="custom-select px-5">
                                        <?php foreach ($usuarios as $usuario) : ?>
                                            <option value="<?= $usuario['email'] ?>"><?= $usuario['email']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="asunto_email">Asunto</label>
                                    <input type="text" class="form-control" id="asuntoEmail" name="asunto_email" placeholder="Asunto del mensaje" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="mensaje_email">Mensaje</label>
                                    <textarea name="mensaje_email" id="mensajeEmail" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </form>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary btn-block w-100" id="btn-enviar_email" form="send_email" name="send_email" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- HTML Oculto para cargar los datos de usuarios -->
    <div id="contenedor_usuarios" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;" id="header_usuarios">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Usuarios</h6>
                    <h1>Lista de Usuarios</h1>


                    <?php if (isset($_POST['completado'])) : ?>
                        <?php unset($_SESSION['incompleto']) ?>
                        <p class="alerta"><?= $_SESSION['completado'] ?></p>
                    <?php endif ?>

                    <?php if ($_SESSION['incompleto']) : ?>
                        <p class="alerta"><?= $_SESSION['incompleto'] ?></p>
                    <?php endif ?>

                    <button id="btn-crear-usuario" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Crear Usuario</button>
                </div>

                <div class="row" id="tabla-usuarios">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Tipo usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) : ?>
                                <tr>
                                    <td id="<?= $usuario['id_usuario'] ?>"><?= $contador++ ?></td>
                                    <td id="nombre_<?= $usuario['id_usuario'] ?>"><?php echo $usuario['nombre'] . ' ' . $usuario['apellido']; ?></td>
                                    <td id="telefono_<?= $usuario['id_usuario'] ?>"><?= $usuario['telefono'] ?></td>
                                    <td id="email_<?= $usuario['id_usuario'] ?>"><?= $usuario['email'] ?></td>
                                    <td id="tipo_usuario_<?= $usuario['id_usuario'] ?>">
                                        <?php
                                        $sql = "SELECT tipo_usuario FROM tipo_usuarios WHERE usuario_id = '$usuario[tipo_usuario]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $tipo_usuario = $result->fetch_assoc();
                                            echo $tipo_usuario['tipo_usuario'];
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="#" id="<?= $usuario['id_usuario'] ?>" class="btn btn-primary btn-editar <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $usuario['id_usuario'] ?>" class="btn btn-danger <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>" id="btn-borrar-usuario">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-warning btn-block w-100 fs" id="userPDF">Crear PDF</a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-success btn-block w-100" id="userEXCEL">Crear EXCEL</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- HTML Oculto para cargar el modal de usuarios -->
        <div class="contenedor-modal">
            <div class="modal-content col-md-6">
                <div class="modal-header text-center">
                    <h3 id="modal-titulo"></h3>
                </div>
                <div class="modal-body">
                    <form action="controller/usuario_crud.php" method="post" class="form-group" id="nuevo_usuario">
                        <div class="form-group row">
                            <div class="hidden">
                                <input type="hidden" id="id_usuario" name="id_usuario" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Apellido</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Apellido" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Telefono</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefono" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-md-6">
                                <label for="tipo_usuario">Tipo de usuario</label>
                                <select name="tipo_usuario" class="custom-select px-5" required="required">
                                    <option value="3">Usuario</option>
                                    <option value="2">Administrador</option>
                                    <option value="1">ROOT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 campo_password_delete">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block w-100" id="btn-guardar-user-modal" form="nuevo_usuario" name="submit_nuevo_usuario" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML Oculto para cargar los datos de destinos -->
    <div id="contenedor_destinos" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Destinos</h6>
                    <h1>Lista de Destinos</h1>
                    <button id="btn-crear-destino" class="btn btn-primary py-md-3 px-md-5 mt-2 mb-2 <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Crear Destino</button>
                </div>
                <div class="row" id="tabla-destinos">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Descripcion</th>
                                <th>url imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1 ?>
                            <?php foreach ($destinos as $destino) : ?>
                                <tr>
                                    <td id="<?= $destino['id_destino'] ?>"><?= $contador++ ?></td>
                                    <td id="destino_<?= $destino['id_destino'] ?>"><?= $destino['nombre_destino'] ?></td>
                                    <td id="direccion_<?= $destino['id_destino'] ?>"><?= $destino['direccion'] ?></td>
                                    <td id="descripcion_<?= $destino['id_destino'] ?>"><?= $destino['descripcion'] ?></td>
                                    <td id="url_imagen_<?= $destino['id_destino'] ?>"><?= $destino['ulr_imagen'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $destino['id_destino'] ?>" class="btn btn-primary btn-editar <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $destino['id_destino'] ?>" id="btn-borrar-destino" class="btn btn-danger <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- HTML Oculto para cargar el modal de destinos -->
        <div class="contenedor-modal">
            <div class="modal-content col-md-6">
                <div class="modal-header text-center">
                    <h3 id="modal-titulo"></h3>
                </div>
                <div class="modal-body">
                    <form action="controller/destino_crud.php" method="post" class="form-group" id="nuevo_destino" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="hidden">
                                <input type="hidden" id="id_destino" name="id_destino" value="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="destino">Nombre</label>
                                <input type="text" class="form-control" id="destino" name="destino" placeholder="Nombre del Destino" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="img-url">URL imagen</label>
                                <input type="url" class="form-control" id="img-url" name="img-url" required>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block w-100" id="btn-guardar-destino-modal" form="nuevo_destino" name="submit_nuevo_destino" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- HTML Oculto para cargar los datos de los paquetes -->
    <div id="contenedor_paquetes" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Paquetes</h6>
                    <h1>Lista de Paquetes</h1>
                    <button id="btn-crear-paquete" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Crear Paquete</button>
                </div>
                <div class="row" id="tabla-paquetes">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Destino</th>
                                <th>Nombre del paquete</th>
                                <th>Fecha de inicio</th>
                                <th>Fecha de fin</th>
                                <th>Descripcion</th>
                                <th>Cant. personas</th>
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1 ?>
                            <?php foreach ($paquetes as $paquete) : ?>
                                <tr>
                                    <td><?= $contador++ ?></td>
                                    <td id="destino_<?= $paquete['id_paquete'] ?>" accesskey="<?= $paquete['id_destino'] ?>">
                                        <?php
                                        $sql = "SELECT nombre_destino FROM destinos WHERE id_destino = '$paquete[id_destino]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $destino = $result->fetch_assoc();
                                        }
                                        echo $destino['nombre_destino'];
                                        ?>
                                    </td>
                                    <td id="nombre_paquete_<?= $paquete['id_paquete'] ?>"><?= $paquete['nombre_paquete'] ?></td>
                                    <td id="fecha_inicio_<?= $paquete['id_paquete'] ?>"><?= $paquete['fecha_inicio'] ?></td>
                                    <td id="fecha_fin_<?= $paquete['id_paquete'] ?>"><?= $paquete['fecha_fin'] ?></td>
                                    <td id="descripcion_<?= $paquete['id_paquete'] ?>"><?= $paquete['descripcion'] ?></td>
                                    <td id="cant_personas_<?= $paquete['id_paquete'] ?>"><?= $paquete['cantidad_personas'] ?></td>
                                    <td id="precio_<?= $paquete['id_paquete'] ?>"><?= $paquete['precio'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $paquete['id_paquete'] ?>" class="btn btn-primary btn-editar <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $paquete['id_paquete'] ?>" id="btn-borrar-paquete" class="btn btn-danger <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- HTML Oculto para cargar el modal de paquetes -->
        <div class="contenedor-modal">
            <div class="modal-content col-md-6">
                <div class="modal-header text-center">
                    <h3 id="modal-titulo"></h3>
                </div>
                <div class="modal-body">
                    <form action="controller/paquete_crud.php" method="post" class="form-group" id="nuevo_paquete">
                        <div class="form-group row">
                            <div class="hidden">
                                <input type="hidden" id="idPaquete" name="id_paquete" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="paquete">Paquete</label>
                                <input type="text" class="form-control" id="paquete" name="paquete" placeholder="Nombre del Destino" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fecha_inicio">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fechaInicio" name="fecha_inicio" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fecha_fin">Fecha Fin</label>
                                <input type="date" name="fecha_fin" id="fechaFin" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" required row="3" placeholder="Descripción del paquete"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cant_personas">Cantidad de personas</label>
                                <input type="number" name="cant_personas" id="cant_personas" class="form-control" required placeholder="Cantidad de personas">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" required placeholder="Precio del destino">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="destino">Nombre del Destino</label>

                                <?php
                                $sql = "SELECT * FROM destinos";
                                $result = $conexion->query($sql);
                                if ($result->num_rows > 0) :
                                ?>

                                    <select name="id_destino" id="idDestino">
                                        <?php while ($destino = $result->fetch_assoc()) : ?>
                                            <option value="<?php echo $destino['id_destino']; ?>"><?= htmlspecialchars($destino['nombre_destino']) ?></option>
                                        <?php endwhile; ?>
                                    </select>

                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block w-100" id="btn-guardar-paquete-modal" form="nuevo_paquete" name="submit_nuevo_destino" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML Oculto para cargar los datos de las Reservas -->
    <div id="contenedor_reservas" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Reservas</h6>
                    <h1>Lista de Reservas</h1>
                </div>
                <div class="row" id="tabla-reservas">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Paquete</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Metodo de Pago</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1 ?>
                            <?php foreach ($reservas as $reserva) : ?>
                                <tr>
                                    <td><?= $contador++ ?></td>
                                    <td id="usuario_<?= $reserva['id_reserva'] ?>" accesskey="<?= $reserva['id_usuario'] ?>">
                                        <?php
                                        $sql = "SELECT nombre, apellido FROM usuarios WHERE id_usuario = '$reserva[id_usuario]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $usuario = $result->fetch_assoc();
                                        }echo $usuario['nombre'] . ' ' . $usuario['apellido'];?>
                                    </td>
                                    <td id="paquete_<?= $reserva['id_reserva'] ?>" accesskey="<?= $reserva['id_paquete'] ?>">
                                        <?php
                                        $sql = "SELECT nombre_paquete FROM paquetes WHERE id_paquete = '$reserva[id_paquete]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $paquete = $result->fetch_assoc();
                                        }
                                        echo $paquete['nombre_paquete'];
                                        ?>
                                    </td>
                                    <td id="descripcionReserva_<?= $reserva['id_reserva'] ?>"><?= $reserva['descripcion_reserva'] ?></td>
                                    <td id="precio_<?= $reserva['id_reserva'] ?>"><?= $reserva['precio_venta'] ?></td>
                                    <td id="metodo_<?= $reserva['id_reserva'] ?>"><?= $reserva['metodo_pago'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $reserva['id_reserva'] ?>" class="btn btn-primary btn-editar <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $reserva['id_reserva'] ?>" id="btn-borrar-reserva" class="btn btn-danger <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- HTML Oculto para cargar el modal de Reservas -->
        <div class="contenedor-modal">
            <div class="modal-content col-md-6">
                <div class="modal-header text-center">
                    <h3 id="modal-titulo"></h3>
                </div>
                <div class="modal-body">
                    <form action="controller/reserva_crud.php" method="post" class="form-group" id="nueva_reserva">
                        <div class="form-group row">
                            <div class="hidden">
                                <input type="hidden" id="idReserva" name="id_reserva" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="usuario">Usuarios</label><br>
                                <input type="text" name="nombre_usuario" id="usuarioName" class="form-control" placeholder="Usuario" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="id_paquete">Nombre del Paquete</label>
                                <input type="text " name="nombre_paquete" id="nombrePaquete" class="form-control" placeholder="Nombre del Paquete" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="descripcion_reserva">Descripcion</label>
                                <textarea name="descripcion_reserva" id="descripcionReservaForm" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="precio_reserva">Precio</label>
                                <input type="number" class="form-control" id="precioReserva" name="precio_reserva" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="metodo_pago">Metodo de Pago</label><br>
                                <select class="custom-select px-5" id="metodoPago" name="metodo_pago" required="required">
                                    <option value="Visa">Visa</option>
                                    <option value="PayPal">PayPal</option>
                                    <option value="Yappy">Yappy</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block w-100" id="btn-guardar-reserva-modal" form="nueva_reserva" name="submit_nueva_reserva" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HTML Oculto para cargar los datos de los guias -->
    <div id="contenedor_guias" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Guias</h6>
                    <h1>Lista de Guias</h1>
                    <button id="btn-crear-guia" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Crear Guia</button>
                </div>
                <div class="row" id="tabla-guias">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Destino designado</th>
                                <th>url imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $contador = 1 ?>
                            <?php foreach ($guias as $guia) : ?>
                                <tr>
                                    <td><?= $contador++ ?></td>
                                    <td id="nombre_guia_<?= $guia['guia_id'] ?>"><?= $guia['nombre_guia'] ?></td>
                                    <td id="designacion_<?= $guia['guia_id'] ?>">
                                        <?php
                                        $sql = "SELECT nombre_destino FROM destinos WHERE id_destino = '$guia[designacion]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $destino = $result->fetch_assoc();
                                        }

                                        echo $destino['nombre_destino'];
                                        ?>
                                    </td>
                                    <td id="url_perfil_<?= $guia['guia_id'] ?>"><?= $guia['url_perfil'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $guia['guia_id'] ?>" class="btn btn-primary btn-editar <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $guia['guia_id'] ?>" id="btn-borrar-guia" class="btn btn-danger <?php if ($_SESSION['tipo_usuario'] == 1) : ?> disabled <?php endif; ?>">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- HTML Oculto para cargar el modal de Guias -->
        <div class="contenedor-modal">
            <div class="modal-content col-md-6">
                <div class="modal-header text-center">
                    <h3 id="modal-titulo"></h3>
                </div>
                <div class="modal-body">
                    <form action="controller/guia_crud.php" method="post" class="form-group" id="nuevo_guia">
                        <div class="form-group row">
                            <div class="hidden">
                                <input type="hidden" id="idGuia" name="id_guia" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nombre_guia">Nombre de la guia</label>
                                <input type="text" class="form-control" id="nombreGuia" name="nombre_guia" placeholder="Nombre de la guia" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="designacion">Destino designado</label>
                                <select name="id_designacion" id="designacion" class="custom-select px-5">
                                    <?php foreach ($destinos as $destino) : ?>
                                        <option value="<?= $destino['id_destino'] ?>"><?= $destino['nombre_destino'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="url_perfil">URL de la imagen</label>
                                <input type="url" class="form-control" id="urlPerfil" name="url_perfil" placeholder="URL de la imagen" required>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger btn-block w-100" id="btn-cerrar-modal">Cerrar</a>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary btn-block w-100" id="btn-guardar-guia-modal" form="nuevo_guia" name="submit_nuevo_guia" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script type="module" src="js/charts.js"></script>

</body>

</html>