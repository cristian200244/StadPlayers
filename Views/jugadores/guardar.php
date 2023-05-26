<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
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

                                    <hr>

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


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>