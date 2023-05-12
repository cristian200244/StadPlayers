<?php
require_once(__DIR__ . "../../../config/rutas.php");
require_once(BASE_DIR . '../../Models/GenerarReportesModel.php');
require_once(BASE_DIR . "../../Views/main/header.php");
require_once(BASE_DIR . "../../Views/partials/aside.php");
?>


<section class="vh-110" style="background-color:#48C9B0;">
    <div class="container py-5 px-5 h-10 mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong card bg-black" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <form action="signup.php" method="post">
                            <strong>
                                <h2 class="fw-bold mb-2 text-light fs-3">Crear Usuario </h2>
                                <h2 class="text-light fs-5">O </h2>
                                <p class="text-white mb-1">
                                    <br>

                                    <a class="btn btn-outline-light btn-lg px-2 fs-5 text-info"
                                        href="<?= BASE_URL ?>../index.php">
                                        Iniciar Sesión</a>
                                </p>

                                <br><br> <br>

                            </strong>

                            <div class="form-outline mb-2 px-2">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                                <strong></strong> <label class="form-label" for="typeEmailX-2"
                                    style=" color:#9bdaff;">Ingresa un Correo</label></strong>
                            </div>

                            <div class="form-outline mb-2 px-2">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                <label class="form-label" for="typePasswordX-2"
                                    style="font-family:Russo One; color:#9bdaff;">Elige una Contraseña</label>
                            </div>
                            <div class="form-outline mb-2 px-2">
                                <input type="password" id="typeEmailX-2" class="form-control form-control-lg" />
                                <strong></strong> <label class="form-label" for="typePasswordX-2"
                                    style="font-family:Russo One; color:#9bdaff;">Confirma tu
                                    Contraseña</label></strong>
                            </div>

                            <div class="iniciarSesion">

                                <a class="btn btn-outline-light btn-lg px-2 fs-5 bg-light text-warning"
                                    href="<?= BASE_URL ?>/index.php">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Crear
                                </a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once(BASE_DIR . "../../Views/main/footer.php");
?>