<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Example user</span>
                        <span class="text-muted text-xs block">menu <b class="caret"></b></span>
                    </a> -->
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="<?= $_ENV['ROOT'] ?>/controllers/actions/users/logout.php">Salir</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    LU
                </div>
            </li>
            <li <?= ($menu == 'publication')? "class='active'" : ''; ?>>
                <a href="index.html"><i class="fa fa-folder" aria-hidden="true"></i> <span class="nav-label">Publicaciones</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="true" style="">
                    <li <?= ($submenu == 'createp')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'createp')? '#' : $_ENV['ROOT'].'/dashboard/create-publication'; ?>">Crear</a></li>
                    <li <?= ($submenu == 'listp')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'listp')? '#' : $_ENV['ROOT'].'/dashboard/list-publications'; ?>">Listar</a></li>
                    <li <?= ($submenu == 'editp')? "class='active'" : ''; ?>><a href="#">Editar</a></li>
                </ul>
            </li>
            <li <?= ($menu == 'article')? "class='active'" : ''; ?>>
                <a href="index.html"><i class="fa fa-book" aria-hidden="true"></i> <span class="nav-label">Artículos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="true" style="">
                    <li <?= ($submenu == 'createa')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'createa')? '#' : $_ENV['ROOT'].'/dashboard/create-article'; ?>">Crear</a></li>
                    <li <?= ($submenu == 'lista')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'lista')? '#' : $_ENV['ROOT'].'/dashboard/list-articles'; ?>">Listar</a></li>
                    <li <?= ($submenu == 'edita')? "class='active'" : ''; ?>><a href="#">Editar</a></li>

                </ul>
            </li>
        </ul>

    </div>
</nav>