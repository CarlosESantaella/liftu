<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiftU - Login y Registro</title>
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-general.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/bootstrap5.css">
    <link rel="stylesheet" href="<?= $_ENV['ROOT'] ?>/assets/css/style-login-register.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .tab-content > div:last-child{
            display: <?= ($flag_login)? 'block' : 'none' ;?>;
        }
        .tab-content > div:first-child{
            display: <?= ($flag_login)? 'none' : 'block' ;?>;
        }

    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="form">

        <ul class="tab-group">
            <li class="tab <?= ($flag_login)? '' : 'active' ; ?>"><a href="#signup">Registro</a></li>
            <li class="tab <?= ($flag_login)? 'active' : '' ; ?>"><a href="#login">Login</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Regístrate gratis!</h1>

                <form action="<?= $_ENV['ROOT'] ?>/controllers/actions/login-register/register.php" method="post">
                    <?php if($flag_email): ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" /></svg>
                        <div>
                            El email ingresado ya existe :(
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($flag_register): ?>
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill" /></svg>
                        <div>
                            Registrado correctamente.! ya puede loguearse con exito :)
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="field-wrap">
                        <label>
                            Nombres
                        </label>
                        <input type="text" name="name" required autocomplete="off" />
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Apellido del padre
                            </label>
                            <input type="text" name="father_lastname" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Apellido de la madre
                            </label>
                            <input type="text" name="mother_lastname" required autocomplete="off" />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email
                        </label>
                        <input type="email" name="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Contraseña
                        </label>
                        <input type="password" name="password" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <!-- <label for="select-type">Qué buscas hoy</label> -->
                        <select name="type" id="select-type">
                            <option value="0">Qué buscas hoy</option>
                            <option value="1">Prácticas</option>
                            <option value="2">Primeros empleos profesionales</option>
                            <option value="3">Otros / Pitutos / Part time</option>
                        </select>
                    </div>

                    <button type="submit" class="button button-block">Registrarse</button>

                </form>

            </div>

            <div id="login">
                <h1>Bienvenido</h1>

                <form action="<?= $_ENV['ROOT'] ?>/controllers/actions/login-register/login.php" method="post">
                    <?php if($flag_login): ?>
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill" /></svg>
                        <div>
                            Credenciales incorrectas :(
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="field-wrap">
                        <label>
                            Email
                        </label>
                        <input type="email" name="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Contraseña
                        </label>
                        <input type="password" name="password" required autocomplete="off" />
                    </div>

                    <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

                    <button class="button button-block">Acceder</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script async src="<?= $_ENV['ROOT'] ?>/assets/js/bootstrap.bundle.js"></script>
    <script>
        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if ($this.val() === '') {
                    label.removeClass('highlight');
                } else if ($this.val() !== '') {
                    label.addClass('highlight');
                }
            }

        });

        $('.tab a').on('click', function (e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

        });
    </script>
</body>

</html>