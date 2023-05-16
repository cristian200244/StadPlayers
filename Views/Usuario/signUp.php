<?php

include_once(__DIR__ . "../../../config/rutas.php");

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>StadPlayers</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../../Public/assets/css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Russo One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnavLogin navbar navbar-expand navbar-black">
        <div class=" containerTituloLogin d-flex   mx-auto  d-md-inline-block  "
            style="margin-left:35%; margin-right:20%">
            <font color="aqua" style="
            text-decoration: underline;
            text-decoration-color: rgb(255, 0, 0);
            ">
                STAD
            </font>
            <i class="fa-solid fa-futbol fa-spin" style="color: rgb(255, 255, 255)">
            </i>
            <font color="red" style="
            text-decoration: underline; 
            text-decoration-color: aqua">
                PLAYERS
            </font>
        </div>

    </nav>

    <section class="vh-110" style="background-color:#48C9B0;">
        <div class="container py-5 px-5 h-10 mt-0">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong card bg-black" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
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
                            <form action="../../Controllers/UsuarioController.php" method="POST">
                                <input type="hidden" name="c" value="1">
                                <div class="form-group mb-2 px-2">
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                    <strong><label class="form-label" for="typeEmailX-2" style=" color:#9bdaff;">Ingresa
                                            un
                                            Correo</label></strong>
                                </div>
                                <div class="form-group mb-4">
                                    <input class="form-control form-control-lg" type="text" name="nickname">
                                    <strong><label class="form-label" for="email-2"
                                            style="font-family:Russo One; color:#9bdaff;">Nickname</label></strong>
                                </div>

                                <div class="form-outline mb-2 px-2">
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    <strong> <label class="form-label" for="typePasswordX-2"
                                            style="font-family:Russo One; color:#9bdaff;">Elige una
                                            Contraseña</label></strong>
                                </div>
                                <!-- <div class="form-outline mb-2 px-2">
                                <input type="password" name="password" class="form-control form-control-lg" />
                                <strong> <label class="form-label" for="typePasswordX-2"
                                        style="font-family:Russo One; color:#9bdaff;">Confirma tu
                                        Contraseña</label></strong>
                            </div> -->
                                <input type="submit" value="Crear" onclick="AlertaConfirmNewUser( )" id="register"
                                    class="btn btn-outline-light">

                                <!-- <a href="../../index.php" class="btn btn-danger">Cancelar</a> -->
                                <!-- <div class="BotonIniciarSesion">
                                    <button type="submit" id="insert">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Crear
                                    </button>
                                </div> -->
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