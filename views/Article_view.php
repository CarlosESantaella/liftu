<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - <?= 'Articulo' ?></title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-article.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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
                            <a class="nav-link" href="<?= $_ENV['ROOT'] ?>">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $_ENV['ROOT'] ?>/publications">Empleos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= $_ENV['ROOT'] ?>/blog">Blog LiftU</a>
                        </li>
                        <li class="nav-item li-btn">
                            <a class="btn btn-navbar-top text-white" href="<?= $_ENV['ROOT'] ?>/login-register">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item li-btn">
                            <a class="btn btn-navbar-top text-white" href="#">Acceso Empresas</a>
                        </li>
                        <?php if(isset($user['name'])): ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><?= $user['name']?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= $_ENV['ROOT'] ?>/controllers/actions/login-register/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                        <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-article"><?= $article['title'] ?></h2>
                    
                    <p class="date-creation text-end">fecha creación: <?= $article['date_create'] ?></0>
                    <hr class="" />
                    <div class="content-article mt-4">
                            <?= $article['description'] ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.bundle.js"></script>
    <script>
        $(window).scroll(() => {
            let scroll = $(this).scrollTop();
            if (scroll > 0) {
                $('.navbar-top .navbar-brand img').css({
                    "width": "7rem"
                });
            } else {
                $('.navbar-top .navbar-brand img').css({
                    "width": "10rem"
                });

            }
        })
    </script>
</body>

</html>