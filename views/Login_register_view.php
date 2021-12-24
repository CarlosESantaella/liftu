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

</head>

<body>
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#signup">Sign Up</a></li>
            <li class="tab"><a href="#login">Log In</a></li>
        </ul>

        <div class="tab-content">
            <div id="signup">
                <h1>Regístrate gratis!</h1>

                <form action="/" method="post">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Nombres
                            </label>
                            <input type="text" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Apellidos
                            </label>
                            <input type="text" required autocomplete="off" />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email
                        </label>
                        <input type="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Contraseña
                        </label>
                        <input type="password" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                    <!-- <label for="select-type">Qué buscas hoy</label> -->
                    <select name="type" id="select-type">
                        <option value="">Qué buscas hoy</option>
                        <option value="Prácticas">Prácticas</option>
                        <option value="1eros empleos profesionales">Primeros empleos profesionales</option>
                        <option value="Otros / Pitutos / Part time">Otros / Pitutos / Part time</option>
                    </select>
                    </div>

                    <button type="submit" class="button button-block" />Registrarse</button>

                </form>

            </div>

            <div id="login">
                <h1>Bienvenido</h1>

                <form action="/" method="post">

                    <div class="field-wrap">
                        <label>
                            Email
                        </label>
                        <input type="email" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Contraseña
                        </label>
                        <input type="password" required autocomplete="off" />
                    </div>

                    <!-- <p class="forgot"><a href="#">Forgot Password?</a></p> -->

                    <button class="button button-block" />Acceder</button>

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