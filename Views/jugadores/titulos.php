<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/conexionModel.php';
include_once '../../Models/JugadorModel.php';

$datos = new JugadorModel();
$registros = $datos-> TitulosObtenidos();

$equipos = $datos->equipos();
$jugadores = $datos->jugadores();
$copas = $datos->copas();
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
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Historial Equipo</h3>
                                </div>

                                <div class="card-body">
                                    <form action="../../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="7">

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col   g-4">
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="card-body card-header bg-success">
                                                                    <h5 class="text-center text-light my-4 fs-4">Historial Equipos</h5>
                                                                </div>
                                                                <div class="form-floating  mt-3">

                                                                    <select class="form-select" id="id_jugador" name="id_jugador" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Jugador</option>
                                                                        <?php foreach ($jugadores as $nombre) :; ?>

                                                                            <option value="<?= $nombre->getId() ?>">
                                                                                <?= $nombre->getid_jugadores() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <select class="form-select" id="id_equipo" name="id_equipo" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Equipo</option>
                                                                        <?php foreach ($equipos as $equipo) :; ?>

                                                                            <option value="<?= $equipo->getId() ?>">
                                                                                <?= $equipo->getid_equipos() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <select class="form-select" id="id_copa" name="id_copa" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Copas</option>
                                                                        <?php foreach ($copas as $nombre) :; ?>

                                                                            <option value="<?= $nombre->getId() ?>">
                                                                                <?= $nombre->getid_copa() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha" id="fecha" class="form-label">Fecha Ganar Titulo</label>
                                                                        <input type="date" class="form-control" placeholder="Fecha" name="fecha" id="fecha" required>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid">
                                                            <button class="btn btn-success btn-block" id="submitBtn">Guardar Titulos</button>
                                                        </div>
                                                    </div>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <h2>sdsa</h2>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Jugador</th>
                                                                <th scope="col">Fecha</th>
                                                                <th scope="col">Copa</th>
                                                                <th scope="col">Equipo</th>
                                                                <th scope="col" colspan="2">Opción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            if ($registros) {
                                                                foreach ($registros as $row) {

                                                            ?>

                                                                    <tr>

                                                                        <td><?= $row->id ?></td>
                                                                        <td><?= $row->id_jugador ?></td>
                                                                        <td><?= $row->fecha ?></td>
                                                                        <td><?= $row->id_copa?></td>
                                                                        <td><?= $row->id_equipo ?></td>
                                                                        <!-- <th scope="col" >Opciones</th> -->

                                                                        <td>
                                                                            <a class="btn btn-sm btn-outline-danger" href="../../Controllers/JugadorController.php?c=6&id=<?= $row->getId() ?>">Eliminar</a>
                                                                        </td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <tr class="text-center">
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
                                    </form>
                               
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