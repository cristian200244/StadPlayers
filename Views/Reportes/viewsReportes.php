<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>
<main>

    <div class="imgIngreEstad">
        <main>

            <div class="container-fluid px-4">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card mb-4">
                        <div class="card-header text-center">
                            <i class="fas fa-table me-1"></i>
                            Historial Reportes del Jugador
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-columns table-bordered border-success">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col">#</th>
                                        <th scope="col">Fecha Inicia</th>
                                        <th scope="col">Fecha Final</th>

                                        <th scope="col" colspan="2">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>

                                        <a class="btn btn-sm btn-outline-primary btn-lg btn-block" id="update">
                                            Ver</a>
                                        <a class="btn btn-sm btn-outline-warning">Editar</a>
                                        <a class="btn btn-sm btn-outline-danger btn-lg btn-block" id="update">Eliminar</a>



                                    </td>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php
    include_once(BASE_DIR . "../../Views/partials/footer.php");
    ?>