<ul class="navbar-nav ms-auto ms-md-0 me-5 me-lg-7">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <!-- <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>/Views/botonExtra/index.php">
                    <i class="fa-solid fa-hand fa-shake"
                        style="color: rgb(250, 241, 254); padding-left: 2%; padding-right:2%;">
                    </i>
                    Botón extra
                </a>

            </li> -->

            <!-- <input type="hidden" name="c" value="5"> -->
            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>../sugerencias.php">
                    <i class="fa-solid fa-user-pen fa-fade"
                        style="color: rgb(246, 255, 0); padding-left: 2%; padding-right:2%;"></i>

                    Sugerencias
                </a>
            </li>

            <li>
                <hr class="dropdown-divider" />
            </li>

            <li>
                <form action="Controllers/UsuarioController.php">
                    <a class="dropdown-item" type="hidden" method="post" name="c" value="2">
                        <i class="fa-solid fa-hand fa-shake"
                            style="color: rgb(250, 241, 254); padding-left: 2%; padding-right:2%;">
                        </i>
                        Cerrar Sesión
                    </a>
                </form>
            </li>
        </ul>

    </li>
</ul>