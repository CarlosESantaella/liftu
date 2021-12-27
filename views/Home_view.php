<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Inicio</title>
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="preload" href="<?= $_ENV['ROOT'] ?>/assets/fonts/Garet-Book.woff2" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload"  href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css" as="style" onload="this.rel = 'stylesheet'">
    <link rel="preload"  href="<?= $_ENV['ROOT'] ?>/assets/css/style-home.css" as="style" onload="this.rel = 'stylesheet'">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>

    </style>
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
                            <a class="nav-link" href="<?= $_ENV['ROOT'] ?>/blog">Blog LiftU</a>
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
    <section class="banner">
        <div class="container">

            <h2>
                ¡Hazla Corta!.<br />
                Todas las ofertas de prácticas<br />
                y primeros empleos, en un solo lugar
            </h2>
            <div>
                <form method="post" action="hola.php" class="input-group input-search-banner">
                    <input type="text" class="form-control" placeholder="Buscar trabajo..."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="submit" class="input-group-text" id="basic-addon2"><i
                            class="fas fa-search fa-2x"></i></button>
                </form>
            </div>
        </div>
    </section>
    <section class="container-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 container-images-s1">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                        <div class="d-block d-sm-none mb-5">
                            <a href="#" class="btn btn-s1">Últimas ofertas de empleo</a>
                            <a href="#" class="btn btn-s1">Últimos recursos para tu futuro laboral</a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <figure>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 container-info-s1">
                    <h3 class="text-start first-heading-s1">Llegaste a LiftU, porque</h3>
                    <h3 class="text-end second-heading-s1">tenemos el mismo sueño</h3>
                    <p>Hemos vivido en carne propia la dificultad de la inserción laboral joven.</p>
                    <p>En LiftU, nuestro sueño es que todo joven pueda acceder a una práctica o primer empleo digno, sin
                        distinciones, sin discriminaciones de ningún tipo.</p>
                    <p>Queremos acompañarte en tu proceso de inserción laboral, brindándote las herramientas necesarias
                        para que encuentres la empresa de tus sueños.</p>
                    <div class="d-none d-sm-block">
                        <a href="#" class="btn btn-s1">Últimas ofertas de empleo</a>
                        <a href="#" class="btn btn-s1">Últimos recursos para tu futuro laboral</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-section-2">
        <h3 class="title-s2">Algunas de las empresas que encontrarás en las ofertas que referenciamos:</h3>
        <div class="container container-slick">
            <div class="row">
                <section class="customer-logos slider" data-arrows="true">
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/fallabela.webp">
                    </div>
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/agrosuper.webp">
                    </div>
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/santander.webp">
                    </div>
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/scotia.webp">
                    </div>
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/wom.webp">
                    </div>
                    <div class="slide"><img src="<?= $_ENV['ROOT'] ?>/assets/img/copec.webp">
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section class="container-section-3">
        <div class="container">
            <div class="row">
                <div class="container-info-s3 col-md-6">
                    <div>

                        <h3>¡Únete a la comunidad!</h3>
                        <p>Porque sabemos que las cosas no pasan de la noche a la mañana, te estamos acompañando siempre en
                            nuestras redes sociales.</p>
                        <p>Síguenos para que descubras ofertas laborales, concursos, consejos, tips y nuevos servicios para
                            ayudarte en tu inserción al mundo del trabajo.</p>
                        <div class="container-social-s3">
                            <figure>
                                <a href="#"><img src="<?= $_ENV['ROOT'] ?>/assets/img/facebook.webp" alt=""></a>
                            </figure>
                            <figure>
                                <a href="#"><img src="<?= $_ENV['ROOT'] ?>/assets/img/instagram.webp" alt=""></a>
                            </figure>
                            <figure>
                                <a href="#"><img src="<?= $_ENV['ROOT'] ?>/assets/img/linkedin.webp" alt=""></a>
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="container-img-s3 col-md-6">
                    <figure>
                        <img src="<?= $_ENV['ROOT'] ?>/assets/img/img-s3.webp" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="container-info-ftr">
                        <figure>
                            <img src="<?= $_ENV['ROOT'] ?>/assets/img/logo-navbar.webp" alt="">
                        </figure>
                        <div class="lists-menu-ftr">
                            <div>
                                <h5>Secciones</h5>
                                <ul>
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Empleos</a></li>
                                    <li><a href="#">Blog LiftU</a></li>
                                    <li><a href="#">Iniciar Sesión</a></li>
                                    <li><a href="#">Acceso Empresas</a></li>
                                </ul>
                            </div>
                            <div>
                                <h5>Social</h5>
                                <ul>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Linkedin</a></li>
                                </ul>
                            </div>
                            <div>
                                <h5>Contacto para difusión gratuita</h5>
                                <ul>
                                    <li><a href="#">liftu.latam@gmail.com</a></li>
                                </ul>
                            </div>
                    
                        </div>
                    </div>
                </div>
                <div  class="col-12 container-img-ftr">
                    <figure>
                        <img class="bg-white border rounded-3" src="<?= $_ENV['ROOT'] ?>/assets/img/corfo.webp" alt="">
                    </figure>
                    <figure>
                        <img src="<?= $_ENV['ROOT'] ?>/assets/img/uddv.webp" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.bundle.js"></script>
    <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.customer-logos').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });

            $(window).scroll(() => {
                let scroll = $(this).scrollTop();
                if(scroll > 0){
                    $('.navbar-top .navbar-brand img').css({"width": "7rem"});
                }else{
                    $('.navbar-top .navbar-brand img').css({"width": "10rem"});

                }
            })
        });
    </script>
</body>

</html>