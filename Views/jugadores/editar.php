<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");


include_once '../../Models/conexionModel.php';
include_once '../../Models/JugadorModel.php';

$datos = new JugadorModel();
$registros = $datos->getbyId($_REQUEST['id']);

foreach ($registros as $resultado) {
    $id        = $resultado->getId();
    $nombre_completo   = $resultado->nombre_completo;
    $apodo   = $resultado->apodo;
    $fecha_nacimiento  = $resultado->fecha_nacimiento;
    $caracteristicas = $resultado->caracterisitcas;
    $id_equipo = $resultado->id_equipo;
    $id_liga = $resultado->id_liga;
    $id_pais = $resultado->id_pais;
    $id_contiente = $resultado->id_contiente;
    $id_posicion = $resultado->id_posicion;
    $id_perfil = $resultado->id_perfil;
}

?>
<main>

    <body class="my-3">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1>¡Bienvenido! Ahora Podrá Ver sus Jugadores</h1>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Calculadora</h1>
                        <hr>
                        <h3>Formulario para editar operaciones</h3>
                        <div class="card-body">
                            <form action="../../Controllers/JugadorController.php" method="POST">
                                <input type="hidden" name="c" value="3">

                                <div class="row mb-3">
                                    <div class="row">

                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <div class="mb-3">
                                            <label for="n1" class="form-label">Número Uno</label>
                                            <input type="number" class="form-control" id="n1" name="n1" value="<?= $n1 ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="n2" class="form-label">Número Dos</label>
                                            <input type="number" class="form-control" id="n2" name="n2" value="<?= $n2 ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="operacion" class="form-label">Operación</label>
                                            <select class="form-select" id="operacion" name="operacion" value="<?= '' ?>">
                                                <option value="1">Sumar</option>
                                                <option value="2">Restar</option>
                                                <option value="3">Multiplicar</option>
                                                <option value="4">Dividir</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>

    </body>
</main>


<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");

?>