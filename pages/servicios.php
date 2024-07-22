
<!DOCTYPE html>
<html lang="en"></html>

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
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <title>Conoce Panamá</title>
</head>

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
                    <img class="nav__img img-responsive" src="../assets/img/logo.png" alt="Administrador">
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
                            <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paquetes.php">Paquetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="panama.php">Panamá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 m-auto">
                    <div class="card__icon py-3">
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
                                <p accesskey="<?= $_SESSION['id_usuario'] ?>" id="id_usuario_unique"><?php echo $_SESSION['nombre_user'] . ' ';
                                                                                                        echo $_SESSION['apellido_user']; ?></p>
                            </div>
                            <button class="info__btn">
                                <a class="" href="../php/exit.php">Salir</a>
                            </button>
                        <?php endif; ?>
                        <?php if (!isset($_SESSION['login_existe'])) : ?>
                            <button class="info__btn">
                                <a class="" href="login.php">Login</a>
                            </button>
                        <?php endif; ?>
                    </div>
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
                    <img class="w-100" src="../assets/img/bg_crucero.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Servicios</h4>
                            <h1 class="display-3 text-white mb-md-4">Los mejores servicios de viajes</h1>
                            <a href="paquetes.php#paquetes" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver Paquetes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel - Fin -->

    <!-- Service Start -->
    <div class="container-fluid py-5 section__service" id="servicios">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="fs-5 text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
                <h1 class="text-4xl text-prim">Servicios que ofrecemos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Guía turístico</h5>
                        <p class="m-0">Información detallada y tours personalizados sobre destinos históricos y culturales</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Reserva de entradas</h5>
                        <p class="m-0">Compra anticipada de boletos para atracciones y eventos, evitando filas y garantizando acceso</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Reserva de hotel</h5>
                        <p class="m-0">Alojamiento seguro y confiable en una amplia gama de opciones, desde económicos hasta lujosos</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Paquetes de viaje</h5>
                        <p class="m-0">Todo incluido: transporte, alojamiento y actividades, ofreciendo comodidad y ahorro</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Asesoría de viajes</h5>
                        <p class="m-0">Recomendaciones personalizadas, planificación de itinerarios y apoyo constante durante el viaje.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Cruceros</h5>
                        <p class="m-0">Viajes en barco con rutas variadas, servicios de lujo a bordo y múltiples destinos en una experiencia única.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
</main>

<!-- Footer Start -->
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
                    <a class="text-white-50 mb-2" href="../index.php#acerca_de"><i class="fa fa-angle-right mr-2"></i>Acerca de</a>
                    <a class="text-white-50 mb-2" href="panama.php#top_destinos"><i class="fa fa-angle-right mr-2"></i>Destinos</a>
                    <a class="text-white-50 mb-2" href="servicios.php#servicios"><i class="fa fa-angle-right mr-2"></i>Servicios</a>
                    <a class="text-white-50 mb-2" href="../index.php#oferta"><i class="fa fa-angle-right mr-2"></i>Ofertas</a>
                    <a class="text-white-50" href="../index.php#blog"><i class="fa fa-angle-right mr-2"></i>Blog</a>
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
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. Todos los derechos reservados.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Desarrollado por <a href="https://davidmurilloup.netlify.app/">David Murillo</a>
                </p>
            </div>
        </div>
        </>
</footer>
<!-- Footer Start -->

<!-- Scripts Start -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="../js/envio-email.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/buy_paquete.js"></script>
<script src="../js/main.js"></script>
<!-- Scripts End -->

</body>

</html>