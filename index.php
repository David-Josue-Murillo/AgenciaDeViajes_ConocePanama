<?php include_once 'includes/header.php'; ?>
<main>
    <?php include_once 'includes/main_content.php'; ?>
    <?php include_once 'includes/paquetes_content.php'; ?>
    
    <!-- Cotización y reserva -->
    <section class="section__cotizacion bg__general">
        <div>
            <div>
                <h3>Cotiza</h3>
            </div>

            <div>
                <h4>Buscar viaje</h4>
                <p>Escoge tu destino y el día de tu viaje</p>

                <form action="">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>

                    <div>
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono">
                    </div>

                    <div>
                        <label for="pasajeros">Número de pasajeros</label>
                        <input type="number" name="pasajeros">
                    </div>

                    <div>
                        <label for="destino">Destino</label>
                        <select name="destino">
                            <option value="Bocas del Toro">Bocas del Toro</option>
                            <option value="Isla Contadora">Isla Contadora</option>
                            <option value="Isla Taboga">Isla Taboga</option>
                        </select>
                    </div>

                    <div>
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha">
                    </div>

                    <input type="submit" value="Solicitar">
                </form>
            </div>
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