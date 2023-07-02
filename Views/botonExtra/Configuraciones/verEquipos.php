<?php
include_once(__DIR__ . "../../../config/rutas.php");

include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once __DIR__ . "../../../Models/EstadisticasModel.php";

$data = new EstadisticasModel();
$equipos = $data->equipos();


?>
<div class="imgCon">
    <div class="container mt-5 pt-5">
        <div class="row pt-5">
            <div class="col d-flex justify-content-center" >
                <div class="table-responsive " style="width: 50%;">
                    <table class="table table-dark table-striped text-info fs-5" >
                        <!-- Cambio en la propiedad width -->
                        <thead class="fs-3">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" style="width: 45%">Equipos</th>
                                <th scope="col" style="width: 25%">Opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pos = 1;
                            if ($equipos) {
                                foreach ($equipos as $row) {
                            ?>
                                    <tr>
                                        <td><?= $pos ?></td>
                                        <td><?= $row->equipo ?></td>
                                        <td>
                                            <a class="btn btn-danger" id="deleteJu" href="../../Controllers/EstadisticasController.php?c=4" data-id="<?= $row->id ?>" onclick="obtenerID(event); return false;">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php
                                    $pos++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="3">No se encontraron registros</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div class="col mt-4">
                        <a href="index.php" class="btn btn-warning btn-block" id="btn_equipos">regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>