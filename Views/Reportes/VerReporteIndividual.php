<?php
// session_start();
// if (!isset($_SESSION['id'])) {

//     header("Location:../../index.php");
// }

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

$data = new ReportesController();
$datosReporte = $_REQUEST;

// var_dump($datosReporte["id"]);
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


<div class="imgVerReporteIndividual">
    <div class="container" style="margin-top: 15%; width:100%">
        <div class="col-lg-12">
            <div class="card shadow-lg col-lg-12 border-0 bg-black rounded-lg mt-5">
                <div class="card d-flex text-center py-3 px-3" style="background-color:#D6EAF8  ">
                    <div class="card-header" style="background-color:#4A235A">
                        <div class=" row ">
                            <div class=" col-md-8">
                                <h3 class="text-start text-white my-4 fs-4 ms-5">Reporte del Jugador</h3>
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

                    <div class=" container-fluid px-4 row mb-3 ">
                        <?php
                        foreach ($DatosJugador as $key => $value) {

                            if ($key != 'id_posicion') { ?>

                                <div class="card shadow-lg col-sm-3  ms-4 me-3  mt-3 pt-2 pb-2 text-white  border-success" style="background-color:#34495E  ">
                                    <strong>
                                        <h5><label>
                                                <?= str_replace("_", " ", $key) ?>
                                            </label>
                                        </h5>
                                    </strong>
                                    <div class=" card-floating  mb-3 mb-md-0 text-black  mt-2 pt-2 pb-2" style="background-color:#F4ECF7">
                                        <span>
                                            <?= $value ?>
                                        </span>
                                    </div>

                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-5" style="display:none;" id="OptEstadisticas">
                            <input type="hidden" id="id_posicion" name="id_posicion" value=" <?= $DatosJugador["id_posicion"] ?>">
                            <input type="hidden" id="id_reporte" name="id_reporte" value=" <?= $datosReporte["id"] ?>">
                            <div class=" card shadow-lg bg-info border-warning  mt-5 p-4" id="EstadisticasPre">
                                <div class="row mb-3">
                                    <div class="card-header bg-white fs-5">
                                        <div class="row mb-3">
                                            <div class="col-8 mt-3">
                                                <span id="TituloEstadJugador"></span>
                                            </div>
                                            <div class="card shadow-lg bg-dark mt-4 ms-4 p-2 text-white col-3 bg-info  border-3">
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
                                    <div class="card shadow-lg bg-primary border-0 rounded-lg bg-white fs-5">
                                        <div class="row mb-3">
                                            <div class="col-8 mt-3">
                                                <span id="TituloEstadArquero"></span>
                                            </div>
                                            <div class="card shadow-lg bg-dark mt-4 ms-4 p-2 text-white col-3 bg-info  border-3">
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


                        <div class=" container-fluid px-4 col-lg-7">
                            <div class="row ms-3" style="display:none;" id="OptNuevasEstadisticas">
                                <div class="card shadow-lg bg-info border-warning border-0 rounded-lg mt-5 p-4">
                                    <div class="card shadow-lg bg-primary text-white border-0 rounded-lg ">
                                        <div class="row">
                                            <div class="col-8 mt-3">
                                                Nuevas Estadìsticas
                                            </div>
                                            <div class="card col-3 shadow-lg bg-warning  mt-2 mb-2 ms-2 p-2 text-black bg-info border-3">
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
                                                        <div class="col-3 bg-secondary">
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

                            <div class="col-lg-12 mt-lg-4">

                                <div class="card mb-4 bg-white">
                                    <div class="card-header bg-secondary text-white m-2 p-3 fs-5">
                                        <i class="fas fa-chart-bar me-1 fs-5"></i>
                                        Gráfica de Rendimiento
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" width="400vw" height="400vh"></canvas>
                                    </div>
                                    <div class="card-footer small text-muted bg-secondary m-2 p-2">Generada La Fecha Del
                                        Reporte
                                    </div>
                                </div>

                            </div>
                            <a type="button " class="btn btn-info mt-5 " href="<?= BASE_URL ?>/Views/Reportes/index.php">Volver</a>
                            <div class="row mt-5 mt-5 ms-3">
                                <div class="card-header bg-dark text-light  me-1 mt-3">
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
<script>
    window.addEventListener('DOMContentLoaded', event => {
        (async () => {
            const id = document.getElementById("id_reporte").value;

            console.log(id)
            // Llamar a nuestra API. Puedes usar cualquier librería para la llamada, yo uso fetch, que viene nativamente en JS
            const respuestaRaw = await fetch("../../Controllers/GenerarReportesController.php?c=5&id=" + id);

            // Decodificar como JSON
            const respuesta = await respuestaRaw.json();

            // console.log(respuesta.labels);
            // console.log(respuesta.data);
            // return;
            // Ahora ya tenemos las etiquetas y datos dentro de "respuesta"
            // Obtener una referencia al elemento canvas del DOM
            const $grafica = document.querySelector("#myChart");
            const labels = respuesta.labels; // <- Aquí estamos pasando el valor traído usando AJAX
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datos = {
                label: "Estadísticas",
                // Pasar los datos igualmente desde PHP
                data: respuesta.data, // <- Aquí estamos pasando el valor traído usando AJAX
                backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 1, // Ancho del borde
            };
            new Chart($grafica, {
                type: 'PolarArea', // Tipo de gráfica
                data: {
                    labels: labels,
                    datasets: [
                        datos,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        })();

        // Función Show & hidde

        //código a ejecutar cuando existe la certeza de que el DOM está listo para recibir acciones

        let predeterminadas = document.getElementById('EstadisticasPre');
        let arquero = document.getElementById('EstadArquero')
        let id_posicion = document.getElementById('id_posicion').value;

        if (!document.getElementById("control")) {} else {
            if (document.getElementById("control").value == 1) {
                OptNuevasEstadisticas.style.display = "block";
            }
        }

        if (!document.getElementById("controlPre")) {} else {
            if (document.getElementById("controlPre").value == 2) {
                OptEstadisticas.style.display = "block";
            } else {


            }
        }


        if (id_posicion != 1) {
            document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
            predeterminadas.style.display = "block";
            arquero.style.display = "none";

            var estadPre = document.getElementById("EstadisticasPre").value;
            if (estadPre == 0) {
                predeterminadas.style.display = "none";
            }
        } else { //Cuando es portero
            document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
            document.getElementById("TituloEstadArquero").textContent = "Estadisticas del Portero";
            predeterminadas.style.display = "block";
            arquero.style.display = "block";
        }

    });
</script>


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>