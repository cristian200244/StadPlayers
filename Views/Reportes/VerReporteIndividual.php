<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

$data = new ReportesController();
$datosReporte = $_REQUEST;

$encabezado = [

    "Fecha_Inicial" =>
    $_REQUEST["fechaInicial"],
    "Fecha_Final" =>
    $_REQUEST["fechaFinal"]
];


$DatosJugador = [
    "Nombre" => $_REQUEST["nombre_completo"],
    "Apodo" => $_REQUEST["apodo"],
    "Equipo" => $_REQUEST["equipo"],
    "Liga" => $_REQUEST["liga"],
    "Posicion" => $_REQUEST["posicion"],
    "Total_Minutos" => $_REQUEST["Total_Minutos_jugados"],
    "Partidos_Jugados" => $_REQUEST["Total_Partidos_Jugados"]
    // "Rendimiento" =>   =>     $_REQUEST["promedio"],
];


// foreach ($datosReporte[0] as $key => $value) {
//     if ($value != 0) {
//         echo $key . " => " . $value . "<br>";
//     }
// }
// var_dump($datosReporte[0]);
// die();



// var_dump($DatosJugador);
// die();
// var_dump($predeterminadas);
// die();
// $NoPrede = [
//     "" => ""
// ];




?>

<!-- <span id="id" hidden>$encabezado['id_uuarsio']</span> -->

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


                                <?php
                                foreach ($encabezado as $key => $value) { ?>

                                    <div class="col-md-2 text-light pt-2  ">
                                        <strong>
                                            <h6><label for="nombre_completo">
                                                    <?= str_replace("_", " ", $key) ?>
                                                </label>
                                            </h6>
                                        </strong>
                                        <div class="card bg-white text-success text-center mt-2 pt-2 pb-2">
                                            <span>
                                                <?= $value ?>
                                            </span>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card d-flex text-bg-light text-center py-3 px-3">




                            <div class="row mb-3">
                                <?php
                                foreach ($DatosJugador as $key => $value) { ?>

                                    <div class="col-md-3 mt-3 text-success s-md">
                                        <strong>
                                            <h5><label>
                                                    <?= str_replace("_", " ", $key) ?>
                                                </label>
                                            </h5>
                                        </strong>
                                        <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                            <span>
                                                <?= $value ?>
                                            </span>
                                        </div>

                                    </div>

                                <?php } ?>

                            </div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-sm-6">
                                    <div class="row-sm-6">
                                        <div class="card shadow-lg bg-info border-0 rounded-lg mt-5 p-3 ">
                                            <div class="row">
                                                <div class="col-9">
                                                    Estadísticas
                                                </div>
                                                <div class="col-3 bg-warning ">
                                                    Total
                                                </div>
                                            </div>

                                            <ul class="list-group list-group-flush bg-info">

                                                <?php
                                                foreach ($datosReporte[0] as $key => $value) {
                                                    if ($value != 0 & "posicion" != "Arquero") {
                                                ?>

                                                        <div class="col-md-3 mt-3 text-success">
                                                            <div class="col-9">
                                                                <strong>
                                                                    <h5><label for="nombre_completo">
                                                                            <?= str_replace("_", " ", $key) ?>
                                                                        </label>
                                                                    </h5>
                                                                </strong>
                                                            </div>
                                                            <div class="col-3 bg-warning ">
                                                                <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                                    <span>
                                                                        <?= $value ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php


                                                    } else { ?>

                                            </ul>
                                        </div>
                                    </div>

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
                                        <div class="col-md-3 mt-3 text-success">
                                            <div class="col-9">
                                                <strong>
                                                    <h5><label for="nombre_completo">
                                                            <?= str_replace("_", " ", $key) ?>
                                                        </label>
                                                    </h5>
                                                </strong>
                                            </div>
                                            <div class="col-3 bg-warning ">
                                                <div class="card bg-dark text-light  mt-2 pt-2 pb-2">
                                                    <span>
                                                        <?= $value ?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                <?php } ?>
                            <?php } ?>

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
                                                <div class="card-footer bg-success small text-muted">
                                                    Generada
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
</div>
</div>

</main>
</div>
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>
</div>
</div>

</main>
</div>
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>