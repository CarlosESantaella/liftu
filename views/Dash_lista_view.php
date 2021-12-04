<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LiftU | listar artículos</title>

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style.css" rel="stylesheet">

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
                            <a href="#">
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
                                        <h5>Artículos</h5>
                                    </div>
                                    <div class="ibox-content">
                                    <?php if($flagDA): ?>
                                        <div class="alert alert-success mt-2" role="alert">
                                            Artículo eliminado correctamente.!
                                        </div>
                                    <?php endif; ?>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="min-width: 100px;">Opciones</th>
                                                        <th scope="col">Título</th>
                                                        <th scope="col">Descripción</th>
                                                        <th scope="col">Url</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Fecha de creación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($articles as $article): ?>
                                                    <tr>
                                                        <th class="text-center"><a href="<?= $_ENV['ROOT']; ?>/controllers/actions/article/delete.php?id=<?= $article['id']; ?>" onclick="deletea(event);" class="btn btn-danger mr-1"><i class="fas fa-trash-alt"></i></a><a href="<?= $_ENV['ROOT']; ?>/dashboard/edit-article/<?= $article['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></th>
                                                        <th><?= $article['title']; ?></th>
                                                        <th><?= $article['description_short']; ?></th>
                                                        <th><?= $article['link']; ?></th>
                                                        <th><?= $article['type']; ?></th>
                                                        <th><?= $article['date_create']; ?></th>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
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
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/popper.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/inspinia.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/pace/pace.min.js"></script>

    <script>
        function deletea(event){
            if(confirm("¿Esta seguro que desea eliminar este artículo?")){

            }else{
                event.preventDefault();
            }
        }
    </script>

</body>

</html>