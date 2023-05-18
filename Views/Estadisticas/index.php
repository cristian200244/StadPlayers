<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/EstadisticasModel.php';

$data = new EstadisticasModel();
$registros = $data->getAll();

?>
<div class="imgIngreEstad">
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
                                        <?php
                                        if ($registros) {
                                            foreach ($registros as $registro) { ?>
                                                <div class="col-md-6">

                                                    <div class="col m-4">
                                                        <input class="text-center" type="number" id="estadistica-<?= $registro->getId() ?>" name="estadistica-<?= $registro->getId() ?>" value="<?= $registro->valor ?>" min="0" disabled />
                                                    </div>

                                                    <a class="btn btn-sm btn-danger" onclick="operacion(<?= $registro->getId() ?> ,'restar')">-</a>


                                                    <label for="" class="form-label"><?= $registro->nombre ?></label>


                                                    <a class="btn btn-sm btn-success" onclick="operacion(<?= $registro->getId() ?>,'sumar')">+</a>

                                                </div>

                                        <?php }
                                        }
                                        ?>

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
<script>
    function operacion(id, tipo_operacion) {
        // console.log("holi")
        let elemento = document.getElementById(`estadistica-${id}`);
        let valor = tipo_operacion == "restar" ? parseInt(elemento.value) - 1 : parseInt(elemento.value) + 1;


        if (valor >= 0) {
            update(id, elemento, valor)
        } else {
            alert("La estadística no puede ser negativa")
        }
    }

    function update(id, elemento, valor) {
        console.log(id, elemento.value, valor)
        axios.post(`../../Controllers/EstadisticasController.php?c=2&id=${id}&valor=${valor}`)
            .then(function(response) {
                elemento.value = response.data.valor
            })
            .catch(function(error) {
                console.error(error);
            });
    }
</script>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>