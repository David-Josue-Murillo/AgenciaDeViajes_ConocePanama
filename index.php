<?php
include 'includes/header.php';
include 'db/conexion.php';
?>
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
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reservar Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel - Fin -->

    <!-- Reserva - Inicio -->
    <?php include 'includes/cotizacion.php'; ?>
    <!-- Reserva - Fin -->

    <!-- Acerca de - Inicio -->
    <section class="container-fluid py-5">
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
                        <a href="" class="btn btn-primary mt-1">Reservar ahora</a>
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
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Blog de viajes</h6>
                <h1>Lo último de nuestro blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="assets/img/blog-1.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">9 Planes de Agroturismo en Boquete</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="assets/img/blog-2.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">9 Museos Imperdibles en Ciudad de Panamá</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="assets/img/blog-3.jpg" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1">01</h6>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href="">Top Actividades Para Conocer la Cultura Congos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog - Fin -->

    <!-- Resgistro de user - Inicio -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
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
    <!-- Registro de user - Fin -->
</main>

<!-- Footer - Inicio -->
<?php include_once 'includes/footer.php'; ?>
<!-- Footer - Fin -->

<!-- Scripts -->
<script src="js/cotizacion.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>