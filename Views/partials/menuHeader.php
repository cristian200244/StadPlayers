
<?php
include_once(__DIR__ . "/../../config/rutas.php");
// include_once __DIR__ . "../../../Controllers/UsuarioController.php";
// $restriccion = new UsuarioController();

// if ( !isset($_SESSION['id'])) {
//       header("Location: ../../index.php");
//      }
?> 

<ul class="navbar-nav ms-auto ms-md-0 me-5 me-lg-7">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
             <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>/Views/botonExtra/index.php">
                <i class="fa-solid fa-circle-user fa-beat-fade"
                        style="color: #DF00FE ; padding-left: 2%; padding-right:2%;">
                    </i>
                    Usuario
                </a>

            </li> 

            <!-- <input type="hidden" name="c" value="5"> -->
            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>../sugerencias.php">
                    <i class="fa-solid fa-user-pen fa-fade" style="color: rgb(246, 255, 0); padding-left: 2%; padding-right:2%;"></i>
                    Sugerencias
                </a>
            </li>
            <li>
                <hr class="dropdown-divider" />
            </li>

            <li>
                <a class="dropdown-item" href="<?= BASE_URL ?>/Controllers/UsuarioController.php?c=6">
                    <i class="fa-solid fa-hand fa-shake" style="color: #FF4633 ; padding-left: 2%; padding-right:2%;"></i>
                    Cerrar Sesión
                </a>
            </li>
        </ul>

    </li>
</ul>