<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>




<div class="imgIngreEstad">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success text-light">
                                    <h3 class="text-center font-weight-light my-4">Generar Reporte</h3>
                                </div>
                                <div class="card-body text-black" style="background-color:#CFDFE0  ;">
                                    <div class="row mb-3">
                                        <div class=" form-floating col-md-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>N° partido jugado en liga</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class=" form-floating col-md-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Nombre Jugador</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class=" form-floating col-md-3 ">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Equipo rival</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-floating">
                                                <input class="form-control" type="date" name="fechaInicial" />
                                            </div>
                                        </div>

                                    </div>


                                    <div class="card-body">

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <!-- PRIMER CAMPO PAR LLLENAR ESTADISTICAS LADO IZQUIERDO -->
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
        </div>
    </div>
</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>

<script>
    let val = document.getElementById("val-estadistica-id-10");

    document.getElementById('estadistica-suma-id-1').onclick = function() {
        val.value++
        console.log(val.value)
    }

    document.getElementById('estadistica-resta-id-1').onclick = function() {
        val.value--
        console.log(val.value)
    }
</script>