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
                        <li><a class="dropdown-item" href="#">Salir</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    LU
                </div>
            </li>
            <li <?= ($menu == 'publication')? "class='active'" : ''; ?>>
                <a href="index.html"><i class="fa fa-folder" aria-hidden="true"></i> <span class="nav-label">Publicaciones</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                    <li <?= ($submenu == 'create')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'create')? '#' : $_ENV['ROOT'].'/dashboard/create-publication'; ?>">Crear</a></li>
                    <li <?= ($submenu == 'list')? "class='active'" : ''; ?>><a href="<?= ($submenu == 'list')? '#' : $_ENV['ROOT'].'/dashboard/list-publications'; ?>">Listar</a></li>
                </ul>
            </li>
            <li >
                <a href="index.html"><i class="fa fa-book" aria-hidden="true"></i> <span class="nav-label">Artículos</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="true" style="">
                    <li><a href="#">Crear</a></li>
                    <li><a href="#">Eliminar</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>