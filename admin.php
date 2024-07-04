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

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/admin.css">

    <title>Administrar</title>
</head>

<body>
    <div class="container login-container">
        <div class="container-fluid bg-success-subtle rounded-3 p-4">
            <h2 class="text-center font-weight-bold">Administrador</h2>
            <form id="loginForm" action="/admin/php/login.php" method="post">
                <div class="form-group mb-2">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Su email" required>
                </div>
                <div class="form-group mb-2">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Su contraseña" required>
                </div>
                <div class="form-group form__submit">
                    <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/admin.js"></script>
</body>

</html>