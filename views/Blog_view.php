<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Blog</title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-blog.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


</head>

<body>
    <input type="hidden" class="root_domain" value="<?= $_ENV['ROOT'] ?>">
    <!-- Modal -->
    <div class="modal fade" id="modalPublication" tabindex="-1" aria-labelledby="modalPublicationLabel"
        aria-hidden="true">
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
                            <a class="btn btn-navbar-top text-white" href="<?= $_ENV['ROOT'] ?>/login-register">Iniciar
                                Sesión</a>
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
                                <input class="form-check-input" type="checkbox" name="news" id="news">
                                <label class="form-check-label" for="news">
                                    Noticias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="workshops"
                                    id="workshops">
                                <label class="form-check-label" for="workshops">
                                    Talleres y Charlas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="courses"
                                    id="courses">
                                <label class="form-check-label" for="courses">
                                    Cursos web
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tools" id="tools">
                                <label class="form-check-label" for="tools">
                                    Herramientas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="tips" id="tips">
                                <label class="form-check-label" for="tips">
                                    Tip laborales
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="others" id="others">
                                <label class="form-check-label" for="others">
                                    Otras oportunidades
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Fecha de publicación</label>
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-45" value="true"
                                    id="last-48">
                                <label class="form-check-label" for="last-48">
                                    Última hora
                                </label>
                            </div> -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-4-days" 
                                    id="last-24-hours">
                                <label class="form-check-label" for="last-24-hours">
                                    Últimas 24 horas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-4-days" 
                                    id="last-4-days">
                                <label class="form-check-label" for="last-4-days">
                                    Últimos 4 dias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-7-days" 
                                    id="last-7-days">
                                <label class="form-check-label" for="last-7-days">
                                    Últimos 7 dias
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="all-options-date" 
                                    id="all-options-date">
                                <label class="form-check-label" for="all-options-date">
                                    Todos
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Ordenar por</label>
                            <select name="orderby" class="form-select" id="select-order-by">
                                <option value="">Seleccione una opción</option>
                                <option value="1">Más nuevo</option>
                                <option value="2">Más antiguo</option>
                            </select>
                        </div>
                        <hr>
                        <div>
                            <form action="hola.php" class="form-search  input-search-banner" method="post">
                                <button type="button" class="input-group-text btn-submit" id="basic-addon2"><i
                                        class="fas fa-search fa-lg d-inline-block me-2"></i> Buscar</button>
                            </form>
                        </div>
                    </section>
                </aside>
                <section class="col-md-9">
                    <div class="container-publications ">
                        <div class="row">

                            <?php foreach($results as $article): ?>
                            <div class="col-sm-6 col-lg-4">
                                <a href="#">

                                    <div class="container-blog">
                                        <figure
                                            style="background-image: url('<?= $_ENV['ROOT'] ?>/assets/file/<?= $article['image'] ?>')">

                                        </figure>
                                        <div class="">
                                            <h3><?= $article['title'] ?></h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <div class="pagination">
                        <nav aria-label="...">
                            <ul class="pagination" id="pagination">
                                <?php 
                        
                                    if ($total_pages > 1) {
                                        
                                        $disabled = (($page - 1) == 0)? 'disabled' : '';
                                        echo"<li class='page-item {$disabled}'>
                                                <a class='page-link' data-page='".($page-1)."' href='#' tabindex='-1' aria-disabled='true'>&laquo;</a>
                                            </li>";
                                        
                                        $count = 1;
                                        $page_init = (($page - 2) <= 0)? 1 : ($page - 2);

                                        for ($i=$page_init;$i<=$total_pages;$i++) {

                                            if($count == 6) break;


                                            if ($page == $i) {
                                                echo '<li class="page-item active"><a class="page-link" href="#">'.$page.'</a></li>';
                                            } else {
                                                echo '<li class="page-item"><a class="page-link" href="#" data-page="'.$i.'">'.$i.'</a></li>';
                                            }

                                            $count++;


                                        }
                                
                                        if ($page != $total_pages) {
                                            echo '<li class="page-item">
                                                    <a class="page-link" href="#" data-page="'.($page+1).'">&raquo;</a>
                                                </li>';
                                        }
                                    }
                                ?>
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
        $(document).ready(() => {
            var query = '';
            var root_domain = $('.root_domain').val();
            $('.btn-submit').on('click', function(){
                query = '';
                let news = $('#news').prop('checked');
                let workshops = $('#workshops').prop('checked');
                let courses = $('#courses').prop('checked');
                let tools = $('#tools').prop('checked');
                let tips = $('#tips').prop('checked');
                let others = $('#others').prop('checked');
                
                let box_last_24_hour = $('#last-24-hours').prop('checked');
                let box_last_4_days = $('#last-4-days').prop('checked');
                let box_last_7_days = $('#last-7-days').prop('checked');
                let box_all = $('#all-options-date').prop('checked');
                
                let order_by = $('#select-order-by').val();
                let counter_all = 0;

                if(news != ''){
                    if(counter_all == 0){
                        counter_all++;
                        query += "WHERE type = 'Noticias' ";
                    }
                }
                if(workshops != ''){
                    if(counter_all == 0){
                        query += "WHERE type = 'Talleres y Charlas' ";
                    }else{
                        query += "OR type = 'Talleres y Charlas' ";
                    }
                    counter_all++;
                }
                if(courses != ''){
                    if(counter_all == 0){
                        query += "WHERE type = 'Cursos web' ";
                    }else{
                        query += "OR type = 'Cursos web' ";
                    }
                    counter_all++;
                }
                if(tools != ''){
                    if(counter_all == 0){
                        query += "WHERE type = 'Herramientas' ";
                    }else{
                        query += "OR type = 'Herramientas' ";
                    }
                    counter_all++;
                }
                if(tips != ''){
                    if(counter_all == 0){
                        query += "WHERE type = 'Tip laborales' ";
                    }else{
                        query += "OR type = 'Tip laborales' ";
                    }
                    counter_all++;
                }
                if(others != ''){
                    if(counter_all == 0){
                        query += "WHERE type = 'Otras oportunidades' ";
                    }else{
                        query += "OR type = 'Otras oportunidades' ";
                    }
                    counter_all++;
                }



                if(box_all != ''){


                }else{
                    if(box_last_7_days != ''){
                        if(counter_all == 0){
                            query += "WHERE date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 7 DAY)  AND CURDATE() ";

                        }else{
                            query += "AND date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 7 DAY)  AND CURDATE() ";

                        }
                        counter_all++;
                    }else{

                        if(box_last_4_days != ''){
                            if(counter_all == 0){
                                query += "WHERE date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 4 DAY)  AND CURDATE() ";

                            }else{
                                query += "AND date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 4 DAY)  AND CURDATE() ";
                            }
                            counter_all++;
                        }else{

                            if(box_last_24_hour != ''){
                                if(counter_all == 0){
                                    query += "WHERE date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)  AND CURDATE() ";

                                }else{
                                    query += "AND date_create BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)  AND CURDATE() ";
                                }
                                counter_all++;
                            }
                        }
                    }
                }

                if(order_by != ''){
                    if(order_by == '2'){
                        query += "ORDER BY date_create ASC";
                    }else{
                        query += "ORDER BY date_create DESC";
                    }
                }else{
                    query += "ORDER BY date_create DESC";
                }

                let formData = new FormData();
                formData.append('query', query);
                fetch(root_domain+'/controllers/actions/article/pagination.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let result = data;
                    
                    $('.container-publications .row').html('');
                    $('.container-publications .row').html(result.content);
                    $('#pagination').html('');
                    $('#pagination').html(result.pagination);
                });
                
                
            })

            $('#pagination').on('click', '.page-link', function(e){
                e.preventDefault();
                let root_domain = $('.root_domain').val();

                let page = parseInt($(this).attr('data-page'), 10);
                
                let formData = new FormData();
                formData.append('page', page);

                fetch(root_domain+'/controllers/actions/article/pagination.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let result = data;
                    
                    $('.container-publications .row').html('');
                    $('.container-publications .row').html(result.content);
                    $('#pagination').html('');
                    $('#pagination').html(result.pagination);
                });
                // console.log(content);
            });
        })
    </script>
</body>

</html>