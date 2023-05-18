<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>

<div class="imgGenReport">
    <main>
        <div class="card mb-4 p-3 ms-5 me-5 " style="margin-top:15%">
            <div class="card-header bg-success text-light text-center mt-3 p-3 ms-3 me-3">
                <i class="fas fa-table me-1"></i>
                Historial De Reportes Del Jugador
            </div>
            <div class="card-body">

                <table id="datatablesSimple"  >
                    <thead>
                        <tr>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th scope=" col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>2002/08/12</td>
                            <td>2010/05/23</td>
                            <td>

                                <a href="personas/ver.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="personas/editar.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="personas/eliminar.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-danger" value="">Eliminar</a>
                        </tr>
                        <tr>
                            <td>2002/08/12</td>
                            <td>2010/05/23</td>
                            <td>

                                <a href="personas/ver.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-info">Ver</a>
                                <a href="personas/editar.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="personas/eliminar.php?id=<?php echo $persona['id']; ?>"
                                    class="btn btn-sm btn-outline-danger" value="">Eliminar</a>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </main>
</div>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>