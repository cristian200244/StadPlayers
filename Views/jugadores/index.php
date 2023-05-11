<?php


include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/main/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

?>
<main>
    <div class="container">
        <div class="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h2 class="card-title text-center   ">crear jugador </h2>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                <!-- <input type="file" id="inputImage" accept="image/*"> -->




                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                        <label for="imagen">Seleccionar imagen:</label>
                        <br>
                        <input type="file" name="imagen" id="inputImage" accept="image/*">

                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

                <div class="row">
                    <div class="col">

                        <h5 class="card-title text">Fecha Nacimiento </h5>
                        <input type="date" name="fecha_nacimiento">
                        <br>
                        <br>
                        <select class="btn btn-info" aria-label="Default select example">
                            <option selected>Perfil</option>

                            <option value="1">Derecho</option>
                            <option value="2">Izquierdo</option>
                            <option value="3">Ambidiestro</option>

                        </select>
                        <br>
                        <br>
                        <select class="btn btn-info" aria-label="Default select example">
                            <option selected>Posicion</option>

                            <option value="1">Derecho</option>
                            <option value="2">Izquierdo</option>
                            <option value="3">Ambidiestro</option>

                        </select>
                        <br><br>

                        <div class="text-end">
                            <div class="body">
                                <a href="#" class="btn btn-primary">Go somewhere</a>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="d-flex justify-content-around">...</div>
    <div class="d-flex justify-content-evenly">...</div>

</main>


<?php
include_once(BASE_DIR . "../../Views/main/footer.php");

?>