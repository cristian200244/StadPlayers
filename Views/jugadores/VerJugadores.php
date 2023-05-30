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
                                    <h3 class="text-center text-light my-4 fs-4">Ver Jugador</h3>
                                </div>

                                <div class="card-body">
                                    <form action="../../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="1">

                                        <div class="row mb-3">
                                            <div class="row">

                                                <form method="post">
                                                    <!-- Agrega aquí los campos de entrada -->
                                                    <input type="text" name="nombre" placeholder="Nombre"><br>
                                                    <input type="email" name="email" placeholder="Email"><br>
                                                    <textarea name="mensaje" placeholder="Mensaje"></textarea><br>
                                                    <button type="submit">Guardar</button>
                                                </form>

                                                <div id="dataContainer">
                                                    <?php
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        $nombre_completo = $_POST["nombre_completo"];
                                                        $apodo = $_POST["apodo"];
                                                        $caracteristicas = $_POST["caracteristicas"];

                                                        // Guardar los datos en un archivo o base de datos

                                                        // Mostrar los datos registrados
                                                        echo "<p><strong>nombre_completo:</strong> " . $nombre_completo . "</p>";
                                                        echo "<p><strong>apodo:</strong> " . $apodo . "</p>";
                                                        echo "<p><strong>caracteristicas:</strong> " . $caracteristicas . "</p>";
                                                    }
                                                    ?>
                                                </div>


                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <h2>sdsa</h2>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">Apodo</th>
                                                            <th scope="col">fecha nacimiento</th>
                                                            <th scope="col">caracteristicas</th>
                                                            <th scope="col">Equipo</th>
                                                            <th scope="col">Pais</th>
                                                            <th scope="col">Continente</th>
                                                            <th scope="col">Posicion</th>
                                                            <th scope="col">Perfil</th>
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
                                                                    <td><?= $row->caracteristicas ?></td>
                                                                    <td><?= $row->id_equipo ?></td>
                                                                    <td><?= $row->id_pais ?></td>
                                                                    <td><?= $row->id_contiente ?></td>
                                                                    <td><?= $row->id_posicion ?></td>
                                                                    <td><?= $row->id_perfil ?></td>
                                                                    <!-- <th scope="col" >Opciones</th> -->
                                                                    <td>
                                                                        <a class="btn btn-sm btn-outline-warning" href="../Controllers/JugadorController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                                                    </td>
                                                                    <td>
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
</main>


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>