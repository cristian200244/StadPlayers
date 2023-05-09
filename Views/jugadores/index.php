<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/main/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="js/myscript.js"></script>
    <title>Crear Jugador</title>
</head>

<body>

    <main>
        <h2>sdas</h2>
        <div class="container">
            <br>
            <br>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>

<?php
include_once(BASE_DIR . "../../Views/main/footer.php");

?>