<?php
include_once(__DIR__ . "/../../../config/rutas.php");
include_once(BASE_DIR . "/../../Views/partials/header.php");
include_once(BASE_DIR . "/../../Views/partials/aside.php");
include_once(BASE_DIR . "/../../Models/conexionModel.php");
include_once(BASE_DIR . "/../../Models/JugadorModel.php");
?>

<main>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Ahora podrás ingresar tus jugadores</h1>
            </div>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-success">
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Jugadores</h3>
                                </div>

                                <?php
                                if (isset($_POST['guardar'])) {
                                    if (isset($_FILES['foto']['name'])) {
                                        $tipoArchivo = $_FILES['foto']['type'];
                                        $nombreArchivo = $_FILES['foto']['name'];
                                        $tamanoArchivo = $_FILES['foto']['size'];
                                        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
                                        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
                                        include_once(BASE_DIR . "/../../config/config_example.php");
                                        $con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
                                        $binariosImagen = mysqli_escape_string($con, $binariosImagen);
                                        $query = "INSERT INTO imagen (nombre, imagen, tipo) VALUES ('$nombreArchivo', '$binariosImagen', '$tipoArchivo')";
                                        $res = mysqli_query($con, $query);
                                        if ($res) {
                                            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        Registro Exitoso
                                                    </div>';
                                        } else {
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                        ' . mysqli_error($con) . '
                                                    </div>';
                                        }
                                    }
                                }
                                ?>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function previewFile() {
        var preview = document.getElementById('previewImage');
        var file = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "../../public/assets/img/jugadir.png";
        }
    }
</script>

<?php
include_once(BASE_DIR . "/../../Views/partials/footer.php");
?>