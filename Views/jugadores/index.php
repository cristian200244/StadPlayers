<?php

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
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">

                                    <form action="../Controllers/JugadorController.php" method="POST">
                                        <input type="hidden" name="c" value="1">

                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input type="text" class="form-control" id="nombre_completo" placeholder="Nomber Completo" name="nombre completo" required />
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
                                            <div class="form-floating">
                                                <label for="fecha_nacimiento" id= "fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" placeholder="Fecha de nacimiento" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                            </div>
                                        </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <label for="">perfil Operación</label>
                                    <select class="form-select" name="operacion" id="perfiles">
                                        <option value="1">Diestro</option>
                                        <option value="2">Zurdo</option>
                                        <option value="3">Ambidiestro</option>
                                    </select>
                                </div>


                                <div class="mt-4 mb-0">
                                    <div class="mb-3">
                                        <button class="btn btn-sm btn-primary" type="submit">r</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- <div class="card-footer text-center py-3">
                            <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </form>
    </div>


</main>


<?php
include_once(BASE_DIR . "../../Views/main/footer.php");

?>