<?php
require_once '../../Models/JugadorModel.php';
$datos = new JugadorModel();
$registros = $datos->getbyId($_REQUEST['id']);

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/main/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
include_once '../../Models/JugadorModel.php';

?>
<main>

    <div class="container">
        <form action="../Controllers/JugadorController.php" method="POST">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create Account</h3>

                            <div class="card-body">
                                <form action="../../Controllers/JugadorController.php" method="POST">
                                    <input type="hidden" name="c" value="1">
                                    <form>
                                        <div class="row mb-3">


                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="nombre_completo" type="text" placeholder="Nomber Completo" name="nombre completo" required />
                                                    <label for="nombre_completo">Nombre Completo</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="apodo" type="text" placeholder="Apodo" name="apodo" required />
                                                    <label for="apodo">Apodo</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input type="text" class="form-control" id="caracteristicas" type="text" placeholder="Caracteristicas" name="nombre completo" required />
                                                    <label for="nombre_completo">caracterisitcas</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <label for="fecha_nacimiento" id="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                                    <input type="date" class="form-control" type="datetime" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-floating mb-3">
                                            <label for="">perfil Operación</label>
                                            <select class="form-select" name="perfil" id="perfiles">
                                                <option value="1">Diestro</option>
                                                <option value="2">Zurdo</option>
                                                <option value="3">Ambidiestro</option>

                                            </select>
                                        </div>
                                    </form>
                                </form>
                                
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <h2>sdsa</h2>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre Completo</th>
                                            <th scope="col">Apodo</th>
                                            <th scope="col">perfil</th>
                                            <th scope="col">fecha_nacimiento</th>
                                            <th scope="col">Caracteristicas</th>
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
                                                    <td><?= $row->perfiles ?></td>
                                                    <!-- <th scope="col" >Opciones</th> -->
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
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                </div>

                            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </form>
    </div>
</main>

<?php
include_once(BASE_DIR . "../../Views/main/footer.php");

?>