<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LiftU | crear publicación</title>

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="#">
                        <!-- <div class="form-group">
                            <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                        </div> -->
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-sign-out"></i> Salir
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
                            <h5>Crear Inmueble</h5>
                        </div>
                        <div class="ibox-content">
                            <?php if($flagCP): ?>
                                <div class="alert alert-success mt-2" role="alert">
                                    Publicación creada correctamente.!
                                </div>
                            <?php endif; ?>
                            <form class="row" method="post" action="<?php echo $url_base.$local; ?>/controllers/actions/rents/create_rent_controller.php" >
                                <h3 class="col-12 text-navy">Datos basicos del inmueble</h3>
                                
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Catastro</label>
                                    <input type="text" class="form-control" name="catastro">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Nombre de propietario</label>
                                    <select name="name_owner" class="form-control" id="">
                                        <?php foreach($owners as $owner): ?>
                                            <option value="<?php echo $owner['id']; ?>"><?php echo $owner['name'].' '.$owner['lastname']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">País</label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Latitud</label>
                                    <input type="text" class="form-control" name="lat">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Longitud</label>
                                    <input type="text" class="form-control" name="long">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Municipio</label>
                                    <input type="text" class="form-control" name="municipality">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Calle</label>
                                    <input type="text" class="form-control" name="street">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Número de calle</label>
                                    <input type="text" class="form-control number" name="nr_street">
                                </div>
                                
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Bloque</label>
                                    <input type="text" class="form-control" name="building">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Escalera</label>
                                    <input type="text" class="form-control" name="stairs">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Piso</label>
                                    <input type="text" class="form-control" name="floor">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Puerta</label>
                                    <input type="text" class="form-control" name="door">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Código postal</label>
                                    <input type="text" class="form-control number" name="zip_code">
                                </div>
                                <h3 class="col-12 mt-4 text-navy">Datos especificos del inmueble</h3>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Tipo de inmueble</label>
                                    <select name="type_property" class="form-control type-property" id="">
                                        <option value="">Seleccione un tipo</option>
                                        <option value="0">Vivienda</option>
                                        <option value="1">Local</option>
                                        <option value="2">Terreno</option>
                                        <option value="3">Hotel</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Subtipo</label>
                                    <input type="text" class="form-control" name="subtype">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Metros cuadrados construidos</label>
                                    <input type="text" class="form-control number" name="sm_constructed">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">metros cuadrados terreno</label>
                                    <input type="text" class="form-control number" name="sm_terrain">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Año de construcción</label>
                                    <input type="text" class="form-control number" name="year_constructed">
                                </div>
                                <div class="mb-3 col-sm-6 col-lg-4">
                                    <label for="">Año última reforma</label>
                                    <input type="text" class="form-control number" name="year_lreform">
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
<script src="<?= $_ENV['ROOT'] ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/popper.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= $_ENV['ROOT'] ?>/assets/js/inspinia.js"></script>
<script src="<?= $_ENV['ROOT'] ?>/assets/js/plugins/pace/pace.min.js"></script>


</body>

</html>