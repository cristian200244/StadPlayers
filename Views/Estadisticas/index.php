<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/main/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");
?>
<main>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Ahora Podrá ingresar sus estadísticas</h1>
            </div>
        </div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success">
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Estadistica</h3>
                                </div>
                                <div class="card text-center py-3">
                                    <div class="small">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <!-- PRIMER CAMPO PAR LLLENAR ESTADISTICAS LADO IZQUIERDO -->
                                                <div class="col m-4">
                                                    <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                </div>
                                                <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                <span class="fs-3 fw-bold">Goles De Chilena</span>
                                                <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                                <div class="col m-4">
                                                    <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                </div>
                                                <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                <span class="fs-3 fw-bold">Pases Errados</span>
                                                <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                                <div class="col m-4">
                                                    <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                </div>
                                                <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                <span class="fs-3 fw-bold">Goles De Cabeza del bichoo</span>
                                                <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                            </div>

                                            <!-- linea que divide las estadisticas -->
                                            <div class="vr"></div>

                                            <div class="col-md-4">
                                                <div class="form-floating">

                                                    <!-- SEGUNDO CAMPO PARA ENTRADA DE ESTADISTICAS LADO DERECHO -->
                                                    <div class="col m-4">
                                                        <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-3" id="estadistica-resta-id">-</button>
                                                    <span class="fs-3 fw-bold">Asistencias</span>
                                                    <button class="btn btn-success m-3" id="estadistica-suma-id">+</button>

                                                    <div class="col m-4">
                                                        <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-2" id="estadistica-resta-id">-</button>
                                                    <span class="fs-3 fw-bold">Rojas</span>
                                                    <button class="btn btn-success m-2" id="estadistica-suma-id">+</button>

                                                    <div class="col m-4">
                                                        <input class="  text-center" type="number" name="val-estadistica-id" id="val-estadistica-id" value="0">
                                                    </div>
                                                    <button class="btn btn-danger m-2" id="estadistica-resta-id">-</button>
                                                    <span class="fs-3 fw-bold">Amarillas</span>
                                                    <button class="btn btn-success m-2" id="estadistica-suma-id">+</button>


                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                            </div> -->
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>


<?php
include_once(BASE_DIR . "../../Views/main/footer.php");
?>