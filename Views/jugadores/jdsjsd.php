<!DOCTYPE html>
<html>

<head>
    <title>Cargar imagen con Bootstrap</title>
    <!-- Agregamos los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Cargar imagen con Bootstrap</h2>
        <!-- Creamos un formulario con un input de tipo "file" -->
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagen">Seleccionar imagen:</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Agregamos los archivos JS de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>


include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
$registros = $data->getAll();
?>


<?php
if ($registros) {
foreach ($registros as $row) { ?>