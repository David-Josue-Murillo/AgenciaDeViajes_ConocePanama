<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Conoce Panamá - Paquetes</title>
</head>

<body>
    <div class="">
        <header>
            <div>
                <div>
                    <img src="./assets/img/logo.png" alt="Administrador">
                </div>
                <div>
                    <h2>Conoce Panamá</h2>
                </div>
            </div>

            <nav>
                <ul>
                    <li>
                        <a href="./index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="./paquetes.php">Paquetes</a>
                    </li>
                    <li>
                        <a href="./transporte.php">Cruceros</a>
                    </li>
                    <li>
                        <a href="./destinos.php">Destinos</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </nav>

            <div>
                <div>
                    <button>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-cog" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h2.5" />
                                <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19.001 15.5v1.5" />
                                <path d="M19.001 21v1.5" />
                                <path d="M22.032 17.25l-1.299 .75" />
                                <path d="M17.27 20l-1.3 .75" />
                                <path d="M15.97 17.25l1.3 .75" />
                                <path d="M20.733 20l1.3 .75" />
                            </svg>
                        </a>
                    </button>

                    <button>
                        <a href="#">Iniciar sesión</a>
                    </button>

                    <button>
                        <a href="#">Registrarse</a>
                    </button>
                </div>
            </div>
        </header>

        <main>
            <section class="section__content__paquetes">
                <div>
                    <h1>Todos los paquetes de viajes que ofrecemos en Panamá</h1>
                </div>
            </section>

            <section class="section__paquetes">
                <!-- Todos los paquetes de viajes  -->
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
                        <div>
                            <img src="./assets/img/paquete_4.webp" alt="vuelo a isla Taboga">
                        </div>
                        <div>
                            <img src="./assets/img/paquete_5.webp" alt="vuelo a isla Taboga">
                        </div>
                        <div>
                            <img src="./assets/img/paquete_6.webp" alt="vuelo a isla Taboga">
                        </div>
                        <div>
                            <img src="./assets/img/paquete_7.webp" alt="vuelo a isla Taboga">
                        </div>
                        <div>
                            <img src="./assets/img/paquete_8.webp" alt="vuelo a isla Taboga">
                        </div>
                        <div>
                            <img src="./assets/img/paquete_9.webp" alt="vuelo a isla Taboga">
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