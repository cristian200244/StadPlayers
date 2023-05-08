<?php
include_once(__DIR__ . "/config/rutas.php");
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
    <link href="Public/assets/css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Russo One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnavInicio navbar navbar-expand navbar-dark">
        <div class="containerTitulo ">

            <font color="aqua" style="
                text-decoration: underline;
                text-decoration-color: rgb(255, 0, 0);
              ">
                STAD
                <i class="fa-solid fa-futbol fa-spin" style="color: rgb(255, 255, 255)">
                </i>
                <font color="red" style="
                text-decoration: underline; 
                text-decoration-color: aqua">
                    PLAYERS
                </font>
            </font>
        </div>

    </nav>

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <section class="vh-110" style="background-color: #34495E;">
                    <div class="container py-5 h-10">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card shadow-2-strong card bg-black" style="border-radius: 1rem;">
                                    <div class="card-body p-5 text-center">

                                        <strong>
                                            <h3 class="mb-5" style="font-family:Russo One; color: #9bdaff;">Iniciar
                                                Sesión
                                            </h3>
                                        </strong>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="typeEmailX-2"
                                                class="form-control form-control-lg" />
                                            <strong></strong> <label class="form-label" for="typeEmailX-2"
                                                style="font-family:Russo One; color:#9bdaff;">Correo</label></strong>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="typePasswordX-2"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="typePasswordX-2"
                                                style="font-family:Russo One; color:#9bdaff;">Contraseña</label>
                                        </div>
                                        <div class="form-check d-flex justify-content-start mb-4">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="form1Example3" />
                                            <label class="form-check-label" for="form1Example3"
                                                style="font-family:Russo One; color: #9bdaff; padding-left: 2%;">
                                                Recuperar
                                                Contraseña
                                            </label>
                                        </div>
                                        <div class="iniciarSesion">
                                            <form>

                                                <a href="<?= BASE_URL ?>/Views/partials/MenuPrincipal.php">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    Iniciar Sesión
                                                </a>
                                            </form>
                                        </div>
                                        <hr class="my-4">
                                        <button class="btn btn-lg btn-block btn-primary"
                                            style="background-color: #dd4b39;font-family:Russo One;" type="submit"><i
                                                class="fab fa-google me-2"></i> Iniciar Sesión con Google </button>
                                        <br>
                                        <br>
                                        <button class="btn btn-lg btn-block btn-primary"
                                            style="background-color: #17c27a;font-family:Russo One;" type="submit">
                                            Crear
                                            Usuario
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

        </div>
        <?php
        include_once("Views/main/footer.php");
        ?>
    </div>