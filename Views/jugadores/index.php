<?php
  include_once(__DIR__ . "../../../config/rutas.php");
  include_once(BASE_DIR . "../../Views/partials/header.php");
  include_once(BASE_DIR . "../../Views/partials/aside.php");
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

                                        <div class="row mb-3">


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
                                                    <input type="text" class="form-control" id="caracteristicas" type="text" placeholder="Caracteristicas" name="caracteristicas" required />
                                                    <label for="nombre_completo">caracterisitcas</label>
                                                </div>
                                            </div>

                                            <div class="form-floating col-md-6 mt-3">
                                                <div class="form-floating">
                                                    <label for="fecha_nacimiento" id="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                                    <input type="date" class="form-control" type="datetime" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
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

                                            <div class="row row-cols-1 row-cols-md-2 g-4">
                                                <div class="col">
                                                    <div class="card">

                                                        <div class="card-body">


                                                            <div class="card-body card-header bg-success">
                                                                <h5 class="text-center text-light my-4 fs-4">Historial Equipos</h5>
                                                            </div>
                                                            <div class="form-floating  mt-3">

                                                                <select class="form-select" id="id_equipo" name="id_equipo" aria-label="Default select example" required>
                                                                    <option selected>Seleccionar Equipo</option>
                                                                    <?php foreach ($equipos as $equipo) :; ?>

                                                                        <option value="<?= $equipo->getId() ?>">
                                                                            <?= $equipo->getid_equipos() ?> </option>

                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>


                                                            <div class="form-floating col-md-6 mt-3">
                                                                <div class="form-floating">
                                                                    <label for="fecha_inicial" id="fecha_inicial" class="form-label">Fecha Inicial</label>
                                                                    <input type="date" class="form-control" type="datetime" placeholder="Fecha Inicial" name="fecha_inicial" id="fecha_inicial" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-floating col-md-6 mt-3">
                                                                <div class="form-floating">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <img src="..." class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <!-- <h2>sdsa</h2> -->
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">apodo</th>
                                                            <th scope="col">Fecha Nacimiento</th>
                                                            <th scope="col">caracteristicas</th>
                                                            <th scope="col">Equipo</th>
                                                            <th scope="col">Liga</th>
                                                            <th scope="col">Pais</th>
                                                            <th scope="col">Continente</th>
                                                            <th scope="col">Posicion</th>
                                                            <th scope="col">Perfil</th>
                                                            <th scope="col">Historial Equipo</th>
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
                                                                    <td><?= $row->nombre_completo ?></td>
                                                                    <td><?= $row->apodo ?></td>
                                                                    <td><?= $row->fecha_nacimiento ?></td>
                                                                    <td><?= $row->caracterisitcas ?></td>
                                                                    <td><?= $row->id_equipo ?></td>
                                                                    <td><?= $row->id_liga ?></td>
                                                                    <td><?= $row->id_pais ?></td>
                                                                    <td><?= $row->id_continente ?></td>
                                                                    <td><?= $row->id_posicion ?></td>
                                                                    <td><?= $row->id_perfil ?></td>

                                                                    <td><?= $row->guardar ?></td>
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