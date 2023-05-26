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
                                            <h3 class="text-center text-light my-4 fs-4">Reporte</h3>
                                        </div>
                                    </div>
                                    <div class="card d-flex justify-content-around py-3 px-3">

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="card bg- text-white mb-4">
                                                    <div class="card-body">Success Card</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card bg- text-white mb-4">
                                                    <div class="card-body">Success Card</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <!-- PRIMER CAMPO PARA LLLENAR ESTADISTICAS LADO IZQUIERDO -->
                                                    <div class="col m-4">
                                                        <input class="text-center" type="number" name="val-estadistica-id-10" id="val-estadistica-id-1" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-3" id="estadistica-resta-id-10">-</button>
                                                    <span class="fs-3 fw-bold">Goles De Chilena</span>
                                                    <button class="btn btn-success m-3" id="estadistica-suma-id-10">+</button>

                                                    <div class="col m-4">
                                                        <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                    <span class="fs-3 fw-bold">Pases Errados</span>
                                                    <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                                    <div class="col m-4">
                                                        <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                    <span class="fs-3 fw-bold">Goles De Cabeza del bichoo</span>
                                                    <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>


                                                </div>
                                                <!-- linea que divide las estadisticas -->
                                                <div class="vr"></div>

                                                <div class="col-md-4">
                                                    <div class="form-floating">

                                                        <!-- SEGUNDO CAMPO PARA ENTRADA DE ESTADISTICAS LADO DERECHO -->
                                                        <div class="col m-4">
                                                            <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                        </div>
                                                        <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                        <span class="fs-3 fw-bold">Asistencias</span>
                                                        <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                                        <div class="col m-4">
                                                            <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                        </div>
                                                        <button class="btn btn-danger m-2" id="estadistica-resta-id">-</button>
                                                        <span class="fs-3 fw-bold">Rojas</span>
                                                        <button class="btn btn-success m-2" id="estadistica-suma-id">+</button>

                                                        <div class="col m-4">
                                                            <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                        </div>
                                                        <button class="btn btn-danger m-2" id="estadistica-resta-id">-</button>
                                                        <span class="fs-3 fw-bold">Amarillas</span>
                                                        <button class="btn btn-success m-2" id="estadistica-suma-id">+</button>


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



