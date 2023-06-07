<!DOCTYPE html>
<html>

<head>
    <title>Cargar imagen con Bootstrap</title>
    <!-- Agregamos los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Cargar imagen con Bootstrap</h2>
        <!-- Creamos un formulario con un input de tipo "file" -->
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagen">Seleccionar imagen:</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Agregamos los archivos JS de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>


include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
$registros = $data->getAll();
?>












                                                <!-- <div class="row row-cols-1 row-cols-md-2 g-4" id="id_historial_equipos" name="id_historial_equipos">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body card-header bg-success">
                                                                <h5 class="text-center text-light my-4 fs-4">Titulos Obtenidos</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-floating  mt-2">

                                                                    <select class="form-select" id="id_copas" name="id_copas" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Titulo</option>
                                                                        <?php foreach ($copas as $nombre) :; ?>

                                                                            <option value="<?= $nombre->getId() ?>">
                                                                                <?= $nombre->getid_copa() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>


                                                                <div class="mt-2">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha" id="fecha" class="form-label">Fecha del Titulo</label>
                                                                        <input type="date" class="form-control" type="datetime" name="fecha" id="fecha" required>
                                                                    </div>
                                                                </div>


                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Nombre Titulo</th>
                                                                            <th scope="col">Fecha Obtencion</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td colspan="2">Larry the Bird</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        <-- </div> -->



                                                        <form action="../../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="5">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <div class="mb-3">
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

                                                                <div class="form-floating col-md-6 mt-2">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha" id="fecha" class="form-label ">Fecha del Titulo</label>
                                                                        <input type="date" class="form-control" type="date" name="fecha" id="fecha" required>
                                                                    </div>
                                                                </div>


                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Nombre Titulo</th>
                                                                            <th scope="col">Fecha Obtencion</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td colspan="2">Larry the Bird</td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>












                                    SELECT
  titulos_jugador.fecha,
  equipos.id AS id_equipo,
  copas.id AS id_copa,
  jugadores.id AS id_jugador,
  historial_equipos.fecha_inicial,
  historial_equipos.fecha_terminacion,
  equipos.id AS id_equipo
FROM
  titulos_jugador
  JOIN equipos ON titulos_jugador.id_equipo = equipos.id
  JOIN copas ON titulos_jugador.id_copa = copas.id
  JOIN jugadores ON titulos_jugador.id_jugador = jugadores.id
  JOIN historial_equipos ON jugadores.id = historial_equipos.id_jugador;







  <?php $datos = new JugadorModel();
        $equipos = $datos->titulos(); ?>

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
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <h2>Historial Equipos Creados</h2>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Jugador</th>
                                                    <th scope="col">Fecha Inicial</th>
                                                    <th scope="col">Fecha terminacion</th>
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

                                                            <td>



                                                                <a class="btn btn-sm btn-outline-warning" href="../../Controllers/JugadorController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                                                -

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





<?php
if ($registros) {
foreach ($registros as $row) { ?>