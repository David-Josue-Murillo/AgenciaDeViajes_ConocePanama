<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Panel de administración de la agencia de viajes en Panamá">
    <meta name="author" content="David Murillo">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Administrar</title>
</head>

<body>
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
    ?>

    <?php if(!isset($_SESSION['login'])): ?>
    <div class="container login-container">
        <div class="container-fluid bg-success-subtle rounded-3 p-4">
            <h2 class="text-center font-weight-bold">Administrador</h2>
            <form id="loginForm" action="/admin/php/login.php" method="post">
                <div class="form-group mb-2">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Su email" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Su contraseña" required>
                </div>

                <?php if(isset($_SESSION['error_login'])): ?>
                    <p class="alerta alerta-error"><?= $_SESSION['error_login'] ?></p>
                <?php endif; ?>

                <div class="form-group">
                    <input type="submit" name="submit_login" class="btn btn-primary btn-block w-100" value="Login"/>
                </div>
            </form>
        </div>
    </div>
    <?php endif; ?>

    <?php if(isset($_SESSION['login'])): ?>
    <div class="container-fluid bg-success-subtle p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center font-weight-bold">Panel de administración</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-warning-subtle p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 border bg-info">
                    <h1 class="text-center font-weight-bold">Administrador</h1>
                </div>
            </div>
    </div>
    <?php endif; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/admin.js"></script>
</body>

</html>