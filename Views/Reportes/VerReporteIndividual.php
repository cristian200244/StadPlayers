<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
// include_once(BASE_DIR . "../../Views/partials/header.php");
// include_once(BASE_DIR . "../../Views/partials/aside.php");



// $reporteFinal=$controller->show();

?>




<div class="imgReporteIndividual">
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">

                        <div class="card-header bg-success">
                            <div class="row ">
                                <div class="col-md-8">
                                    <h3 class="text-start text-light my-4 fs-4 ms-5">Reporte del Jugador</h3>
                                </div>
                                <div class="col-md-2 text-light pt-2  ">
                                    <strong>
                                        <h6><label for="nombre_completo">Fecha Inicial</label></h6>
                                    </strong>

                                    <div class="card bg-white text-success text-center mt-2 pt-2 pb-2">
                                        10/5/2</div>

                                </div>
                                <div class="col-md-2 text-light pt-2">
                                    <strong>
                                        <h6><label for="nombre_completo">Fecha Final</label></h6>
                                    </strong>

                                    <div class="card bg-white text-success text-center mt-2 pt-2 pb-2 mb-2">
                                        10/5/2</div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-flex text-bg-light text-center py-3 px-3">

                            <div class="row mb-3">
                                <div class="col-md-3 mt-3 text-success s-md">
                                    <strong>
                                        <h5><label for="nombre_completo">Nombre</label></h5>
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
                                <div class="col-md-3 text-success">
                                    <strong>
                                        <h5><label for="nombre_completo">
                                                Rendimiento</label></h5>
                                    </strong>
                                    <div class="card ms-5 me-5 bg-info text-black  mt-2 pt-2 pb-2">
                                        78 %</div>

                                </div>
                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-6">
                                        <div class="card shadow-lg bg-info border-0 rounded-lg mt-5 p-3 ">
                                            <div class="row">
                                                <div class="col-9">
                                                    Estadísticas
                                                </div>
                                                <div class="col-3 bg-warning ">
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
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        33 </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Pases errados</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        15</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Remates al arco</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        19</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Asistencias de Gol</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        11</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Rechazos bien dirigidos
                                                    </li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        25</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Rechazos mal dirigidos
                                                    </li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        8</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Pérdidas de balón</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        9 </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">pérdidas de balón
                                                        perjudiciales
                                                    </li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        3</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Goles anotados</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        10</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item"> Amarillas recibidas
                                                    </li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        7</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item"> Rojas recibidas</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        2</div>
                                                </div>
                                            </div>


                                        </ul>
                                        <div class="card shadow-lg bg-info border-0 rounded-lg mt-3 p-3 ">
                                            <div class="row">
                                                <div class="col-9">
                                                    Estadísticas de Portero
                                                </div>
                                                <div class="col-3 bg-warning ">
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
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        4</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Penales atajados</li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        3</div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-9">
                                                    <li class="list-group-item">Mano a mano exitoso.
                                                    </li>
                                                </div>
                                                <div class="col-3">
                                                    <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                        5</div>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="row ms-3">
                                            <div class="card shadow-lg bg-primary border-0 rounded-lg mt-5 p-3 text-light ">
                                                <div class="row">
                                                    <div class="col-9">
                                                        Nuevas Estadìsticas
                                                    </div>
                                                    <div class="col-3 bg-warning text-dark ">
                                                        Total
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-group list-group-flush bg-primary">

                                                <div class="row">
                                                    <div class="col-9">
                                                        <li class="list-group-item">nueva estadìstica</li>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="card bg-dark text-light pt-2 pb-2  me-2 " style="margin-left: -24%;">
                                                            0</div>
                                                    </div>
                                                </div>

                                            </ul>
                                        </div>





                                        <div class="row mt-5 ms-3">
                                            <div class="col-lg-12 mt-lg-5">
                                                <div class="card mb-4">
                                                    <div class="card-header bg-success text-light">
                                                        <i class="fas fa-chart-bar me-1"></i>
                                                        Grafica del Repote
                                                    </div>
                                                    <div class="card-body bg-white"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                                    <div class="card-footer bg-success small text-muted">Generada
                                                        fecha del reporte
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                        <div class="row mt-5 mt-5 ms-3">

                                            <div class="card-header bg-dark text-light mt-5">
                                                <i class="fa-solid fa-print fa-fade"></i>
                                                Imprimir en
                                            </div>

                                            <div class="col-6 mt-3">
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    PDF</button>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <button type="button" class="btn btn-primary btn-xl">
                                                    Word</button>
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