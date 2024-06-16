<?php
    include_once 'includes/header.php';
?>
        <main>
            <section class="section__content__cruceros">
                <div>
                    <h1>Descubre el mundo a abordo de nuestros increibles cruceros</h1>
                </div>
            </section>

            <section class="section__paquetes">
                <!-- Todos los paquetes de viajes  -->
                <section class="paquetes__img">
                    <div>
                        <div>
                            <img src="./assets/img/crucero_1.png" alt="Icon of the Seas">
                        </div>
                        <div>
                            <img src="./assets/img/crucero_2.png" alt="Oceania Cruise Line">
                        </div>
                        <div>
                            <img src="./assets/img/crucero_3.png" alt="Mega Crucero Utopia of the Seas">
                        </div>
                    </div>
                </section>
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
    </div>
</body>

</html>