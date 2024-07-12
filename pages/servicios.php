<?php
include_once '../includes/header.php';
?>
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
<?php include_once '../includes/footer.php'; ?>
<!-- Footer Start -->


</div>

<!-- Template Javascript -->
<script src="../js/main.js"></script>

</body>

</html>