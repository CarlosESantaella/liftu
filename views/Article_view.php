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
                            <a class="nav-link active" href="#">Blog LiftU</a>
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
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title-article">titulo del articulo asdfñlkj añsldfjlñasd adfsasñldfk asdf </h2>
                    <div class="content-article">


                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas feugiat metus vel luctus.
                            Mauris eleifend ut nibh vitae porttitor. Quisque condimentum, mauris in facilisis porttitor,
                            nisi massa sollicitudin eros, scelerisque semper nisi quam non sapien. Aenean vel sodales arcu,
                            eget scelerisque nisl. Nullam eget nunc bibendum, dignissim ipsum pharetra, imperdiet metus.
                            Mauris tristique neque nisi, id convallis magna viverra blandit. Pellentesque habitant morbi
                            tristique senectus et netus et malesuada fames ac turpis egestas. Aenean egestas erat eu
                            accumsan facilisis. Praesent sollicitudin facilisis magna id blandit. Quisque enim nunc, porta
                            ut urna et, rutrum feugiat velit. Pellentesque est mauris, efficitur vel nunc sed, laoreet
                            mattis mauris. Pellentesque auctor, elit non ultricies molestie, sem risus fringilla odio,
                            elementum fringilla tellus leo et dui.
                        </p>

                        <p>
                            Maecenas dignissim consequat massa, et faucibus lorem auctor ut. Duis porttitor erat eget ligula
                            ultricies, in sagittis nibh gravida. Suspendisse condimentum imperdiet lectus, sed scelerisque
                            est scelerisque ut. Duis eget leo iaculis, tempus lectus quis, tristique ante. Praesent bibendum
                            maximus magna, eu ultrices felis hendrerit sit amet. Integer pulvinar tellus metus, quis viverra
                            ex euismod nec. Sed aliquet tempus arcu, eu feugiat libero pellentesque in. Praesent eu euismod
                            nisi. Mauris pulvinar ante nec iaculis sollicitudin. Suspendisse luctus neque in urna dictum
                            rutrum. Aenean mattis ex lectus, vitae dignissim mi tempor ut. Praesent elementum sapien nisi,
                            id tempus leo fringilla cursus. Sed sit amet neque lacus.
                        </p>

                        <p>
                            Sed venenatis, velit ut efficitur accumsan, justo mi facilisis elit, non vehicula diam sapien a
                            tellus. In non urna eu orci bibendum vehicula sed et tellus. Pellentesque elit magna, porttitor
                            at magna et, accumsan efficitur tortor. Sed vel dui viverra, consectetur lectus mattis, blandit
                            tortor. Proin pellentesque tempus neque a eleifend. Morbi a facilisis velit. Fusce luctus sem
                            libero, a egestas risus volutpat vitae. Pellentesque est urna, pretium quis aliquam non,
                            bibendum aliquam lectus.
                        </p>
                        <figure>
                            <img src="/assets/img/banner-5.webp" alt="">
                        </figure>

                        <p>
                            Sed finibus purus eu odio tempor, eget scelerisque orci faucibus. Sed nec lectus ipsum. Aliquam
                            erat volutpat. Maecenas fermentum finibus erat ullamcorper consequat. Nulla commodo iaculis orci
                            sit amet feugiat. Vestibulum aliquam commodo sodales. Pellentesque sollicitudin dolor a nisi
                            cursus cursus. Curabitur aliquet ante est, et mollis leo imperdiet at. Phasellus egestas iaculis
                            libero in ullamcorper. Etiam vestibulum tristique laoreet.
                        </p>

                        <p>
                            Nam in cursus erat, sit amet feugiat leo. Etiam ut interdum turpis, quis auctor tortor. Quisque
                            mattis congue sollicitudin. Quisque tristique erat ut nisl maximus convallis. Aliquam lacinia at
                            enim id commodo. Donec ante massa, commodo eget malesuada nec, dictum at lorem. Nunc pharetra
                            tortor non pellentesque ullamcorper. Praesent non nibh ex. Quisque consequat vel dolor quis
                            aliquam.
                        </p>
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