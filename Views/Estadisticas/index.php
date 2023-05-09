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

        <div class="container text-center">
            <div class="row row-cols-2  justify-content-between">
                <div class="col col-md-4 m-2">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <input class="  text-center" type="number" name="val-estadistica" id="val-estadistica" value="0">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2 fixed"><a class="btn" id="estadistica-resta"><i class="fa-solid fa-minus"></i></a></div>
                        <div class="col col-md-auto">Pases Acertados </div>
                        <div class="col col-lg-2 fixed"><a class="btn" id="estadistica-suma"><i class="fa-solid fa-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row row-cols-  justify-content-between">
                <div class="col col-md-4 my-2 mx-2">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <input class="  text-center" type="number" name="val-estadistica" id="val-estadistica" value="0">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2"><a class="btn" id="estadistica-resta"><i class="fa-solid fa-minus"></i></a></div>
                        <div class="col col-md-auto">Pases Errados</div>
                        <div class="col col-lg-2"><a class="btn" id="estadistica-suma"><i class="fa-solid fa-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <div class="row row-cols-2  justify-content-between">
                <div class="col col-md-4 m-2">
                    <div class="row justify-content-md-center">
                        <div class="col">
                            <input class="  text-center" type="number" name="val-estadistica" id="val-estadistica" value="0">
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2"><a class="btn" id="estadistica-resta"><i class="fa-solid fa-minus"></i></a></div>
                        <div class="col col-md-auto">Asistencias de el bicho cr7 siuuuu</div>
                        <div class="col col-lg-2"><a class="btn" id="estadistica-suma"><i class="fa-solid fa-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>


    </div>



</main>


<?php
include_once(BASE_DIR . "../../Views/main/footer.php");
?>