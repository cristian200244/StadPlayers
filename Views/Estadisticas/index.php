<?php
include_once(__DIR__ . "../../../config/rutas.php");

include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once __DIR__ . "../../../Models/EstadisticasModel.php";
//traer jugadores de la base de datos

$juga = new EstadisticasModel();
$jugadores = $juga->getPlayers();


//traer los equipos de la base de datos

$data = new EstadisticasModel();
$equipos = $data->Equipos();

// trae los nombre de el tipo de partido
$data = new EstadisticasModel();
$tipoPartido = $data->TipoPartido();

//trae los nuemeros para el N° partido
$datos = new EstadisticasModel();
$nPartido = $datos->NumeroPartido();


?>
<div class="imgIngreEstad">
    <main>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>¡Bienvenido! Ahora Podrá ingresar sus estadísticas</h1>
                </div>
            </div>

            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <div class="container py-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-success">
                                        <h3 class="text-center text-light my-4 fs-4">Ingresar Estadistica</h3>
                                    </div>

                                    <div class="card d-flex justify-content-around py-3 px-3">
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

                                    <div class="col-md-6 mt-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <h4>Equipo rival</h4>
                                        </div>
                                    </div>
                                    <div class=" form-floating col-md-6 mt-3">
                                        <select class="form-select" aria-label="Default select example" name="equipo_rival" id="equipo_rival">
                                            <option value="" disabled selected>Selecciona una opción</option>
                                            <?php foreach ($equipos as $equipo) :; ?>


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


                                    <div class="col-md-6 mt-4">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <h4>Fecha Partido</h4>
                                        </div>
                                    </div>
                                    <div class=" form-floating col-md-6 mt-3">
                                        <div class="form-floating">
                                            <input class="form-control" type="date" name="fecha_del_partido" id="fecha_del_partido" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
    </main>
</div>
<script>
    let val = document.getElementById("val-estadistica-id-10");

    document.getElementById('estadistica-suma-id-1').onclick = function() {
        val.value++
        console.log(val.value)
    }

    function validateForm() {
        var selectElements = document.querySelectorAll('select');
        var fechaPartido = document.getElementById('fecha_del_partido').value;

        if (fechaPartido === "") {
            return mostrarAlerta();
        }

        for (var select of selectElements) {
            if (select.value === "" || select.value === "default") {
                return mostrarAlerta();
            }
        }

        return true;
    }

    document.getElementById("submitBtn").addEventListener("click", function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Evitar la redirección
        }
    });

    var selectElements = document.querySelectorAll('select');
    console.log(selectElements);

    selectElements.forEach((select) => {
        select.addEventListener('change', () => {
            let valorOption = select.value;
            console.log(valorOption);

            var optionSelect = select.options[select.selectedIndex];
            console.log("Opción:", optionSelect.text);
            console.log("Valor:", optionSelect.value);
        });
    });
</script>




<?php
include_once(BASE_DIR . "../../Views/main/footer.php");
?>