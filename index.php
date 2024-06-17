<?php include_once 'includes/header.php'; ?>
<main>
    <?php include_once 'includes/main_content.php'; ?>
    <?php include_once 'includes/paquetes_content.php'; ?>
    
    <!-- Cotización y reserva -->
    <section class="section__cotizacion bg__general">
        <div class="container-fluid bg-dark-subtle w-50 border border-warning-subtle rounded px-5 py-3">
            <section class="d-flex justify-content-center">
                <h3 class="text-4xl text-prim">Cotizar</h3>
            </section>

            <section class="d-flex justify-content-center flex-column w-100 m-auto px-5">
                <div>
                    <h4 class="text-1xl text-dark">Buscar viaje</h4>
                    <p class="fs-5 text-dark">Escoge tu destino y el día de tu viaje</p>
                </div>

                <div>
                    <form action="">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex flex-column gap-1">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="border border-2 border-success rounded px-2 py-1" name="nombre" placeholder="Escribe tu nombre">
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="border border-2 border-success rounded px-2 py-1" name="apellido" placeholder="Escribe tu apellido">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex flex-column gap-1">
                                <label for="email">Email</label>
                                <input type="email" class="border border-2 border-success rounded px-2 py-1" name="email" placeholder="email@gmail.com">
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <label for="telefono">Telefono</label>
                                <input type="tel" class="border border-2 border-success rounded px-2 py-1" name="telefono" placeholder="+507 6666-6666">
                            </div>
                        </div>

                        <div class="d-flex flex-column mb-2">
                            <label for="pasajeros">Número de pasajeros</label>
                            <input type="number" class="border border-2 border-success rounded px-2 py-1" name="pasajeros">
                        </div>
                        
                        <div class="d-flex flex-column mb-2">
                            <label for="destino">Destino</label>
                            <select name="destino" class="border border-2 border-success rounded px-2 py-1">
                                <option value="Bocas del Toro">Bocas del Toro</option>
                                <option value="Isla Contadora">Isla Contadora</option>
                                <option value="Isla Taboga">Isla Taboga</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column mb-4">
                            <label for="fecha">Fecha</label>
                            <input type="date" class="border border-2 border-success rounded px-2 py-1" name="fecha">
                        </div>

                        <input type="submit" value="Solicitar" class="btn btn-success w-100">
                    </form>
                </div>
            </section>
        </div>
    </section>
</main>

<footer>
    <div>
        <div>
            <img src="./assets/img/logo.png" alt="logoEmpresa">
        </div>
        <div>
            &copy; 2024 Agencia de viajes - Conoce Panamá
        </div>
    </div>

    <div>
        <div>
            <h3>Contáctanos</h3>
            <p>Escribenos a través de nuestro email</p>
            <form action="">
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje"></textarea>
                </div>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</footer>
</body>

</html>