<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/conexionModel.php';
include_once '../../Models/JugadorModel.php';

$datos = new JugadorModel();
$registros = $datos->getAll();

$equipos = $datos->equipos();
$ligas = $datos->ligas();
$paises = $datos->paises();
$continentes = $datos->continentes();
$posiciones = $datos->posiciones();
$perfiles = $datos->perfiles();
$copas = $datos->copas();

?>

<main>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Ahora podrá ingresar sus Jugadores</h1>
            </div>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success">
                                    <h3 class="text-center text-light my-4 fs-4">Aquí va el nombre del jugador</h3>
                                </div>

                                <div class="card-body">
                                    <?php
                                    if ($registros) {
                                        foreach ($registros as $row) { ?>
                                            <!-- div para la imagen -->
                                            <div class="row ms-2">
                                                <div class="col-2">
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="..." class="card-img-top" alt="...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Nombre">Nombre del Jugador</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->nombre_completo ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Apodo">Apodo</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->apodo ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="fecha Nacimiento">Fecha De Nacimiento</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->fecha_nacimiento ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Caracteristicas">Caracteristicas</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->caracteristicas ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Posicion">Posicion de Juego</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_posicion ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Perfil">Perfil de Juego</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_perfil ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="continente">Continente Donde Juega</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_contiente ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Pais">Pais Donde Juega</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_pais ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Liga">Liga Donde Juega</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_liga ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-3 text-success">
                                                            <strong>
                                                                <h5><label for="Equipo">Equipo Donde Juega</label></h5>
                                                            </strong>
                                                            <div class="card bg-dark text-light mt-2 pt-2 pb-2">
                                                                <span><?= $row->id_equipo ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="card-footer text-center">
                                                    <a href="../../Views/jugadores/VerJugadores.php" class="btn btn-primary">Regresar</a>
                                                </div>
                                            </div>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        include_once '../../Models/JugadorModel.php';

        $datos = new JugadorModel();
        $registros = $datos->getObtener();
        ?>


        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>¡Bienvenido! Ahora podrá ingresar sus jugadores</h1>
                </div>
            </div>
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header bg-success">
                                        <h3 class="text-center text-light my-4 fs-4">Ingresar Jugadores</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="guardar.php" method="POST">
                                            <input type="hidden" name="c" value="5">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col row-cols-1 row-cols-md-2 g-4">
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <div class="card-body card-header bg-success">
                                                                        <h5 class="text-center text-light my-4 fs-4">Historial Equipos</h5>
                                                                    </div>
                                                                    <div class="form-floating mt-3">
                                                                        <select class="form-select" id="id_equipo_historial" name="id_equipo_historial" aria-label="Default select example" required>
                                                                            <option selected>Seleccionar Equipo</option>
                                                                            <?php foreach ($equipos as $equipo) :; ?>

                                                                                <option value="<?= $equipo->getId() ?>">
                                                                                    <?= $equipo->getid_equipos() ?> </option>

                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <div class="form-floating pt-2">
                                                                            <label for="fecha_inicial" id="fecha_inicial" class="form-label">Fecha Inicial</label>
                                                                            <input type="date" class="form-control" placeholder="Fecha Inicial" name="fecha_inicial" id="fecha_inicial" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3">
                                                                        <div class="form-floating pt-2">
                                                                            <label for="fecha_terminacion" id="fecha_terminacion" class="form-label">Fecha Terminacion</label>
                                                                            <input type="date" class="form-control" placeholder="Fecha Terminacion" name="fecha_terminacion" id="fecha_terminacion" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <h2>sdsa</h2>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Jugador</th>
                                                                    <th scope="col">Fecha Inicial</th>
                                                                    <th scope="col">fecha Terminacion</th>
                                                                    <th scope="col">Equipo</th>
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
                                                                            <td><?= $row->id_jugador ?></td>
                                                                            <td><?= $row->fecha_inicial ?></td>
                                                                            <td><?= $row->fecha_terminacion ?></td>
                                                                            <td><?= $row->id_equipo ?></td>
                                                                            <!-- <th scope="col" >Opciones</th> -->

                                                                            <td>


                                                                                <a class="btn btn-sm btn-outline-danger " href="../../Controllers/JugadorController.php?c=6&id=<?= $row->getId() ?>">Eliminar</a>
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
                                                        <div class="mt-4 mb-0">
                                                            <div class="d-grid">
                                                                <button class="btn btn-success btn-block" id="submitBtn">Guardar Jugador</button>
                                                            </div>
                                                        </div>
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
    </div>
</main>


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>