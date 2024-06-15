<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Registrarse</title>
</head>

<body>
    <div class="section__content__register">
        <!-- Formulário de registro -->
        <section>
            <div>
                <h2>Registrate</h2>
                <p>Empieza tu viaje a Panamá con nosotros</p>
            </div>

            <div></div>

            <div>
                <form action="">
                    <div>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" placeholder="Ingrese su nombre">
                    </div>

                    <div>
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" placeholder="Ingrese su apellido">
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Ingrese su email">
                    </div>

                    <div>
                        <label for="telefono">Telefono</label>
                        <input type="tel" name="telefono" placeholder="Escribe su telefono sin guiones">
                    </div>

                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Eliga una contraseña (minimo 6 caracteres)">
                    </div>

                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </section>


        <!-- Formulário de inicio sesión -->
        <section>
        <div>
                <h2>Iniciar sesión</h2>
                <p>Conoce Panamá con nosotros</p>
            </div>

            <div></div>

            <div>
                <form action="">
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Introduce su correo electrónico">
                    </div>


                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" placeholder="Introduce su contraseña">
                    </div>

                    <input type="submit" value="Iniciar sesión">
                </form>
            </div>
        </section>
    </div>
</body>

</html>