<?php include_once 'includes/header.php'; ?>
<main>
    <?php include_once 'includes/main_index.php'; ?>

    <section class="section__paquetes bg__general container-fluid d-flex justify-content-center flex-column border-0">
        <div class="w-100 text-center">
            <h2 class="text-4xl text-prim">Conoce nuestros paquetes de viajes</h2>
            <p class="text-2xl text-second">Descubre las mejores opciones de viajes que ofrecemos en Panamá</p>
        </div>

        <!-- Paquete de viajes  -->
        <section class="paquetes__img container-fluid">
            <div class="img__container container-fluid">
                <?php include_once 'includes/cards_index.php'; ?>
            </div>  
        </section>
    </section>

    <!-- About Start -->
    <section class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="assets/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="assets/img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="assets/img/about-2.webp" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Cotización y reserva -->
    <section class="section__cotizacion bg__general container-fluid">
        <div class="container-fluid bg-dark-subtle border border-warning-subtle rounded px-5 py-3 my-2 mb-5" id="area_cotizacion">
            <section class="d-flex justify-content-around">
                <h3 class="text-4xl text-prim">Cotizar</h3> 
                <h3 class="text-4xl text-prim">Reservar</h3> 
            </section>

            <div class="d-flex justify-content-around">
                <section class="d-flex justify-content-center flex-column w-100 m-auto px-5 mb-2footer_index">
                    <div class="mx-4 px-3">
                        <h4 class="text-1xl text-dark">Buscar viaje</h4>
                        <p class="fs-5 text-second">Escoge tu destino y el día de tu viaje</p>
                    </div>
                    <div class="d-flex justify-content-around position-relative w-100">
                        <?php include_once 'includes/formularioCotizar_index.php'; ?>
                    </div>
                </section>
                <section class="d-flex justify-content-center flex-column w-100 m-auto px-5 mb-2">
                    <div class="mx-4 px-3">
                        <h4 class="text-1xl text-dark">Buscar viaje</h4>
                        <p class="fs-5 text-second">Escoge tu destino y el día de tu viaje</p>
                    </div>
                    <div class="d-flex justify-content-around position-relative w-100">
                        <?php include_once 'includes/formularioReservar_index.php'; ?>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>

<!-- Footer Start -->
<?php include_once 'includes/footer.php'; ?>
<!-- Footer Start -->

</body>

</html>