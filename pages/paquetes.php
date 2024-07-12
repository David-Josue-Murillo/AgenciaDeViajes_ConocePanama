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

$sql = "SELECT * FROM paquetes";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    $paquetes = array();
    while ($row = $result->fetch_assoc()) {
        $paquetes[] = $row;
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
                            <a href="#paquetes" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver Paquetes</a>
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
                        <img class="img-fluid" src="<?php echo $destinos[0]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_1"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Pearl Islands</small>
                                <small class="m-0" id="dias_paquete_1"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0" id="cant_personas_paquete_1"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="" id="descripcion_paquete_1">Vistas al mar, jardín, terraza, restaurante, bar y instalaciones para deportes acuáticos</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="1">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_1">$140</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo $destinos[1]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_2"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Isla Contadora</small>
                                <small class="m-0" id="dias_paquete_2"><i class="fa fa-calendar-alt text-primary mr-2"></i>4 dias</small>
                                <small class="m-0" id="cant_personas_paquete_2"><i class="fa fa-user text-primary mr-2"></i>3 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" id="descripcion_paquete_2" href="">Descubre las maravillas de la isla de Isla Contadora</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="2">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_2">$175</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo $destinos[2]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_3"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Isla Taboga</small>
                                <small class="m-0" id="dias_paquete_3"><i class="fa fa-calendar-alt text-primary mr-2"></i>2 dias</small>
                                <small class="m-0" id="cant_personas_paquete_3"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" id="descripcion_paquete_3" href="">Conoce los bellas aguas de las isla Taboga</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="3">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_3">$140</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo $destinos[3]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_4"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Parque Soberania</small>
                                <small class="m-0" id="dias_paquete_4"><i class="fa fa-calendar-alt text-primary mr-2"></i>1 dia</small>
                                <small class="m-0" id="cant_personas_paquete_4"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" id="descripcion_paquete_4" href="">Tours Actividades Tours a pie, Aventura y naturaleza</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="4">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_4">$45</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo $destinos[4]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_5"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Playa Blanca</small>
                                <small class="m-0" id="dias_paquete_5"><i class="fa fa-calendar-alt text-primary mr-2"></i>7 dias</small>
                                <small class="m-0" id="cant_personas_paquete_5"><i class="fa fa-user text-primary mr-2"></i>3 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" id="descripcion_paquete_5" href="">Town Centers, Playas, Restaurantes y más</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="5">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_5">$210</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="<?php echo $destinos[5]['url_imagen']; ?>" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0" id="nombre_paquete_6"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Azul Paradise</small>
                                <small class="m-0" id="dias_paquete_6"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 dias</small>
                                <small class="m-0" id="cant_personas_paquete_6"><i class="fa fa-user text-primary mr-2"></i>3 Persona</small>
                            </div>
                            <a class="h5 text-decoration-none" id="descripcion_paquete_6" href="">Playa, paisaje y más ¿Que esperas?</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn_comprar_paquete" value="6">Comprar</button>
                                    <h5 class="m-0" id="precio_paquete_6">$250</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Area de destinos - fin --> 

    <!-- Ventana modal de pago - incio -->
    <div class="modal fade" id="paqueteModal" tabindex="-1" role="dialog" aria-labelledby="paqueteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paqueteModalLabel">Detalles del Paquete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="procesar_pago.php" method="POST">
                    <div class="modal-body">
                        <!-- Información del Paquete -->
                        <div class="form-group">
                            <label for="paquete">Paquete:</label>
                            <input type="text" class="form-control" id="paquete" name="paquete" value="Paquete 1" readonly>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" readonly>Descripción del Paquete 1</textarea>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" class="form-control" id="precios" name="precio" value="$100.00" readonly>
                        </div>

                        <!-- Métodos de Pago -->
                        <h5>Métodos de Pago</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="visa" value="Visa" required>
                            <label class="form-check-label" for="tarjeta_credito">
                                Visa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="paypal" value="PayPal" required>
                            <label class="form-check-label" for="paypal">
                                PayPal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodo_pago" id="yappy" value="Yappy" required>
                            <label class="form-check-label" for="transferencia_bancaria">
                                Yappy
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary disabled" id="btn_pagar">Pagar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Ventana modal de pago - Fin -->
</main>

<!-- Footer Start -->
<?php include_once '../includes/footer.php'; ?>
<!-- Footer Start -->

</div>
</body>

</html>