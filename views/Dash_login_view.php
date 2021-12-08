<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LiftU | Login</title>
    
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?= $_ENV['ROOT'] ?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?= $_ENV['ROOT'] ?>/assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">LiftU</h1>

            </div>
            <h3>Bienvenido a LiftU</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Ingrese sus datos de acceso.</p>
            <?php if($flagError): ?>
                <div class="alert alert-danger" role="alert">
                    Email o contraseña incorrectos.
                </div>
            <?php endif; ?>
            <form class="m-t" role="form" method="post" action="<?= $_ENV['ROOT'] ?>/controllers/actions/users/access.php">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Contraseña" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Acceder</button>

                <!-- <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <p class="m-t"> <small>Derechos reservados LiftU &copy; <?= date('Y'); ?></small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/popper.min.js"></script>
    <script src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.js"></script>

</body>

</html>