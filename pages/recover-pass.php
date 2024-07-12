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
        <div class="frame-recover">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Restablecer contraseña</a></li>
                </ul>
            </div>

            <div ng-app ng-init="checked = false">
                <form class="form-signin" action="../php/recuperar_contraseña.php" method="post" name="form">
                    
                    <?php if(isset($_SESSION['completado'])): ?>
                        <?php unset($_SESSION['error_recover']); ?>
                        <?php unset($_SESSION['errores']); ?>
                        <?= header('Location: index.php'); ?>
                    <?php endif; ?>

                    <?php if(isset($_SESSION['error_recover'])): ?>
                        <p class="alerta alerta-error"><?= $_SESSION['error_recover'] ?></p>
                    <?php endif; ?>
                       
                    <?php if(isset($_SESSION['errores'])): ?>
                        <?php unset($_SESSION['error_recover']); ?>
                    <?php endif; ?>

                    <label for="email">Correo electrónico</label>
                    <input class="form-styling" type="email" name="email" placeholder="" value="" required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
                    
                    <label for="phone">Telefono</label>
                    <input class="form-styling" type="phone" name="phone" placeholder="" value="" required/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'phone') : ''; ?>
                    
                    <div class="btn-animate">
                        <input class="btn-signin" name="submit_recover-pass" type="submit" value="Iniciar sesión">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>