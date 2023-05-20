<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";

include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

$reportes = new ReportesModel();
$registros = $reportes->getAll();
?>

<div class="imgGenReport">
    <main>
        <div class="card mb-4 p-3 ms-5 me-5 " style="margin-top:15%">
            <div class="card-header bg-success text-light text-center mt-3 p-3 ms-3 me-3">
                <i class="fas fa-table me-1"></i>
                Historial De Reportes Del Jugador
            </div>
            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha Inicial</th>
                            <th scope="col">Fecha Final</th>
                            <th scope="col">Jugador</th>
                            <th scope="col" colspan="3">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (count($registros) > 0) {
                            $pos = 1;
                            foreach ($registros as $registro) {
                        ?>
                                <tr>
                                    <td><?php echo $pos; ?></td>
                                    <td><?php echo $registro->fechaInicial ?></td>
                                    <td><?php echo $registro->fechaFinal ?></td>
                                    <td><?php echo $registro->nombre_completo ?></td>
                                    <td>

                                        <a href="personas/ver.php?id=<?php echo $registro->id; ?>" class="btn btn-sm btn-outline-info">Ver</a>
                                        <a href="personas/editar.php?id=<?php echo $registro->id; ?>" class="btn btn-sm btn-outline-warning">Editar</a>
                                        <a href="personas/eliminar.php?id=<?php echo $registro->id; ?>" class="btn btn-sm btn-outline-danger" value="">Eliminar</a>
                                </tr>
                            <?php $pos++;
                            }
                        } else { ?>
                            <tr>
                                <td colspan=" 9">No hay datos
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?> </div>
</main>
</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>