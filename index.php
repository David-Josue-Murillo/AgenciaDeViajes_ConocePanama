<?php
    include_once 'includes/header.php';
?>
    <main>
        <section class="section__content">
            <div>
                <p>Agencia de viajes en Panamá</p>
                <h1>¿Listo para conocer a Panamá?</h1>
                <p>Que esperas, reserva tu viaje YAA!</p>
            </div>

            <section>
                <button>
                    <a href="#">Cotizar</a>
                </button>

                <button>
                    <a href="#">Reservar</a>
                </button>
            </section>
        </section>

        <section class="section__paquetes">
            <div>
                <h2>Conoce nuestros paquetes de viajes</h2>
                <p>Descubre las mejores opciones de viajes que ofrecemos en Panamá</p>
            </div>

            <!-- Paquete de viajes  -->
            <section class="paquetes__img">
                <div>
                    <div>
                        <img src="./assets/img/paquete_1.webp" alt="Vuelo a Bocas del Toro">
                    </div>
                    <div>
                        <img src="./assets/img/paquete_2.webp" alt="vuelo a isla Contadora">
                    </div>
                    <div>
                        <img src="./assets/img/paquete_3.webp" alt="vuelo a isla Taboga">
                    </div>
                </div>
            </section>
        </section>

        <!-- Cotización y reserva -->
        <section class="section__cotizacion">
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