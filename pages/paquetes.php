<?php
include_once '../includes/header.php';
include '../admin/db/conexion.php';

$sql = "SELECT * FROM destinos";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $destinos = array();
    while ($row = $result->fetch_assoc()) {
        $destinos[] = $row;
    }
}
?>

   <!-- Carousel - Inicio -->
   <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../assets/img/bg_destino.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Explorando Panamá</h4>
                            <h1 class="display-3 text-white mb-md-4">Los mejores destinos turísticos</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver Paquetes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel - Fin -->

    <!-- Area de destinos  - incio -->
    <section class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinos</h6>
                <h1 id="paquetes">Paquetes turísticos perfectos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_4.webp " alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Bocas del Toro</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre los lugares más increíbles de Panamá.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_2.webp" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Isla Contadora</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>6 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>3 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre las maravillas de la isla de Isla Contadora.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_3.webp" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Isla Taboga</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Conoce los bellas aguas de las isla Taboga</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_7.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Hotel Candy Rose</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>6 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Los mejores paisajes naturales de Panamá</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_7.webp" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Playa Blanca</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Town Centers, Playas, Restaurantes y más</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../assets/img/paquete_6.webp" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Hotel Azul</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Persona</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Playa, paisaje y más ¿Que esperas?</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">Comprar</button>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area de destinos - fin --> 

    <!-- Area del blog panamá - incio -->
     
    <!-- Area del blog panamá - fin -->
    </
</main>

<!-- Footer Start -->
<?php include_once '../includes/footer.php'; ?>
<!-- Footer Start -->

</div>
</body>

</html>