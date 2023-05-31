<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");



include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
$registros = $data->getAll();
?>
<main>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Ahora Podrá ingresar sus Jugadores</h1>
            </div>
        </div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success">
                                    <h3 class="text-center text-light my-4 fs-4">Ver Jugador</h3>
                                </div>

                                <div class="card-body">
                                    <?php
                                    if ($registros) {
                                        foreach ($registros as $row) { ?>
                                            <div class="row mb-3">
                                                <div class="row">


                                                    <div class="form-floating col-md-6 mt-3">

                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text" value="<?= $row->nombre_completo ?>" readonly>
                                                        </div>

                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->apodo ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->fecha_nacimiento ?>" readonly />
                                                        </div>
                                                    </div>


                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->caracteristicas ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->id_equipo ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->id_pais ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->id_contiente ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input type="text"  value="<?= $row->id_posicion ?>" readonly />
                                                        </div>
                                                    </div>

                                                    <div class="form-floating col-md-6 mt-3">
                                                        <div class="form-floating mb-8 mb-md-">
                                                            <input type="text"  value="<?= $row->id_perfil ?>" readonly />
                                                        </div>
                                                    </div>



                                                    <a class="btn btn-sm btn-outline-warning" href="../Controllers/JugadorController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>


                                                    <a class="btn btn-sm btn-outline-danger " href="../../Controllers/JugadorController.php?c=4&id=<?= $row->getId() ?>">Eliminar</a>
                                                </div>
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
</main>




<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>