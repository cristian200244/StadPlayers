<?php
include_once(__DIR__ . "../../../config/rutas.php");
// include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>


<div class="imgReporteIndividual">
    <main>
        <div class="container text-center mt-5">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <div class="container py-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-success">
                                        <h3 class="text-center text-light my-4 fs-4">Reporte del Jugador</h3>
                                    </div>
                                </div>
                                <div class="card d-flex text-bg-light justify-content-around py-3 px-3">

                                    <div class="row mb-3">
                                        <div class="col-md-3 mt-3 text-success s-md">
                                            <strong>
                                                <h5><label for="nombre_completo">Jugador</label></h5>
                                            </strong>
                                            <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                Dorlan Pavón
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-3 text-success">
                                            <strong>
                                                <h5> <label for="nombre_completo">Equipo Actual</label></h5>
                                            </strong>
                                            <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                Atletico Nacional</div>

                                        </div>
                                        <div class="col-md-3 mt-3 text-success">
                                            <strong>
                                                <h5><label for="nombre_completo">Liga Actual</label></h5>
                                            </strong>
                                            <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                BetPlay</div>

                                        </div>
                                        <div class="col-md-3 mt-3 text-success">
                                            <strong>
                                                <h5><label for="nombre_completo">Posiciones</label></h5>
                                            </strong>
                                            <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                Extremo, delantero, media punta</div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-3 text-success">
                                            <strong>
                                                <h5><label for="nombre_completo">Apodo</label></h5>
                                            </strong>
                                            <div class="card  bg-dark text-light  mt-2 pt-2 pb-2">
                                                Memín</div>

                                        </div>
                                        <div class="col-md-3 text-success">
                                            <strong>
                                                <h5>
                                            </strong> <label for="nombre_completo">Minutos
                                                Jugados</label></h5></strong>
                                            <div class="card  ms-5 me-5 bg-dark text-light mt-2 pt-2 pb-2">
                                                456</div>

                                        </div>
                                        <div class="col-md-3 text-success">
                                            <strong>
                                                <h5><label for="nombre_completo">Partidos Jugados</label></h5>
                                            </strong>
                                            <div class="card   ms-5 me-5 bg-dark text-light  mt-2 pt-2 pb-2">
                                                25</div>

                                        </div>
                                        <div class="col-md-3 text-primary">
                                            <strong>
                                                <h5><label for="nombre_completo">
                                                        Rendimiento</label></h5>
                                            </strong>
                                            <div class="card ms-5 me-5 bg-danger text-black  mt-2 pt-2 pb-2">
                                                78 %</div>

                                        </div>
                                    </div>



                                    <div class="container text-center mt-5">
                                    <div class="row">

                                        <div class="card d-flex text-bg-light col-5 mt-5 ms-5">

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="card-header bg-info">
                                                            Estadísticas
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="card-header bg-warning pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                            Total
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush bg-info">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Pases acertados</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                               33 </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Pases errados</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                15</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Remates al arco</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                19</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Asistencias de Gol</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                11</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Rechazos bien dirigidos</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                25</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Rechazos mal dirigidos</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                8</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Pérdidas de balón</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                               9 </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">pérdidas de balón perjudiciales
                                                            </li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                3</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Goles anotados</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                10</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item"> Amarillas recibidas</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                7</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item"> Rojas recibidas</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                2</div>
                                                        </div>
                                                    </div>
                                                </ul>

                                                <div class="row">
                                                    <div class="col-9">
                                                        <div class="card-header bg-info">
                                                            Estadísticas De Portero
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="card-header bg-warning pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                            Total
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush bg-info">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Atajadas Heroicas</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                4</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">Penales atajados</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                3</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <li class="list-group-item">éxitos en mano a mano.</li>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                5</div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>

                                        </div>

                                       <div class=" d-flex text-bg-light col-1 mt-5">   <!--espacio entre estadisticas -->
                                        </div>

                                        <div class="col-5">
                                        <div class="row">

                                                <div class="card d-flex text-bg-light col-12 mt-5">
                                                    <div class="row">
                                                        <div class="col-9">
                                                            <div class="card-header bg-warning">
                                                                Estadísticas Creadas
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="card-header bg-info pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                Total
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="list-group list-group-flush bg-info">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <li class="list-group-item"> estadistica nueva</li>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="card bg-dark text-light pt-2 pb-2  me-0 " style="margin-left: -16%;">
                                                                    0</div>
                                                            </div>
                                                        </div>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</main>
</div>
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>