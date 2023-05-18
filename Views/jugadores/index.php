<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/JugadorModel.php';
$datos = new JugadorModel();
$registros = $datos->getAll();

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


                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="nombre_completo" type="text" placeholder="Nombre Completo" name="nombre_completo" required />
                                                    <label for="nombre_completo">Nombre Completo</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="apodo" placeholder="Apodo" name="apodo" required />
                                                    <label for="apodo">Apodo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="caracteristicas" type="text" placeholder="Caracteristicas" name="caracteristicas" required />
                                                    <label for="nombre_completo">caracterisitcas</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <label for="fecha_nacimiento" id="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                                    <input type="date" class="form-control" type="datetime" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-sm btn-primary" type="submit">Guargar</button>
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
                                                            <td><?= $row->id_liga?></td>
                                                            <td><?= $row->id_pais ?></td>
                                                            <td><?= $row->id_continente ?></td>
                                                            <td><?= $row->id_posicion ?></td>
                                                            <td><?= $row->id_perfil?></td>
                                                            <td><?= $row->id_historial_equipos ?></td>
                                                            <td><?= $row->guardar?></td>
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