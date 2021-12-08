<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LiftU | editar artículo</title>

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/trumbowyg.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style-dashboard.css" rel="stylesheet">
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
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
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
                                        <h5>Editar artículo </h5>
                                    </div>
                                    <div class="ibox-content">
                                        <?php if($flagEA): ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            Artículo editada correctamente.!
                                        </div>
                                        <?php endif; ?>
                                        <form class="row" method="post"
                                            action="<?= $_ENV['ROOT'] ?>/controllers/actions/article/edit.php" enctype="multipart/form-data">
                                            <!-- <h3 class="col-12 text-navy">Datos basicos del inmueble</h3> -->
                                            <input type="hidden" name="id" value="<?= $article['id']; ?>">
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Titulo del artículo</label>
                                                <input type="text" class="form-control" name="title"
                                                    value="<?= $article['title']; ?>">
                                            </div>
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Tipo de artículo</label>
                                                <select name="type" class="form-control" id="">
                                                    <option value="0">Seleccione una opción</option>
                                                    <option value="1"
                                                        <?= ($article['type'] == 'Noticias')? 'selected' : ''; ?>>
                                                        Noticias</option>
                                                    <option value="2"
                                                        <?= ($article['type'] == 'Talleres y Charlas')? 'selected' : ''; ?>>
                                                        Talleres y Charlas</option>
                                                    <option value="3"
                                                        <?= ($article['type'] == 'Cursos web')? 'selected' : ''; ?>>
                                                        Cursos web</option>
                                                    <option value="4"
                                                        <?= ($article['type'] == 'Herramientas')? 'selected' : ''; ?>>
                                                        Herramientas</option>
                                                    <option value="5"
                                                        <?= ($article['type'] == 'Tip laborales')? 'selected' : ''; ?>>
                                                        Tip laborales</option>
                                                    <option value="6"
                                                        <?= ($article['type'] == 'Otras oportunidades')? 'selected' : ''; ?>>
                                                        Otras oportunidades</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Descripción corta</label>
                                                <textarea name="description-short"
                                                    class="form-control"><?= $article['description_short']; ?></textarea>
                                            </div>
                                            <div class="mb-3 col-12">
                                                <label for="">Descripción</label>
                                                <div id="my-editor"><?= $article['description']; ?></div>
                                            </div>
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Link</label>
                                                <input type="text" class="form-control" name="link"
                                                    value="<?= $article['link']; ?>">
                                            </div>
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Imagen</label>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" accept="image/*" name="image"
                                                            class="custom-file-input" id="inputGroupFile01"
                                                            aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01"><?= $article['image']; ?></label>
                                                    </div>
                                                </div>
                                                <figure class="container-img-file">
                                                    <img id="img-file" src="<?= $_ENV['ROOT']; ?>/assets/file/<?= $article['image']; ?>" alt="">
                                                </figure>
                                            </div>
                                            <div class="mb-3 col-sm-6 col-lg-4">
                                                <label for="">Fecha de creación</label>
                                                <input type="date" class="form-control" name="create-date"
                                                    value="<?= $article['date_create']; ?>">
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
                        isSupported: function () {
                            return true;
                        },
                        param: '',
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

            function underline() {}
            $('#inputGroupFile01').change(function(e){
                let value = $(this)[0].files[0].name;
                $('.custom-file-label').text(value);
                let reader = new FileReader();
                reader.onload = function(){
                    let output = document.getElementById('img-file');
                    output.src = reader.result;
                };
                reader.readAsDataURL(e.target.files[0]);
            })
        </script>

</body>

</html>