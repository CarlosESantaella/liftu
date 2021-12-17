<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Publicaciones de empleo</title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-home navbar-top navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?= $_ENV['ROOT'] ?>/assets/img/logo-navbar.webp" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $_ENV['ROOT'] ?>/publications">Empleos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog LiftU</a>
                        </li>
                        <li class="nav-item li-btn">
                            <a class="btn btn-navbar-top text-white" href="#">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item li-btn">
                            <a class="btn btn-navbar-top text-white" href="#">Acceso Empresas</a>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <h1>Publications</h1>
</body>
</html>