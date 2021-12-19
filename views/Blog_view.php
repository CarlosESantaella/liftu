<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Blog</title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-blog.css">
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
                    ...
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
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

                <aside class="col-md-3">
                    <section class="container-filter">
                        <div>
                            <label for="select-type">Tipo de publicación</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="news" value="true"
                                    id="news">
                                <label class="form-check-label" for="news">
                                    Noticias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="workshops" value="true"
                                    id="workshops">
                                <label class="form-check-label" for="workshops">
                                    Talleres y Charlas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="courses" value="true"
                                    id="courses">
                                <label class="form-check-label" for="courses">
                                    Cursos web
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tools" value="true"
                                    id="tools">
                                <label class="form-check-label" for="tools">
                                    Herramientas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tips" value="true"
                                    id="tips">
                                <label class="form-check-label" for="tips">
                                    Tip laborales
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="others" value="true"
                                    id="others">
                                <label class="form-check-label" for="others">
                                    Otras oportunidades
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Fecha de publicación</label>
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
                        </div>
                        <hr>
                        <div>
                            <label for="">Ordenar por</label>
                            <select name="orderby" class="form-select" id="">
                                <option value="">Seleccione una opción</option>
                                <option value="Más nuevo">Más nuevo</option>
                                <option value="Más antiguo">Más antiguo</option>
                            </select>
                        </div>
                        <hr>
                        <div>
                            <form action="hola.php" class="form-search  input-search-banner" method="post">
                                <input type="hidden" class="type-publication" name="type-offer" value="">
                                <input type="hidden" class="date-publication" name="date-offer" value="">
                                <input type="hidden" class="orderby-publication" name="orderby-offer" value="">
                                <button type="submit" class="input-group-text" id="basic-addon2"><i
                                            class="fas fa-search fa-lg d-inline-block me-2"></i> Buscar</button>
                            </form>
                        </div>
                    </section>
                </aside>
                <section class="col-md-9">
                    <div class="container-publications ">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure>
                                            
                                        </figure>
                                        <div class="">
                                            <h3>esto es el título del artículo</h3>
                                        </div>
                                    </div>
                                </a>
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