<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
    <title>Login</title>
</head>

<body>
    <?php  
        if(!isset($_SESSION)){
            session_start();
        } 

        include '../php/helpers.php'
    ?>

    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Iniciar Sessión</a></li>
                    <li class="signup-inactive"><a class="btn">Registrarse</a></li>
                </ul>
            </div>

            <div ng-app ng-init="checked = false">
                <form class="form-signin" action="../php/inicio_session.php" method="post" name="form">
                    <?php if(isset($_SESSION['completado'])): ?>
                        <?php unset($_SESSION['incompleto']); ?>
                        <?php unset($_SESSION['error_login']); ?>
                        <p class="alerta alerta-error"><?= $_SESSION['completado'] ?></p>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['incompleto'])): ?>
                        <?php unset($_SESSION['completado']); ?>
                        <?php unset($_SESSION['error_login']); ?>
                        <p class="alerta alerta-error"><?= $_SESSION['incompleto'] ?></p>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['error_login'])): ?>
                        <p class="alerta alerta-error"><?= $_SESSION['error_login'] ?></p>
                    <?php endif; ?>

                    <?php borrarError(); ?>
                    <label for="email">Correo electrónico</label>
                    <input class="form-styling" type="email" name="email" placeholder="" required/>
                    <label for="password">Contraseña</label>

                    <input class="form-styling" type="password" name="password" placeholder="" required/>
                    
                    <div class="btn-animate">
                        <input class="btn-signin" name="submit_login" type="submit" value="Iniciar sesión">
                    </div>
                </form>

                <form class="form-signup" action="../php/register.php" method="post" name="form">
                    <?php borrarError(); ?>
                    
                    <?php if(isset($_SESSION['errores'])): ?>
                        <p class="alerta alerta-error"><?= $_SESSION['errores']['general'] ?></p>
                    <?php endif; ?>

                    <label for="name">Nombre</label>
                    <input class="form-styling" type="text" name="name" placeholder=""  required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'name') : ''; ?>

                    <label for="lastname">Apellido</label>
                    <input class="form-styling" type="text" name="lastname" placeholder="" required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'lastname') : ''; ?>

                    <label for="phone">Teléfono</label>
                    <input class="form-styling" type="tel" name="phone" placeholder=""  required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'phone') : ''; ?>
                    
                    <label for="email">Correo electrónico</label>
                    <input class="form-styling" type="text" name="email" placeholder=""  required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    
                    <label for="password">Contraseña</label>
                    <input class="form-styling" type="password" name="password" placeholder=""  required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

                    <label for="confirmpassword">Confirmar Contraseña</label>
                    <input class="form-styling" type="password" name="confirmpassword" placeholder=""  required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'confirmpassword') : ''; ?>
                    
                    <input class="btn-signup" type="submit" name="submit_register" value="Registrarse">
                </form>
            </div>

            <div class="forgot">
                <a href="recover-pass.php">Olviste tu contraseña?</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>