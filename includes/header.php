<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Conoce Panamá</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-nav">
        <div class="container-fluid px-5">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img class="nav__img" src="./assets/img/logo.png" alt="Administrador">
                </a>

                <div class="nav__text">
                    <p class="text-nav text-prim">Conoce Panamá</p>
                    <p class="text-nav text-second">Agencia de viajes en Panamá</p>
                </div>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-md-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../paquetes.php">Paquetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../transporte.php">Cruceros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../destinos.php">Destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contacto.php">Contacto</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <div class="d-flex align-items-center">
                        <button class="btn_admin mx-md-4">
                            <a class="" href="admin.php">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-cog" width="44" height="44" viewBox="0 0 26 26" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
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

                        <button class="btn_login">
                            <a class="navbar-brand" href="./usuario.php">Login</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>