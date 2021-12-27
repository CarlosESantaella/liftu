<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU | Configuración</title>
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <?php $menu = 'configuration'; $submenu = ''; ?>
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
                                        <h5>Configuración</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <?php if($flag_option): ?>
                                            <div class="alert alert-success mt-2" role="alert">
                                                Opción configurada correctamente.!
                                            </div>
                                        <?php endif; ?>
                                        <form action="<?= $_ENV['ROOT'] ?>/controllers/actions/configuration/configuration.php" method="post">
                                            <div class="form-group form-check">
                                                <input type="checkbox" name="limit-10" class="form-check-input"  id="exampleCheck1" value="true" <?= ($flag_config == 'activado')? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="exampleCheck1">Limitar hasta 10 publicación</label>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn btn-primary" type="submit">Guardar</button>
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
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/popper.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/inspinia.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/pace/pace.min.js"></script>
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