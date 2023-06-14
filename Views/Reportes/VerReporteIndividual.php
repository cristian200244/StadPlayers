<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

$data = new ReportesController();
$datosReporte = $_REQUEST;

// var_dump($datosReporte);
// die();
// foreach ($datosReporte as $k => $v) {
//     print_r($k . "=>" . $v);
//     echo "<hr>";
// }


// die();

$encabezado = [

    "Fecha_Inicial" => $_REQUEST["fechaInicial"],
    "Fecha_Final" => $_REQUEST["fechaFinal"]
];

$DatosJugador = [
    "Nombre" => $_REQUEST["nombre_completo"],
    "Apodo" => $_REQUEST["apodo"],
    "Equipo" => $_REQUEST["equipo"],
    "Liga" => $_REQUEST["liga"],
    "Posicion" => $_REQUEST["posicion"],
    "Total_Minutos" => $_REQUEST["totalMinutosJugados"],
    "Partidos_Jugados" => $_REQUEST["totalPartidosJugados"],
    "promedio" => $_REQUEST["promedio"],
    "id_posicion" => $_REQUEST["id_posicion"],
    // "Rendimiento" =>   =>     $_REQUEST["promedio"],
];

?>

<div class="imgReporteIndividual">
    <main>
        <div class="container" style="margin-top: 15%;">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 bg-black rounded-lg mt-5">


                    <div class="card d-flex   text-center py-3 px-3" style="background-color:#34495E">
                        <div class="card-header bg-danger">
                            <div class="row ">
                                <div class="col-md-8">
                                    <h3 class="text-start text-light my-4 fs-4 ms-5">Reporte del Jugador</h3>
                                </div>
                                <?php

                                # code...

                                foreach ($encabezado as $key => $value) { ?>
                                    <div class="col-md-2 text-light pt-2  ">
                                        <strong>
                                            <h6><label for="#">
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

                        <div class="row mb-3 ms-5">
                            <?php
                            foreach ($DatosJugador as $key => $value) {

                                if ($key != 'id_posicion') { ?>

                                    <div class="card col-3 col-sm-3 bg-secondary ms-4 me-3  mt-3 pt-2 pb-2 text-white  border-success">
                                        <strong>
                                            <h5><label>
                                                    <?= str_replace("_", " ", $key) ?>
                                                </label>
                                            </h5>
                                        </strong>
                                        <div class=" card-floating bg-white mb-3 mb-md-0 text-black  mt-2 pt-2 pb-2">
                                            <span>
                                                <?= $value ?>
                                            </span>
                                        </div>

                                    </div>
                                <?php } ?>
                            <?php } ?>
                        </div>



                        <div class="row mb-3">
                            <div class="col-lg-6" style="display:none;" id="OptEstadisticas">
                                <input type="hidden"id="id_posicion" name="id_posicion" value=" <?= $DatosJugador["id_posicion"] ?>">
                                <div class="card shadow-lg bg-info  border-warning rounded-lg mt-5 p-4" id="EstadisticasPre">
                                    <div class="row mb-3">
                                        <div class="card-header bg-white fs-5">
                                            <div class="row mb-3">
                                                <div class="col-9 mt-3">
                                                    <span id="TituloEstadJugador"></span>
                                                </div>
                                                <div class="col-3 bg-info mt-3 border-3">
                                                    Total
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="controlEstad" value="2">
                                    <?php
                                    foreach ($datosReporte as $key => $value) {
                                        if ("pre_" == substr($key, 0, 4)) {
                                    ?>
                                            <div class="col-12 card bg-dark text-light">
                                                <ul class="list-group list-group-flush bg-info">
                                                    <div class="row">
                                                        <div class="col-9 bg-white text-dark p-2">

                                                            <strong>
                                                                <h5><label for="nombreEstadistica">
                                                                        <?= str_replace("_", " ", str_replace("pre_", " ", $key)) ?>
                                                                    </label>
                                                                </h5>
                                                            </strong>
                                                        </div>
                                                        <div class="col-3 bg-secondary ">
                                                            <div class="card bg-dark text-light  m-1 pt-2 p-1">
                                                                <span>
                                                                    <?= $value ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <input type="hidden" id="controlPre" value="2">
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="card shadow-lg bg-info border-warning  rounded-lg mt-5 p-4" id="EstadArquero">
                                    <div class="row mb-3">
                                        <div class="card-header bg-white fs-5">
                                            <div class="row mb-3">
                                                <div class="col-9 mt-3">
                                                    <span id="TituloEstadArquero"></span>
                                                </div>
                                                <div class="col-3 bg-info mt-3 border-3">
                                                    Total
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                    foreach ($datosReporte as $key => $value) {
                                        if ("por_" == substr($key, 0, 4)) {
                                    ?>
                                            <div class="col-12 card bg-dark text-light">
                                                <ul class="list-group list-group-flush bg-info">
                                                    <div class="row">
                                                        <div class="col-9 bg-white text-dark p-2">

                                                            <strong>
                                                                <h5><label for="EstadisticasArquero">
                                                                        <?= str_replace("_", " ", str_replace("por_", " ", $key)) ?>
                                                                    </label>
                                                                </h5>
                                                            </strong>
                                                        </div>
                                                        <div class="col-3 bg-secondary ">
                                                            <div class="card bg-dark text-light  m-1 pt-2 p-1">
                                                                <span>
                                                                    <?= $value ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>


                            <div class="col-lg-5 ms-3" style="display:none;" id="OptNuevasEstadisticas">

                                <div class="row ms-3">
                                    <div class="card shadow-lg bg-info me-3 border-warning rounded-lg mt-5  p-2">
                                        <div class="card shadow-lg bg-primary border-0 rounded-lg mt-0 p-3 text-light ">
                                            <div class="row">
                                                <div class="col-9">
                                                    Nuevas Estadìsticas
                                                </div>
                                                <div class="col-3 bg-warning text-dark ">
                                                    Total
                                                </div>
                                            </div>
                                        </div>
                                        <?php

                                        foreach ($datosReporte as $key => $value) {
                                            if ("nueva_" == substr($key, 0, 6)) {

                                        ?>
                                                <div class="col-12 card bg-dark text-light mt-2">
                                                    <ul class="list-group list-group-flush bg-info">
                                                        <div class="row">
                                                            <div class="col-9 bg-white text-dark p-2">

                                                                <strong>
                                                                    <h5><label for="nombreEstadistica">
                                                                            <?= str_replace("_", " ", str_replace("nueva_", " ", $key)) ?>
                                                                        </label>
                                                                    </h5>

                                                                </strong>
                                                            </div>
                                                            <div class="col-3 bg-secondary ">
                                                                <div class="card bg-dark text-light  m-1 pt-2 p-1">
                                                                    <span>
                                                                        <?= $value ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>

                                                <input type="hidden" id="control" value="1">
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="row mt-5 ms-3">
                                    <div class="col-lg-12 mt-lg-5">
                                        <div class="card mb-4">
                                            <div class="card-header bg-danger text-light">
                                                <i class="fas fa-chart-bar me-1"></i>
                                                Grafica del Repote
                                            </div>
                                            <div class="card-body bg-white"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
                                            <div class="card-footer bg-danger small text-muted">
                                                Generada
                                                fecha del reporte
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary">Guardar</button>
<div class="row mt-5 mt-5 ms-3">

    <div class="card-header bg-dark text-light mt-3">
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




    </main>
</div>
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>






