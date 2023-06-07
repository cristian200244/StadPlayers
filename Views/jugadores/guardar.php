<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");


include_once '../../Models/conexionModel.php';
include_once '../../Models/JugadorModel.php';

$id = $_GET['id'];

$datos = new JugadorModel();
$registros = $datos->getById($id);


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
                                            <div class="mb-3">

                                                <div class="card-footer text-center">
                                                    <a href="../../Views/jugadores/VerJugadores.php" class="btn btn-primary">Regresar</a>
                                                </div>
                                            </div>
                                    <?php }
                                    }
                                    ?>


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