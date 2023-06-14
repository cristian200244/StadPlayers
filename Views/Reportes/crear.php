<?php
// session_start();
// if (($_SESSION['id'] == null) || ($_SESSION['id'] == '')) {
//     header("Location:../../index.php");
// }

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");


$reportes = new ReportesModel();
$jugadores = $reportes->getPlayers();
?>

<div class="imgGenReport">

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg   justify-content-center" style="margin-top: 30%;">
                    <div class="card-header bg-black text-info">
                        <h3 class="text-center font-weight-light my-4">Generar Reporte</h3>
                    </div>
                    <div class="card-body text-black" style="background-color:#CFDFE0  ;">
                        <div class="card d-flex justify-content-around  py-3 px-3 " style="background-color:#FF785D ">
                            <form action="../../Controllers/GenerarReportesController.php" method="POST">
                                <input type="hidden" name="c" value="1">
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
                                            <input class="form-control" class="form-control" type="date"
                                                name="fechaFinal" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-5">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <h3>Nombre del Jugador</h3>
                                        </div>
                                    </div>

                                    <div class="col-md-5 ms-4 ">
                                        <select name="id_jugador" id="id_jugador" class="btn btn-sm btn-dark p-2 ms-4 ">
                                            <?php foreach ($jugadores as $jugador) :; ?>
                                            <option value="<?= $jugador->getId() ?>">
                                                <?= $jugador->getNombreCompleto() ?></option>";
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block ">Generar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>