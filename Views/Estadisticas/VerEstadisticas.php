<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/EstadisticasModel.php';

$data = new EstadisticasModel();
$registros = $data->verStad();

?>

<div class="imgVer">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Estas son tus estadísticas</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row pt-5">
            <div class="col">
                <table class="table table-dark table-striped text-primary fs-5">
                    <thead>
                        <tr class="fs-3">
                            <th scope="col">#</th>
                            <th scope="col">Jugador</th>
                            <th scope="col">Fecha Partido</th>
                            <th scope="col">Tipo Partido</th>
                            <th scope="col">N° Partido</th>
                            <th scope="col">Equipo Rival</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($registros) {
                            foreach ($registros as $row) {
                        ?>
                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->nombre_jugador ?></td>
                                    <td><?= $row->fecha_del_partido ?></td>
                                    <td><?= $row->nombre_tipo_partido ?></td>
                                    <td><?= $row->num_partido ?></td>
                                    <td><?= $row->equipo ?></td>
                                    <td>
                                        <button class="btn btn-primary" type="button">Ver</button>
                                        <button class="btn btn-success" type="button">Editar</button>
                                        <button class="btn btn-danger" type="button">Eliminar</button>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No se encontraron registros</td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>