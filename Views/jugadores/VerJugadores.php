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
                                    <h3 class="text-center text-light my-4 fs-4">Aqui va el nombre del jugador</h3>
                                </div>

                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <h2>Jugadores Creados</h2>
                                                <th scope="col">#</th>
                                                <th scope="col">Nombre Completo</th>
                                                <th scope="col" colspan="3">Opcion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($registros) {
                                                foreach ($registros as $row) {

                                            ?>

                                                    <tr>

                                                        <td><?= $row->id ?></td>
                                                        <td><?= $row->nombre_completo ?></td>

                                                        <!-- <th scope="col" >Opciones</th> -->
                                                        <td>
                                                            <a class="btn btn-sm btn-outline-warning" href="show.php?id=<? $row->getId()?>">Ver Jugador</a>
                                                       
                                                        
                                                            <a class="btn btn-sm btn-outline-warning" href="../../Controllers/JugadorController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                                        
                                                    
                                                            <a class="btn btn-sm btn-outline-danger " href="../../Controllers/JugadorController.php?c=4&id=<?= $row->getId() ?>">Eliminar</a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <tr class=" text-center">
                                                    <td colspan="6">Sin datos</td>
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
                </div>
            </div>
        </div>
    </div>
</main>



<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>