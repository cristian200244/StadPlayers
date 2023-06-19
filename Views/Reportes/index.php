<?php
// session_start();
// if (!isset($_SESSION['id'])) {

//     header("Location:../../index.php");
// }

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
include_once __DIR__ . "../../../Controllers/GenerarReportesController.php";


include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

$reportes = new ReportesModel();
$registros = $reportes->getAll();
// foreach ($registros as $k => $v) {
//     print_r($v);
//     echo "<hr>";
// }

?>

<div class="imgReportesIndex">
    <main>
        <div class="card mb-4 p-3 ms-5 me-5" style=" margin-top:15%; background-color: #355878;">
            <div class="card-header bg-black text-info text-lg-center mt-3 p-4 ">
                <i class="fas fa-table me-1"></i>
                Historial De Reportes Del Usuario
            </div>
            <div class="card-body text-black" style="background-color:#CDDDEC;">

                <table id="datatablesSimple" class="text-white " style="background-color:#145370;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fecha Inicial</th>
                            <th scope="col">Fecha Final</th>
                            <th scope="col">Jugador</th>
                            <th scope="col" colspan="3 ">Opciones</th>
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
                                <form action="../../Controllers/GenerarReportesController.php" method="post">


                                    <input type="hidden" name="c" value="3">
                                    <button type="  submit" name="id" value="<?= $registro->id ?>" id="id"
                                        onclick="CargarDatosGraficos(<?= $registro->id ?>)"
                                        class="btn btn-warning btn-large">Ver
                                        Reporte</button>

                                    <a type="submit" class="btn btn-danger" id="id_reporte"
                                        onclick="EliminarReporte(<?= $registro->id ?>)">Eliminar</a>

                                </form>
                            </td>
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
                <a type="button" class="btn btn-primary btn-lg btn-block"
                    href="<?= BASE_URL ?>/Views/Reportes/crear.php">Generar Reporte</a>
            </div>

        </div>
    </main>
</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>