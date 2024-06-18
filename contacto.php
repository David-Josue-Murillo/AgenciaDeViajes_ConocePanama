<?php
    include_once 'includes/header.php';
?>
        <main>
            <section class="section__content__contacto section__main">
                <div class="section__main__info section__contacto__info">
                    <h1 class="info__textPrim">Escribenos a través de nuestro email</h1>
                    <p class="info__textTerc">Llena el formulario y te responderemos en breve o escribenos por cualquiera de nuestros medios</p>
                </div>

                <div class="section__destinos__btn">
                    <button class="info__btn">
                        <a href="#formularioContacto">Ir al formulario de contacto</a>
                    </button>
                </div>
            </section>

            <section>
                <!-- Información de contacto -->
                <div>
                    <div id="formularioContacto">
                        <h3>Escribenos a través de nuestro email</h3>
                        <p>Llena el formulario y te responderemos en breve o escribenos por cualquiera de nuestros medios</p>
                    </div>

                    <div>
                        <!-- Correo electrónico -->
                        <span>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V8l8 5 8-5v2z" />
                                </svg>
                            </i>
                            <p>conocepana@gmail.com</p>
                        </span>

                        <!-- Teléfono -->
                        <span>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </i>
                            <p>+507 6779-9779</p>
                        </span>

                        <!-- Dirección -->
                        <span>
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 2a7 7 0 0 1 7 7v3.586l-1.293 1.293a1 1 0 0 1-1.414 0L9.586 15H3a3 3 0 0 1-3-3V9a3 3 0 0 1 3-3h4.586l1.293-1.293a1 1 0 0 1 1.414 1.414L12.414 12H15a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3h-4.586l-1.293 1.293a1 1 0 0 1-1.414 0L9.586 21H6a7 7 0 0 1-7-7V5a7 7 0 0 1 7-7z" />
                                </svg>
                            </i>
                            <p>PTY, Planta Baja, Edificio Magna Corp, Calle Manuel María Icaza Local 3, PO Box 07185 </p>
                        </span>
                    </div>

                    <!-- Formulário de contacto -->
                    <div>
                        <div>
                            <form action="">
                                <div>
                                    <label for="nombreCompleto">Nombre Y apellido</label>
                                    <input type="text" name="nombreCompleto">
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
                                    <label for="mensaje">Mensaje</label>
                                    <textarea name="mensaje"></textarea>
                                </div>
                                
                                <input type="submit" value="Enviar">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <?php include_once 'includes/footer.php'; ?>
        </footer>
    </div>
</body>

</html>