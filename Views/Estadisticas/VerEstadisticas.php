<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/EstadisticasModel.php';

$data = new EstadisticasModel();
$registros = $data->verStad();

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                <table class="table table-dark table-striped text-info fs-5">
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
                        $pos = 1;
                        if ($registros) {
                            foreach ($registros as $row) {
                        ?>
                        <tr>
                            <td>
                                <?= $pos ?>
                            </td>
                            <td>
                                <?= $row->nombre_jugador ?>
                            </td>
                            <td>
                                <?= $row->fecha_del_partido ?>
                            </td>
                            <td>
                                <?= $row->nombre_tipo_partido ?>
                            </td>
                            <td>
                                <?= $row->num_partido ?>
                            </td>
                            <td>
                                <?= $row->equipo ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="../Estadisticas/ver.php?id=<?= $row->id ?>">Ver</a>

                                <a class="btn btn-danger" id="deleteJu"
                                    href="../../Controllers/EstadisticasController.php?c=4&id=<?= $row->id ?> "
                                    onclick="return alerta();">Eliminar</a>

                            </td>
                        </tr>
                        <?php
                                $pos++;
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




<script>
function alerta() {
    Swal.fire({
        title: "Estas seguro?",
        text: "Una vez eliminado, ¡no podrá recuperar este archivo!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                "Deleted!",
                "La estadistica ha sido eliminada.",
                "success"
            ).then(() => {
                window.location.href =
                    "../../Controllers/EstadisticasController.php?c=4&id=<?= $row->id ?>";
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
                "Cancelado",
                "Tu estadistica esta a salvo :)",
                "error"
            );
        }
    });

    return false;
}
</script>



<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>