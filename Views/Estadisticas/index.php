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
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div id="content">
                    <h2>Ingresar Estadisticas</h2>
                    <div id="valor">0</div>
                    <button id="resta">-</button>
                    <input type="text" id="inputValor" value="0">
                    <button id="suma">+</button>

                </div>
            </div>
        </div>
    </div>

</main>

