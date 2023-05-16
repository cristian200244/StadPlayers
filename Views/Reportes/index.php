<?php
include_once(__DIR__ . "../../../config/rutas.php");

// include_once 'Models/calculadoraModel.php';
// //Reporte
// $reportes = new ReportesModel();
// $jugadores = $reportes->getPlayers();
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>
//Instancia


<div class="imgGenReport">

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg   justify-content-center" style="margin-top: 30%;">
                    <div class="card-header bg-black text-info">
                        <h3 class="text-center font-weight-light my-4">Generar Reporte</h3>
                    </div>
                    <div class="card-body text-black" style="background-color:#CFDFE0  ;">
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
                                        <input class="form-control" class="form-control" type="date"
                                            name="fechaFinal" />
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
                                    <select name="jugadores" id="jugadores">
                                        <?php foreach ($jugadores as $jugador) :; ?>


                                        <option value="<?= $jugador->getId() ?>">
                                            <?= $jugador->getNombreCompleto()  ?></option>";
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Generar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>