<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Publicaciones de empleo</title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-publications.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body style="margin-bottom: 2000px;">
    <!-- Modal -->
    <div class="modal fade" id="modalPublication" tabindex="-1" aria-labelledby="modalPublicationLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPublicationLabel">Titulo de publicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, dolores perferendis, labore dolor quaerat totam voluptates, ea voluptatibus fugiat in cumque nostrum quibusdam accusamus aspernatur veniam consequatur. Sapiente architecto in libero excepturi ab repudiandae assumenda nobis magni ipsam. Ipsam, blanditiis neque animi temporibus accusantium sapiente hic nihil vero sequi impedit?
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-refresh" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-refresh">Ver</button>
                </div>
            </div>
        </div>
    </div>
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
                            <a class="nav-link active" href="#">Empleos</a>
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
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">

                <aside class="col-md-3">
                    <section class="container-filter">
                        <div>
                            <form action="hola.php" class="form-search input-group input-search-banner" method="post">
                                <input type="hidden" class="type-offer" name="type-offer" value="">
                                <input type="hidden" class="region-offer" name="region-offer" value="">
                                <input type="hidden" class="date-offer" name="date-offer" value="">
                                <input type="hidden" class="orderby-offer" name="orderby-offer" value="">
                                <div>

                                    <input type="text" class="form-control" placeholder="Buscar trabajo..."
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button type="submit" class="input-group-text" id="basic-addon2"><i
                                            class="fas fa-search fa-lg"></i></button>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div>
                            <label for="select-type">Tipo de oferta</label>
                            <select name="type" class="form-select" id="select-type">
                                <option value="">Seleccione una opción</option>
                                <option value="Prácticas">Prácticas</option>
                                <option value="1eros empleos profesionales">Primeros empleos profesionales</option>
                                <option value="Otros / Pitutos / Part time">Otros / Pitutos / Part time</option>
                            </select>
                            <div class="text-end">
                                <button class="btn btn-refresh">Actualizar</button>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="select-region">Región</label>
                            <select name="region" class="form-select" id="select-region">
                                <option value="">Seleccione una opción</option>
                                <option value="XV - Arica y Parinacota">XV - Arica y Parinacota</option>
                                <option value="I - Tarapacá">I - Tarapacá</option>
                                <option value="II - Antofagasta">II - Antofagasta</option>
                                <option value="III - Atacama">III - Atacama</option>
                                <option value="IV - Coquimbo">IV - Coquimbo</option>
                                <option value="V - Valparaiso">V - Valparaiso</option>
                                <option value="RM - Metropolitana de Santiago">RM - Metropolitana de Santiago</option>
                                <option value="VI - Libertador General Bernardo O'Higgins">VI - Libertador General
                                    Bernardo O'Higgins</option>
                                <option value="VII - Maule">VII - Maule</option>
                                <option value="XVI - Ñuble">XVI - Ñuble</option>
                                <option value="VIII - Biobío">VIII - Biobío</option>
                                <option value="IX - La Araucanía">IX - La Araucanía</option>
                                <option value="XIV - Los Ríos">XIV - Los Ríos</option>
                                <option value="X - Los Lagos">X - Los Lagos</option>
                                <option value="XI - Aysén del General Carlos Ibáñez del Campo">XI - Aysén del General
                                    Carlos Ibáñez del Campo</option>
                                <option value="XII - Magallanes y de la Antártica Chilena">XII - Magallanes y de la
                                    Antártica Chilena</option>
                            </select>
                            <div class="text-end">
                                <button class="btn btn-refresh">Actualizar</button>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Por fecha</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-45" value="true"
                                    id="last-48">
                                <label class="form-check-label" for="last-48">
                                    Última hora
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-4-days" value="true"
                                    id="last-4-days">
                                <label class="form-check-label" for="last-4-days">
                                    Últimas 24 horas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-7-days" value="true"
                                    id="last-7-days">
                                <label class="form-check-label" for="last-7-days">
                                    Últimos 4 dias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-7-days" value="true"
                                    id="last-7-days">
                                <label class="form-check-label" for="last-7-days">
                                    Últimos 7 dias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="all-options-date" value="true"
                                    id="all-options-date">
                                <label class="form-check-label" for="all-options-date">
                                    Todos
                                </label>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-refresh">Actualizar</button>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Ordenar por</label>
                            <select name="orderby" class="form-select" id="">
                                <option value="">Seleccione una opción</option>
                                <option value="Más nuevo">Más nuevo</option>
                                <option value="Más antiguo">Más antiguo</option>
                            </select>
                            <div class="text-end">
                                <button class="btn btn-refresh">Actualizar</button>
                            </div>
                        </div>

                    </section>
                </aside>
                <section class="col-md-9">
                    <div class="container-publications">

                        <div class="container-publication">
                            <div>
                                <h4 title="titulo completo">esto es un titulo</h4>
                                <p>
                                    <span><i class="fas fa-map-marker-alt"></i> region</span>
                                    <span><i class="fas fa-briefcase"></i> tipo de trabajo</span>
                                    <span><i class="fas fa-calendar-week"></i> fecha de creación</span>
                                </p>
                            </div>
                            <div class="">
                                <button class="btn" data-bs-toggle="modal"
                                    data-bs-target="#modalPublication">Ver</button>
                            </div>
                        </div>
                        <div class="container-publication">
                            <div>
                                <h4 title="titulo completo">esto es un titulo</h4>
                                <p>
                                    <span><i class="fas fa-map-marker-alt"></i> region</span>
                                    <span><i class="fas fa-briefcase"></i> tipo de trabajo</span>
                                    <span><i class="fas fa-calendar-week"></i> fecha de creación</span>
                                </p>
                            </div>
                            <div class="">
                                <button class="btn" data-bs-toggle="modal"
                                    data-bs-target="#modalPublication">Ver</button>
                            </div>
                        </div>
                        <div class="container-publication">
                            <div>
                                <h4 title="titulo completo">esto es un titulo</h4>
                                <p>
                                    <span><i class="fas fa-map-marker-alt"></i> region</span>
                                    <span><i class="fas fa-briefcase"></i> tipo de trabajo</span>
                                    <span><i class="fas fa-calendar-week"></i> fecha de creación</span>
                                </p>
                            </div>
                            <div class="">
                                <button class="btn" data-bs-toggle="modal"
                                    data-bs-target="#modalPublication">Ver</button>
                            </div>
                        </div>
                    </div>
                    <div class="pagination">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
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