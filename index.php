<?php
include 'admin/db/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agencia de viajes en Panamá, ofrecemos viajes en Panamá y nos gustaría que te ayuden a conocer a Panamá">
    <meta name="keywords" content="Agencia de viajes en Panamá, ofrecemos viajes en Panamá, Panamá, viajes, turismo, turismo en Panamá">
    <meta name="author" content="David Murillo">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <title>Conoce Panamá</title>
</head>

<body>

    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>

    <nav class="container-fluid navbar navbar-expand-lg bg-nav">
        <div class="container-fluid">
            <div class="col-lg-4 col-12">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img class="nav__img img-responsive" src="assets/img/logo.png" alt="Administrador">
                    </a>
                    <div class="nav__text d-flex">
                        <p class="text-nav text-prim">Conoce Panamá</p>
                        <p class="text-nav text-second">Agencia de viajes en Panamá</p>
                    </div>
                </div>
            </div>


            <div class="col col-lg-8" id="navbarSupportedContent">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/paquetes.php">Paquetes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/panama.php">Panamá</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/servicios.php">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 m-auto">
                        <div class="card__icon py-3 ml-lg-3">
                            <a href="https://www.instagram.com/davidm_dev/" class="socialContainer containerOne">
                                <svg class="socialSvg instagramSvg" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg>
                            </a>
                            <a href="https://x.com/devdDavid507" class="socialContainer containerTwo">
                                <svg class="socialSvg twitterSvg" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg> </a>
                            <a href="https://www.linkedin.com/in/david-murillo-471a132a0/" class="socialContainer containerThree">
                                <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512">
                                    <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                </svg>
                            </a>
                            <a href="#" class="socialContainer containerFour">
                                <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 m-auto">
                        <div class="d-flex align-items-center">
                            <?php if (isset($_SESSION['login_existe'])) : ?>
                                <div class="mt-3 p-2 text-center">
                                    <p accesskey="<?= $_SESSION['id_usuario'] ?>" id="id_usuario_unique"><?php echo $_SESSION['nombre_user'] . ' '; echo $_SESSION['apellido_user']; ?></p>
                                </div>
                                <button class="info__btn">
                                    <a class="" href="php/exit.php">Salir</a>
                                </button>
                            <?php endif; ?>
                            <?php if (!isset($_SESSION['login_existe'])) : ?>
                                <button class="info__btn">
                                    <a class="" href="pages/login.php">Login</a>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <!-- Carousel - Inicio -->
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="assets/img/bg.png" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">Tours & Viajes</h4>
                                <h1 class="display-3 text-white mb-md-4">Descubramos el mundo juntos</h1>
                                <a href="pages/paquetes.php#paquetes" class="btn btn-primary py-md-3 px-md-5 mt-2" id="ver_paquetes">Ver Paquetes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel - Fin -->

        <!-- Reserva - Inicio -->
        <div class="container-fluid booking mt-5 pb-5">
            <div class="container pb-5">
                <div class="bg-light shadow" style="padding: 30px;">
                    <div class="row align-items-center" style="min-height: 60px;">
                        <form action="php/cotizacion.php" method="post" class="d-md-flex" id="crear_reservar">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3 mb-md-0">
                                            <select class="custom-select px-4" name="id_destino" id="destino" style="height: 45px;" required>
                                                <option selected disabled>Destino</option>
                                                <?php
                                                $sql = "SELECT id_paquete, nombre_paquete FROM paquetes";
                                                $result = $conexion->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row['id_paquete'] . '">' . $row['nombre_paquete'] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 mb-md-0">
                                            <div class="mb-3 mb-md-0">
                                                <div class="form-control" style="height: 44px; padding: 10px 0px; text-align: center; background: none; cursor: pointer;" onclick="document.getElementById('date1').focus();" required>
                                                    <span id="fechas" name="fechas" style="font-size:15px;">Selecciona una estadía</span>
                                                    <input type="hidden" id="fechaText" name="fechaText" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 mb-md-0">
                                            <div class="date py-1" id="date2" data-target-input="nearest">
                                                <input type="number" class="form-control" id="cantidad_personas" name="cantidad_personas" data-target="#cantidad_personas" data-toggle="datetimepicker" value="" required readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3 mb-md-0">
                                            <div class="date py-1" id="priceContainer" data-target-input="nearest">
                                                <input type="number" class="form-control" id="precioDestino" name="precio" data-target="#precio" data-toggle="datetimepicker" value="" required readonly />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="info__btn" style="height: 47px; margin-top: -2px;" form="crear_reservar" id="btn_cotizacion" type="submit" name="submit_cotizacion" disabled>Cotizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reserva - Fin -->

        <!-- Acerca de - Inicio -->
        <section class="container-fluid py-5" id="acerca_de">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="assets/img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de Panamá</h6>
                            <h1 class="mb-3">Descubre Panamá: Tu Próxima Aventura Te Espera</h1>
                            <p>¡Bienvenido a Panamá, el destino perfecto para tus próximas vacaciones! Nuestra historia, naturaleza y modernidad te sorprenderan. Explora la vibrante Ciudad de Panamá, relájate en las playas paradisíacas de Bocas del Toro y San Blas, o aventúrate en las selvas del Parque Nacional Coiba.</p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/img/about-1.jpg" alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="assets/img/about-2.webp" alt="">
                                </div>
                            </div>
                            <a href="<?php if (!isset($_SESSION['login_existe'])) {
                                echo "pages/login.php";
                                } ?>

                            <?php if (isset($_SESSION['login_existe'])) : ?>#ver_paquetes<?php endif; ?>" class="btn btn-primary mt-1">Reservar ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Acerca de - Fin -->

        <!-- Servicios - Inicio -->
        <div class="container-fluid pb-5 mt-5">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-money-check-alt text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Precio competitivo</h5>
                                <p class="m-0">Los mejores precios que podras encontrar de viajes en Panamá</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-award text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Mejores Servicios</h5>
                                <p class="m-0">Asesorias, Asistencia, Reservas, Tours privados, Información, etc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-globe text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Cobertura Nacional</h5>
                                <p class="m-0">Estamos disponibles en todo el país de Panamá</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Servicios - Fin -->

        <!-- Blog - Inicio -->
        <div class="container-fluid py-5" id="blog">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Blog de viajes</h6>
                    <h1>Lo último de nuestro blog</h1>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="assets/img/paquete_2.webp" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Isla</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                </div>
                                <a class="h5 m-0 text-decoration-none" href="">Tour avistamiento de ballenas desde la Ciudad a Isla Contadora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="assets/img/paquete_7.jpg" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Parque</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                </div>
                                <a class="h5 m-0 text-decoration-none" href="">Parque Nacional Soberania, parques protegidos del país</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 pb-2">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="assets/img/paquete_8.webp" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">06</h6>
                                    <small class="text-white text-uppercase">Agosto</small>
                                </div>
                            </div>
                            <div class="bg-white p-4">
                                <div class="d-flex mb-2">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Playa</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                                </div>
                                <a class="h5 m-0 text-decoration-none" href="">Paseo por playa blanca, disfruta de la playa y más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog - Fin -->

        <!-- Oferta - Inicio -->
        <div class="container-fluid bg-registration py-5" style="margin: 90px 0;" id="oferta">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega oferta</h6>
                            <h1 class="text-white"><span class="text-primary">30% OFF</span> Festeja tus 15 años con el viaje de tus sueños</h1>
                        </div>
                        <p class="text-white">Festeja tus 15 de la mejor manera: con el viaje de tus sueños! Nuestro paquete estrella tiene todo lo necesario para que vivas una experiencia que recordarás siempre.</p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Fiesta de baile en crucero</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Paseo por playa blanca</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Show y más</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="card border-0">
                            <div class="card-header bg-primary text-center p-4">
                                <h1 class="text-white m-0">Reserva Ahora</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-white p-5">
                                <form action="tu_script_de_procesamiento.php" method="post">
                                    <div class="form-group">
                                        <select name="destino" class="custom-select px-4" style="height: 47px;" required="required">
                                            <option selected disabled>Destino</option>
                                            <?php
                                            $sql = "SELECT id_destino, nombre_destino FROM destinos";
                                            $result = $conexion->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['id_destino'] . '">' . $row['nombre_destino'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="destino" class="custom-select px-4" style="height: 47px;" required="required">
                                            <option selected disabled>Fecha de estadia</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="destino" class="custom-select px-4" style="height: 47px;" required="required">
                                            <option selected disabled>Cantidad de personas</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-block py-2" type="submit">Reservar Ahora</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Oferta - Fin -->
    </main>

    <!-- Footer - Inicio -->
    <footer class="bg-dark">
        <section class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 50px;">
            <div class="row pt-5">
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="" class="navbar-brand">
                        <h1 class="text-primary"><span class="text-white">Conoce</span> Panamá</h1>
                    </a>
                    <p>Agencia de viajes en Panamá, ofrecemos viajes en Panamá y nos gustaría que te ayuden a conocer a Panamá</p>
                    <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Siguenos en </h6>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros Servicios</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="index.php#acerca_de"><i class="fa fa-angle-right mr-2"></i>Acerca de</a>
                        <a class="text-white-50 mb-2" href="pages/panama.php#top_destinos"><i class="fa fa-angle-right mr-2"></i>Destinos</a>
                        <a class="text-white-50 mb-2" href="pages/servicios.php#servicios"><i class="fa fa-angle-right mr-2"></i>Servicios</a>
                        <a class="text-white-50 mb-2" href="index.php#oferta"><i class="fa fa-angle-right mr-2"></i>Ofertas</a>
                        <a class="text-white-50" href="index.php#blog"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5">
                    <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Panamá, Panamá</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+507 6776 6666</p>
                    <p><i class="fa fa-envelope mr-2"></i>agenciapanama@gmail.com</p>
                </div>
            </div>
        </section>
        <section class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. Todos los derechos reservados.</a></p>
                </div>
                <div class="col-lg-6 text-center text-md-right">
                    <p class="m-0 text-white-50">Desarrollado por <a href="https://davidmurilloup.netlify.app/">David Murillo</a></p>
                </div>
            </div>
        <section/>
    </footer>
    <!-- Footer - Fin -->

    <!-- Scripts -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/cotizacion.js"></script>
    <script src="js/envio-email.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/buy_paquete.js"></script>
    
    <!-- Scripts -->

</body>

</html>