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

<body >
    <input type="hidden" class="n_rows" value="<?= $num_total_rows ?>">
    <input type="hidden" class="root_domain" value="<?= $_ENV['ROOT'] ?>">
    <!-- Modal -->
    <div class="modal fade" id="modalPublication" tabindex="-1" aria-labelledby="modalPublicationLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPublicationLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-refresh" data-bs-dismiss="modal">Close</button> -->
                    <a class="link-publication" target="_blank" href="#"><button type="button" class="btn btn-refresh">Ir a enlace</button></a>
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

                <aside class="col-md-3">
                    <section class="container-filter">
                        <div>
                            <form action="hola.php" class="form-search input-group input-search-banner" method="post">
                                
                                <div>

                                    <input type="text" class="form-control" id="input-search" placeholder="Buscar trabajo..."
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button type="button" class="input-group-text btn-submit" id="basic-addon2"><i
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
                                <option value="Primeros empleos profesionales">Primeros empleos profesionales</option>
                                <option value="Otros / Pitutos / Part time">Otros / Pitutos / Part time</option>
                            </select>
                            <div class="text-end">
                                <button class="btn btn-refresh btn-submit">Actualizar</button>
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
                                <button class="btn btn-refresh btn-submit">Actualizar</button>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <label for="">Por fecha</label>
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-45"
                                    id="last-h">
                                <label class="form-check-label" for="last-48">
                                    Última hora
                                </label>
                            </div> -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-4-days" 
                                    id="last-24-hours">
                                <label class="form-check-label" for="last-4-days">
                                    Últimas 24 horas
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="last-7-days" 
                                    id="last-4-days">
                                <label class="form-check-label" for="last-7-days">
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
                            <div class="text-end">
                                <button class="btn btn-refresh btn-submit">Actualizar</button>
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
                            <div class="text-end">
                                <button class="btn btn-refresh btn-submit">Actualizar</button>
                            </div>
                        </div>

                    </section>
                </aside>
                <section class="col-md-9">
                    <div class="container-publications">

                        <?php foreach($results as $publication): ?>
                        <div class="container-publication">
                            <div>
                                <h4 title="titulo completo"><?= $publication['title'] ?></h4>
                                <p>
                                    <?php if($publication['region'] != ''): ?>
                                    <span><i class="fas fa-map-marker-alt"></i> <?= $publication['region'] ?></span>
                                    <?php endif; ?>
                                    <?php if($publication['type'] != ''): ?>
                                    <span><i class="fas fa-briefcase"></i> <?= $publication['type'] ?></span>
                                    <?php endif; ?>
                                    <?php if($publication['create_date'] != ''): ?>
                                    <span><i class="fas fa-calendar-week"></i> <?= $publication['create_date'] ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="">
                                <button class="btn btn-ver" data-id="<?= $publication['id'] ?>" data-bs-toggle="modal"
                                    data-bs-target="#modalPublication">Ver</button>
                            </div>
                        </div>
                        <?php endforeach; ?>

                       
                    </div>
                    <div class="pagination" data-page="1">
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
            var root_domain = $('.root_domain').val();
            var query = '';

            $('.btn-submit').on('click', function(){
                query = '';
                let input_search = $('#input-search').val();
                let select_type = $('#select-type').val();
                let select_region = $('#select-region').val();
                // let box_last_hour = $('#last-h').prop('checked');
                let box_last_24_hour = $('#last-24-hours').prop('checked');
                let box_last_4_days = $('#last-4-days').prop('checked');
                let box_last_7_days = $('#last-7-days').prop('checked');
                let box_all = $('#all-options-date').prop('checked');
                let select_order_by = $('#select-order-by').val();
                let counter_all = 0;
                let counter_date = 0;

                if(input_search != ''){
                    if(counter_all == 0){
                        counter_all++;
                        query += "WHERE title LIKE '%"+input_search+"%' ";
                    }
                }

                if(select_type != ''){
                    if(counter_all == 0){
                        query += "WHERE type = '"+select_type+"' ";
                    }else{
                        query += "AND type = '"+select_type+"' ";
                    }
                    counter_all++;
                }

                if(select_region != ''){
                    if(counter_all == 0){
                        query += "WHERE region = '"+select_region+"' ";
                    }else{
                        query += "AND region = '"+select_region+"' ";
                    }
                    counter_all++;
                }

                if(box_all != ''){


                }else{
                    if(box_last_7_days != ''){
                        if(counter_all == 0){
                            query += "WHERE create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 7 DAY)  AND CURDATE() ";
    
                        }else{
                            query += "AND create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 7 DAY)  AND CURDATE() ";
    
                        }
                        counter_all++;
                    }else{
    
                        if(box_last_4_days != ''){
                            if(counter_all == 0){
                                query += "WHERE create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 4 DAY)  AND CURDATE() ";
    
                            }else{
                                query += "AND create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 4 DAY)  AND CURDATE() ";
                            }
                            counter_all++;
                        }else{
    
                            if(box_last_24_hour != ''){
                                if(counter_all == 0){
                                    query += "WHERE create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)  AND CURDATE() ";
        
                                }else{
                                    query += "AND create_date BETWEEN DATE_SUB(CURDATE(),INTERVAL 1 DAY)  AND CURDATE() ";
                                }
                                counter_all++;
                            }
                        }
                    }
                }

                if(select_order_by != ''){
                    if(select_order_by == '2'){
                        query += "ORDER BY create_date ASC";
                    }else{
                        query += "ORDER BY create_date DESC";
                    }
                }else{
                    query += "ORDER BY create_date DESC";
                }

                let formData = new FormData();
                formData.append('query', query);

                fetch(root_domain+'/controllers/actions/publication/pagination.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let result = data;

                    $('.container-publications').html('');
                    $('.container-publications').html(result.content);
                    $('#pagination').html('');
                    $('#pagination').html(result.pagination);
                });
                
            })

            $('#pagination').on('click', '.page-link', function(e){
                e.preventDefault();
                let page = parseInt($(this).attr('data-page'), 10);
                
                let formData = new FormData();
                formData.append('page', page);
                formData.append('query', query);

                fetch(root_domain+'/controllers/actions/publication/pagination.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    let result = data;

                    $('.container-publications').html('');
                    $('.container-publications').html(result.content);
                    $('#pagination').html('');
                    $('#pagination').html(result.pagination);
                });
                // console.log(content);
            });

            $('.container-publications').on('click', '.btn-ver', function(){

                let id = $(this).attr('data-id');

                let formData = new FormData();
                formData.append('id', id);
                
                fetch(root_domain+'/controllers/actions/publication/see-link.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    $('.modal-title').text(data.title);
                    $('.modal-body').html(data.description);
                    $('.link-publication').attr('href', data.link)
                });

            })
        })
    </script>
</body>

</html>