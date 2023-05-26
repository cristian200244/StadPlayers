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

                                    <div class="card-body mt-5">
                                        <table class="table table-bordered  row">
                                            <tr class="table-success">
                                                <th class="col-4 table-success">Estadística</th>
                                                <th class="col-1">Total</th>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-primary">Pases acertados</td>
                                                <td class="col-2 table-primary">10</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-dark">Remates al arco</td>
                                                <td class="col-2 table-dark">3</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-primary">Asistencias de Gol</td>
                                                <td class="col-2 table-primary">10</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-dark">Rechazos bien dirigidos</td>
                                                <td class="col-2 table-dark">5</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-primary">Rechazos mal dirigidos</td>
                                                <td class="col-2 table-primary">10</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-dark">Pérdidas de balón</td>
                                                <td class="col-2 table-dark">5</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-primary"> pérdidas de balón perjudiciales</td>
                                                <td class="col-2 table-primary">10</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-dark">Goles anotados</td>
                                                <td class="col-2 table-dark">5</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-primary"> Amarillas recibidas</td>
                                                <td class="col-2 table-primary">10</td>
                                            </tr>
                                            <tr>
                                                <td class="col-3 table-dark">Rojas recibidas</td>
                                                <td class="col-2 table-dark">5</td>
                                            </tr>

                                        </table>


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
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>
</div>