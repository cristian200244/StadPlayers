<?php

include_once(__DIR__ . "../../../config/rutas.php");
?>
<?php
include_once(BASE_DIR . "../../Views/main/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>

<div class="imgGenReport">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5 ">
                                <div class="card-header bg-black text-info">
                                    <h3 class="text-center font-weight-light my-4">Generar Reporte</h3>
                                </div>
                                <div class="card-body text-black" style="background-color:#91FFE6   ;">
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <h3>Fecha Inicial</h3>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">

                                                    <input class="form-control" type="date" name="fechaInicial" />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <h3>Fecha Final</h3>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" class="form-control" type="date" name="fechaFinal" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <h3>Nombre del Jugador</h3>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="dropdown">
                                                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Elegir jugador
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Generar</a></div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<?php
include_once(BASE_DIR . "../../Views/main/footer.php");
?>