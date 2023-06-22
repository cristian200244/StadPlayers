<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");


include_once '../../Models/conexionModel.php';
include_once '../../Models/UsuarioModel.php';

// $id = $_GET['id'];

$datos = new UsuarioModel();
$registros = $datos->getAll();
?>

<div class="ImgJUGADOR">
        <div class="container text-center">
                <div class="row">
                        <div class="col">
                                <h1>¡Bienvenido! Ahora podrá ingresar sus jugadores</h1>
                        </div>
                </div>
                <div id="layoutAuthentication">
                        <div id="layoutAuthentication_content">
                                <div class="container mt-5">
                                        <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                                <div class="card-header bg-colorr">
                                                                        <h3 class="text-center text-light my-4 fs-4">Ver Usuario</h3>
                                                                </div>

                                                                <div class="card-body bg-colorbody ">


                                                                        <div class="mb-3 bg-color1 text-primary">
                                                                                <div class="row">

                                                                                </div>
                                                                                <div class="mt-4 mb-0">
                                                                                        <div class="d-grid">
                                                                                                <table class="table">
                                                                                                        <thead>
                                                                                                                <tr>

                                                                                                                        <th scope="col">#</th>
                                                                                                                        <th scope="col">email</th>
                                                                                                                        <th scope="col">nickname</th>
                                                                                                                        <th scope="col">password</th>
                                                                                                                        <th scope="col"></th>
                                                                                                                        <th scope="col" colspan="2">Opcion</th>
                                                                                                                </tr>
                                                                                                        </thead>
                                                                                                        <tbody>
                                                                                                                <?php
                                                                                                                if ($registros) {
                                                                                                                        foreach ($registros as $row) {

                                                                                                                ?>

                                                                                                                                <tr>

                                                                                                                                        <td><?= $row->id ?></td>
                                                                                                                                        <td><?= $row->email ?></td>
                                                                                                                                        <td><?= $row->nickname ?></td>
                                                                                                                                        <td><?= $row->password ?></td>

                                                                                                                                        <!-- <th scope="col" >Opciones</th> -->

                                                                                                                                        <td>
                                                                                                                                                <a class="btn btn-sm btn-outline-warning" href="../Controllers/calculadoraController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                                                                                                                        </td>
                                                                                                                                        <td>
                                                                                                                                                <a class="btn btn-sm btn-outline-danger " href="../Controllers/calculadoraController.php?c=4&id=<?= $row->getId() ?>">Eliminar</a>
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
                                                                                        <button class="btn btn-dark btn-block" id="submitBtn">Guardar Jugador</button>
                                                                                </div>
                                                                        </div>
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