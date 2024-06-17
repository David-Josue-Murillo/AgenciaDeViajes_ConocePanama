<?php include_once 'includes/header.php'; ?>
<main>
    <?php include_once 'includes/main_index.php'; ?>

    <section class="section__paquetes bg__general container-fluid d-flex justify-content-center flex-column">
        <div class="w-100 text-center mt-2 ">
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

    <!-- Cotización y reserva -->
    <section class="section__cotizacion bg__general container-fluid">
        <div class="container-fluid bg-dark-subtle w-50 border border-warning-subtle rounded px-5 py-3 my-2 mb-5">
            <section class="d-flex justify-content-center">
                <h3 class="text-4xl text-prim">Cotizar</h3>
            </section>

            <section class="d-flex justify-content-center flex-column w-100 m-auto px-5">
                <div>
                    <h4 class="text-1xl text-dark">Buscar viaje</h4>
                    <p class="fs-5 text-second">Escoge tu destino y el día de tu viaje</p>
                </div>

                <div>
                    <?php include_once 'includes/formulario_index.php'; ?>
                </div>
            </section>
        </div>
    </section>
</main>

<footer class="container-fluid">
    <?php include_once 'includes/footer_index.php'; ?>
</footer>
</body>

</html>