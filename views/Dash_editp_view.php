<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LiftU | editar publicación</title>

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/trumbowyg.css" rel="stylesheet">
    <style>

    </style>

</head>

<body>

<div id="wrapper">

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/views/modules/menu.php'); ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <!-- <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div> -->
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?= $_ENV['ROOT'] ?>/controllers/actions/users/logout.php">
                            <i class="fas fa-sign-out-alt"></i> Salir 
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Editar publicación </h5>
                        </div>
                        <div class="ibox-content">
                            <?php if($flagEP): ?>
                                <div class="alert alert-success mt-2" role="alert">
                                    Publicación editada correctamente.!
                                </div>
                            <?php endif; ?>
                            <form class="row" method="post" action="<?= $_ENV['ROOT'] ?>/controllers/actions/publication/edit.php" >
                                <!-- <h3 class="col-12 text-navy">Datos basicos del inmueble</h3> -->
                                <input type="hidden" name="id" value="<?= $publication['id']; ?>">
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Titulo de publicación</label>
                                    <input type="text" class="form-control" name="title" value="<?= $publication['title']; ?>">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Tipo de publicación</label>
                                    <select name="type" class="form-control" id="">
                                        <option value="0">Seleccione una opción</option>
                                        <option value="1" <?= ($publication['type'] == 'Prácticas')? 'selected' : ''; ?>>Prácticas</option>
                                        <option value="2" <?= ($publication['type'] == '1eros empleos profesionales')? 'selected' : ''; ?>>1eros empleos</option>
                                        <option value="3" <?= ($publication['type'] == 'Otros / Pitutos / Part time')? 'selected' : ''; ?>>Profesionales</option>
                                    </select>
                                </div>
                                <!-- <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Descripción corta</label>
                                    <textarea name="description-short" class="form-control"><?= $publication['description_short']; ?></textarea>
                                </div> -->
                                <div class="mb-3 col-12">
                                    <label for="">Descripción</label>
                                    <div id="my-editor"><?= $publication['description']; ?></div>
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Link</label>
                                    <input type="text" class="form-control" name="link" value="<?= $publication['link']; ?>">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Región</label>
                                    <select name="region" class="form-control" id="">
                                        <option value="0">Seleccione una opción</option>
                                        <option value="1" <?= ($publication['region'] == 'XV - Arica y Parinacota')? 'selected' : ''; ?>>XV - Arica y Parinacota</option>
                                        <option value="2" <?= ($publication['region'] == 'I - Tarapacá')? 'selected' : ''; ?>>I - Tarapacá</option>
                                        <option value="3" <?= ($publication['region'] == 'II - Antofagasta')? 'selected' : ''; ?>>II - Antofagasta</option>
                                        <option value="4" <?= ($publication['region'] == 'III - Atacama')? 'selected' : ''; ?>>III - Atacama</option>
                                        <option value="5" <?= ($publication['region'] == 'IV - Coquimbo')? 'selected' : ''; ?>>IV - Coquimbo</option>
                                        <option value="6" <?= ($publication['region'] == 'V - Valparaiso')? 'selected' : ''; ?>>V - Valparaiso</option>
                                        <option value="7" <?= ($publication['region'] == 'RM - Metropolitana de Santiago')? 'selected' : ''; ?>>RM - Metropolitana de Santiago</option>
                                        <option value="8" <?= ($publication['region'] == "VI - Libertador General Bernardo O'Higgins")? 'selected' : ''; ?>>VI - Libertador General Bernardo O'Higgins</option>
                                        <option value="9" <?= ($publication['region'] == 'VII - Maule')? 'selected' : ''; ?>>VII - Maule</option>
                                        <option value="10" <?= ($publication['region'] == 'XVI - Ñuble')? 'selected' : ''; ?>>XVI - Ñuble</option>
                                        <option value="11" <?= ($publication['region'] == 'VIII - Biobío')? 'selected' : ''; ?>>VIII - Biobío</option>
                                        <option value="12" <?= ($publication['region'] == 'IX - La Araucanía')? 'selected' : ''; ?>>IX - La Araucanía</option>
                                        <option value="13" <?= ($publication['region'] == 'XIV - Los Ríos')? 'selected' : ''; ?>>XIV - Los Ríos</option>
                                        <option value="14" <?= ($publication['region'] == 'X - Los Lagos')? 'selected' : ''; ?>>X - Los Lagos</option>
                                        <option value="15" <?= ($publication['region'] == 'XI - Aysén del General Carlos Ibáñez del Campo')? 'selected' : ''; ?>>XI - Aysén del General Carlos Ibáñez del Campo</option>
                                        <option value="16" <?= ($publication['region'] == 'XII - Magallanes y de la Antártica Chilena')? 'selected' : ''; ?>>XII - Magallanes y de la Antártica Chilena</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Fecha de creación</label>
                                    <input type="date" class="form-control" name="create-date" value="<?= $publication['create_date']; ?>">
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
                
            </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
            </div>
            <div>
                <strong>Copyright</strong> LiftU &copy; 2021
            </div>
        </div>

    </div>
</div>

<!-- Mainly scripts -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/trumbowyg.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/popper.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= $_ENV['ROOT'] ?>/assets/js/inspinia.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/pace/pace.min.js"></script>

<-- Init Trumbowyg -->
<script>
    // Doing this in a loaded JS file is better, I put this here for simplicity
    $('#my-editor').trumbowyg({
        svgPath: '/assets/css/icons.svg',
        btnsDef: {
            underline: {
                fn: 'underline',
                tag: 'u',
                title: 'underline',
                text: '<u>U</u>',
                isSupported: function () { return true; },
                param: '' ,
                forceCSS: false,
                class: 'btn-underline',
                hasIcon: false
            }
            
        },
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del', 'underline'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ]
    });
    function underline(){
    }

</script>

</body>

</html>