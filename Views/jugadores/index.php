<?php


include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/JugadorModel.php';
$datos = new JugadorModel();
$registros = $datos->getAll();

$datos = new JugadorModel();
$equipos = $datos->equipos();

$datos = new JugadorModel();
$ligas = $datos->ligas();

$datos = new JugadorModel();
$paises = $datos->paises();

$datos = new JugadorModel();
$continentes = $datos->continentes();

$datos = new JugadorModel();
$posiciones = $datos->posiciones();

$datos = new JugadorModel();
$perfiles = $datos->perfiles();

$datos = new JugadorModel();
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
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Jugadores</h3>
                                </div>

                                <div class="card-body">
                                    <form action="../../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="1">

                                        <div class="mb-3">
                                            <div class="row">

                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="text" class="form-control" id="nombre_completo" type="text" placeholder="Nombre Completo" name="nombre_completo" required />
                                                        <label for="nombre_completo">Nombre Completo</label>
                                                    </div>
                                                </div>

                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="text" class="form-control" id="apodo" placeholder="Apodo" name="apodo" required />
                                                        <label for="apodo">Apodo</label>
                                                    </div>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="text" class="form-control" id="caracteristicas" placeholder="Caracteristicas" name="caracteristicas" required />
                                                        <label for="nombre_completo">caracterisitcas</label>
                                                    </div>
                                                </div>

                                                <div class="form-floating col-md-6 mt-2">
                                                    <div class="form-floating pt-2">
                                                        <label for="fecha_nacimiento" id="fecha_nacimiento" class="form-label ">Fecha de nacimiento</label>
                                                        <input type="date" class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md-6 mt-4">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <h2>Equipo</h2>
                                                </div>
                                             </div> -->

                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_equipo" name="id_equipo" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Equipo</option>
                                                        <?php foreach ($equipos as $equipo) :; ?>

                                                            <option value="<?= $equipo->getId() ?>">
                                                                <?= $equipo->getid_equipos() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_liga" name="id_liga" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Liga</option>
                                                        <?php foreach ($ligas as $nombre) :; ?>

                                                            <option value="<?= $nombre->getId() ?>">
                                                                <?= $nombre->getid_ligas() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_contiente" name="id_contiente" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Continente</option>
                                                        <?php foreach ($continentes as $nombre) :; ?>

                                                            <option value="<?= $nombre->getId() ?>">
                                                                <?= $nombre->getid_continentes() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_pais" name="id_pais" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Pais</option>
                                                        <?php foreach ($paises as $nombre) :; ?>

                                                            <option value="<?= $nombre->getId() ?>">
                                                                <?= $nombre->getid_paises() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_posicion" name="id_posicion" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Posicion</option>
                                                        <?php foreach ($posiciones as $nombre) :; ?>

                                                            <option value="<?= $nombre->getId() ?>">
                                                                <?= $nombre->getid_posicion() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">

                                                    <select class="form-select" id="id_perfil" name="id_perfil" aria-label="Default select example" required>
                                                        <option selected>Seleccionar Perfil</option>
                                                        <?php foreach ($perfiles as $nombre) :; ?>

                                                            <option value="<?= $nombre->getId() ?>">
                                                                <?= $nombre->getid_perfil() ?> </option>

                                                        <?php endforeach ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-success btn-block" id="submitBtn">guardar Jugador</button>
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
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Jugadores</h3>
                                </div>

                                <div class="card-body">
                                    <form action="../../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="5">

                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="row">

                                                    <div class="row row-cols-1 row-cols-md-2 g-4" id="id_historial_equipos" name="id_historial_equipos">
                                                        <div class="col">
                                                            <div class="card">

                                                                <div class="card-body">


                                                                    <div class="card-body card-header bg-success">
                                                                        <h5 class="text-center text-light my-4 fs-4">Historial Equipos</h5>
                                                                    </div>
                                                                    <div class="form-floating  mt-3">

                                                                        <select class="form-select" aria-label="Default select example" required>
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
                                                                            <input type="date" class="form-control" type="datetime" placeholder="Fecha Inicial" name="fecha_inicial" id="fecha_inicial" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mt-3">
                                                                        <div class="form-floating pt-2">
                                                                            <label for="fecha_terminacion" id="fecha_terminacion" class="form-label">Fecha Terminacion</label>
                                                                            <input type="date" class="form-control" type="datetime" placeholder="Fecha Terminacion" name="fecha_terminacion" id="fecha_terminacion" required>
                                                                        </div>
                                                                    </div>
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Nombre Equipo</th>
                                                                                <th scope="col">Fecha Inicial</th>
                                                                                <th scope="col">Fecha Terminacion</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row">1</th>
                                                                                <td>Mark</td>
                                                                                <td>Otto</td>
                                                                                <td>@mdo</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">2</th>
                                                                                <td>Jacob</td>
                                                                                <td>Thornton</td>
                                                                                <td>@fat</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row">3</th>
                                                                                <td colspan="2">Larry the Bird</td>
                                                                                <td>@twitter</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="mt-4 mb-0">
                                                                        <div class="d-grid">
                                                                            <button class="btn btn-success btn-block" id="submitBtn">guardar Jugador</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="card">
                                                                <div class="card-body card-header bg-success">
                                                                    <h5 class="text-center text-light my-4 fs-4">Titulos Obtenidos</h5>
                                                                </div>

                                                                <div class="card-body">
                                                                    <div class="form-floating  mt-3">

                                                                        <select class="form-select" aria-label="Default select example" required>
                                                                            <option selected>Seleccionar Equipo</option>
                                                                            <?php foreach ($equipos as $equipo) :; ?>

                                                                                <option value="<?= $equipo->getId() ?>">
                                                                                    <?= $equipo->getid_equipos() ?> </option>

                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-floating  mt-3">

                                                                        <select class="form-select" aria-label="Default select example" required>
                                                                            <option selected>Seleccionar Copas</option>
                                                                            <?php foreach ($copas as $nombre) :; ?>

                                                                                <option value="<?= $nombre->getId() ?>">
                                                                                    <?= $nombre->getid_equipos() ?> </option>

                                                                            <?php endforeach ?>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-floating  mt-2">
                                                                        <div class="form-floating pt-2">
                                                                            <label for="fecha" id="fecha" class="form-label ">Fecha del Titulo</label>
                                                                            <input type="date" class="form-control" type="date" name="fecha" id="fecha" required>
                                                                        </div>
                                                                    </div>


                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Equipo Ganador del Titulo</th>
                                                                                <th scope="col">Copa Ganada</th>
                                                                                <th scope="col">Fecha Titulo</th>

                                                                            </tr>
                                                                        </thead>

                                                                    </table>
                                                                    <tbody>
                                                                        <?php
                                                                        if ($registros) {
                                                                            foreach ($registros as $row) {

                                                                        ?>

                                                                                <tr>

                                                                                    <td><?= $row->id ?></td>
                                                                                    <td><?= $row->n1 ?></td>
                                                                                    <td><?= $row->n2 ?></td>
                                                                                    <td><?= $row->operacion ?></td>
                                                                                    <td><?= $row->resultado ?></td>
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
                                                                    <div class="mt-4 mb-0">
                                                                        <div class="d-grid">
                                                                            <button class="btn btn-success btn-block" id="submitBtn">Guardar </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
</main>



<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>