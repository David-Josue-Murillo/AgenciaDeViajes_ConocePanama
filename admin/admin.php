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

    include_once 'php/helpers.php'
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

    <?php if (isset($_SESSION['login'])) : ?>
        <?php
        $rol = '';
        if($_SESSION['tipo_usuario'] == 2){
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

                        <li>
                            <a href="#" id="nuevaTabla"><i class="fa fa-edit "></i>Crear Tabla</a>
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
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-6" id="chart__container">
                            <h5>Widget Box One</h5>
                            <div class="panel panel-primary text-center no-boder bg-color-blue">
                                <div class="panel-body">
                                    <i class="fa fa-bar-chart-o fa-5x"></i>
                                    <h3>120 GB </h3>
                                </div>
                                <div class="panel-footer back-footer-blue">
                                    Disk Space Available

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <h5>Widget Box Two</h5>
                            <div class="alert alert-info text-center">
                                <i class="fa fa-desktop fa-5x"></i>
                                <h3>100$ </h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Buttons Samples</h5>
                            <a href="#" class="btn btn-default">default</a>
                            <a href="#" class="btn btn-primary">primary</a>
                            <a href="#" class="btn btn-danger">danger</a>
                            <a href="#" class="btn btn-success">success</a>
                            <a href="#" class="btn btn-info">info</a>
                            <a href="#" class="btn btn-warning">warning</a>
                            <br />
                            <br />
                            <h5>Progressbar Samples</h5>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Text Input Example</label>
                                <input class="form-control" />
                                <p class="help-block">Help text here.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Click to see blank page</label>
                            <a href="blank.html" target="_blank" class="btn btn-danger btn-lg btn-block">BLANK PAGE</a>
                        </div>
                        <div class="col-md-4">
                            For More Examples Please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Table Sample One</h5>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-md-6">
                            <h5>Table Sample Two</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>John</td>
                                            <td>Smith</td>
                                            <td>@jsmith</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />


                    <div class="row">
                        <div class="col-md-4">
                            <h5>Panel Sample</h5>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Default Panel
                                </div>
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                <div class="panel-footer">
                                    Panel Footer
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>Accordion Sample</h5>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">Collapsible Group Item #1</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">Collapsible Group Item #3</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">


                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>Tabs Sample</h5>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab">Profile</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab">Messages</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <h4>Home Tab</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Profile Tab</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    </p>

                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit eserunt mollit anim id est laborum.
                                    </p>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- /. ROW  -->
                    <hr />
                    <div class="row">
                        <div class="col-md-12">
                            <h5>Information</h5>
                            This is a type of bare admin that means you can customize your own admin using this admin structured template . For More Examples of bootstrap elements or components please visit official bootstrap website <a href="http://getbootstrap.com" target="_blank">getbootstrap.com</a>
                            . And if you want full template please download <a href="http://www.binarytheme.com/bootstrap-free-admin-dashboard-template/" target="_blank">FREE BCORE ADMIN </a>&nbsp;,&nbsp; <a href="http://www.binarytheme.com/free-bootstrap-admin-template-siminta/" target="_blank">FREE SIMINTA ADMIN</a> and <a href="http://binarycart.com/" target="_blank">FREE BINARY ADMIN</a>.

                        </div>
                    </div>
                    <!-- /. ROW  -->

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
    <?php endif; ?>

    <!-- HTML Oculto para cargar los datos de usuarios -->
    <div id="contenedor_usuarios" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;" id="header_usuarios">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Usuarios</h6>
                    <h1>Lista de Usuarios</h1>


                    <?php if(isset($_POST['completado'])): ?>
                        <?php unset($_SESSION['incompleto']) ?>
                        <p class="alerta"><?= $_SESSION['completado'] ?></p>
                    <?php endif ?>

                    <?php if($_SESSION['incompleto']): ?>
                        <p class="alerta"><?= $_SESSION['incompleto'] ?></p>
                    <?php endif ?>

                    <button id="btn-crear-usuario" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Crear Usuario</button>
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
                                        <a href="#" id="<?= $usuario['id_usuario'] ?>" class="btn btn-primary btn-editar <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $usuario['id_usuario'] ?>" class="btn btn-danger <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>" id="btn-borrar-usuario">Eliminar</a>
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
                                    <option value="0">Usuario</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">ROOT</option>
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
                    <button id="btn-crear-destino" class="btn btn-primary py-md-3 px-md-5 mt-2 mb-2 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Crear Destino</button>
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
                            <?= $contador = 1 ?>
                            <?php foreach ($destinos as $destino) : ?>
                                <tr>
                                    <td id="<?= $destino['id_destino'] ?>"><?= $contador++?></td>
                                    <td id="destino_<?= $destino['id_destino'] ?>"><?= $destino['nombre_destino'] ?></td>
                                    <td id="direccion_<?= $destino['id_destino'] ?>"><?= $destino['direccion'] ?></td>
                                    <td id="descripcion_<?= $destino['id_destino'] ?>"><?= $destino['descripcion'] ?></td>
                                    <td id="url_imagen_<?= $destino['id_destino'] ?>"><?= $destino['url_imagen'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $destino['id_destino'] ?>" class="btn btn-primary btn-editar <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $destino['id_destino'] ?>" id="btn-borrar-destino" class="btn btn-danger <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Eliminar</a>
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
                            <div class="form-group col-md-6">
                                <label for="descripcion">Descripcion</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
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
                    <button id="btn-crear-paquete" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Crear Paquete</button>
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
                                <th>Precio</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $contador = 1 ?>
                            <?php foreach ($paquetes as $paquete) : ?>
                                <tr>
                                    <td><?= $contador++ ?></td>
                                    <td id="destino_<?=$paquete['id_paquete']?>" accesskey="<?= $paquete['id_destino'] ?>">
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
                                    <td id="precio_<?= $paquete['id_paquete'] ?>"><?= $paquete['precio'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $paquete['id_paquete'] ?>" class="btn btn-primary btn-editar <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $paquete['id_paquete'] ?>"  id="btn-borrar-paquete" class="btn btn-danger <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Eliminar</a>
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
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" required placeholder="Precio del destino">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="destino">Nombre del Destino</label>
                                
                                <?php 
                                    $sql = "SELECT * FROM destinos";
                                    $result = $conexion->query($sql);
                                    if ($result->num_rows > 0):
                                ?>

                                <select name="id_destino" id="idDestino">
                                    <?php while ($destino = $result->fetch_assoc()): ?>
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
                    <button id="btn-crear-reserva" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Crear Reserva</button>
                </div>

                <div class="row" id="tabla-reservas">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cliente</th>
                                <th>Destino</th>
                                <th>Paquete</th>
                                <th>Fecha de Reserva</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $contador = 1 ?>
                            <?php foreach ($reservas as $reserva) : ?>
                                <tr>
                                    <td><?= $contador++ ?></td>
                                    <td id="usuario_<?= $reserva['id_reserva'] ?>" accesskey="<?= $reserva['id_usuario'] ?>">
                                        <?php 
                                        $sql = "SELECT nombre, apellido FROM usuarios WHERE id_usuario = '$reserva[id_usuario]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $usuario = $result->fetch_assoc();
                                        }
                                        echo $usuario['nombre'] . ' ' . $usuario['apellido'];
                                        ?>
                                    </td>
                                    <td id="destino_<?= $reserva['id_reserva'] ?>" accesskey="<?= $reserva['id_destino'] ?>">
                                        <?php 
                                        $sql = "SELECT nombre_destino FROM destinos WHERE id_destino = '$reserva[id_destino]'";
                                        $result = $conexion->query($sql);
                                        if ($result->num_rows > 0) {
                                            $destino = $result->fetch_assoc();
                                        }
                                        echo $destino['nombre_destino'];
                                        ?>
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
                                    <td id="fechaReserva_<?= $reserva['id_reserva'] ?>"><?= $reserva['fecha_reserva'] ?></td>
                                    <td id="estado_<?= $reserva['id_reserva'] ?>"><?= $reserva['estado'] ?></td>
                                    <td>
                                        <a href="#" id="<?= $reserva['id_reserva'] ?>" class="btn btn-primary btn-editar <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $reserva['id_reserva'] ?>" id="btn-borrar-reserva" class="btn btn-danger <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Eliminar</a>
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
                                <select name="id_usuario" id="idUsuario" class="custom-select px-5">
                                    <?php foreach ($usuarios as $usuario) : ?>
                                        <option value="<?= $usuario['id_usuario'] ?>"><?= $usuario['nombre'] . ' ' . $usuario['apellido'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="id_destino">Destino</label>
                                <select name="id_destino" id="idDestino" class="custom-select px-5">
                                    <?php foreach ($destinos as $destino) : ?>
                                        <option value="<?= $destino['id_destino'] ?>"><?= $destino['nombre_destino'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="id_paquete">Paquete</label>
                                <select name="id_paquete" id="idPaquete" class="custom-select px-5">
                                    <?php foreach ($paquetes as $paquete) : ?>
                                        <option value="<?= $paquete['id_paquete'] ?>"><?= $paquete['nombre_paquete'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fecha_reserva">Fecha de reserva</label>
                                <input type="text" class="form-control" id="fechaReserva" name="fecha_reserva" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="estado">Estado</label><br>
                                <select name="estado" class="custom-select px-5" id="estado" required="required">
                                    <option value="Pendiente">Pendiente</option>
                                    <option value="Finalizado">Finalizado</option>
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
                    <button id="btn-crear-guia" class="btn btn-primary py-md-3 px-md-5 mt-2 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Crear Guia</button>
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
                            <?= $contador = 1 ?>
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
                                        <a href="#" id="<?= $guia['guia_id'] ?>" class="btn btn-primary btn-editar <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Editar</a>
                                        <a href="#" aria-label="<?= $guia['guia_id'] ?>" id="btn-borrar-guia" class="btn btn-danger <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>">Eliminar</a>
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

    <!-- HTML Oculto del formulario que crea una nueva tabla -->
    <div id="contenedor_nueva_tabla" style="display: none;">
        <div class="container-fluid py-5">
            <div class="col-lg-12 pt-5 pb-3">
                <div class="row text-center mb-3 pb-3" style="margin-bottom: 25px;">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 3px;">Nueva Tabla</h6>
                    <h1>Crear una nueva tabla</h1>
                </div>
                <div class="row" id="formTablaNueva">
                    <form action="controller/crear_nueva_tabla.php" method="post" class="form-group" id="formNuevaTabla">
                        <div class="form-group row" id="agregarColumnas">
                            <div class="form-group col-md-4">
                                <label for="nombre_tabla">Nombre de la tabla</label>
                                <input type="text" class="form-control" id="nombre_tabla" name="nombre_tabla" placeholder="Nombre de la tabla" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="agregarTabla">Agregar</label>

                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <input type="number" class="form-control" id="agregarCantidad" name="agregarTabla" value="1">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <input type="button" id="agregarCampos" class="btn btn-primary btn-block <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>" value="Agregar">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nombre_campo">Nombre del campo</label>
                                <input type="text" class="form-control" id="nombre_campo" name="nombre_campo[]" placeholder="Nombre del campo" required>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="tipo_dato">Tipo de dato</label><br>
                                <select name="tipo_dato[]" class="custom-select px-5" required="required">
                                    <option value="varchar">varchar</option>
                                    <option value="int">int</option>
                                    <option value="float">float</option>
                                    <option value="date">date</option>
                                    <option value="datetime">text</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="tamaño_dato">Tamaño de dato</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" id="tamaño_dato" name="tamaño_dato[]" placeholder="1">
                                </div>
                            </div>

                            <div class="form-group col-md-1 text-center">
                                <label for="nullo">Nullo</label>
                                <input type="checkbox" class="form-control" id="nullo" name="nullo[]">
                            </div>
                        </div>
                    </form>

                    <div class="form-group">
                        <input type="submit" name="submit_nueva_tabla" class="btn btn-primary btn-block w-100 <?php if($_SESSION['tipo_usuario'] == 1): ?> disabled <?php endif; ?>" form="formNuevaTabla" value="Crear Tabla" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script type="module" src="js/charts.js"></script>

</body>

</html>