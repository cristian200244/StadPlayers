<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
$registros = $data->getAll();

?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../Models/JugadorModel.php';

    $jugador = new JugadorModel();

    $datos = [
        'nombre_completo' => $_POST['nombre_completo'],
        'apodo' => $_POST['apodo'],
        'fecha_nacimiento' => $_POST['fecha_nacimiento'],
        'caracteristicas' => $_POST['caracteristicas'],
        'id_equipo' => $_POST['id_equipo'],
        'id_liga' => $_POST['id_liga'],
        'id_pais' => $_POST['id_pais'],
        'id_contiente' => $_POST['id_contiente'],
        'id_posicion' => $_POST['id_posicion'],
        'id_perfil' => $_POST['id_perfil']
    ];

    $result = $jugador->store($datos);

    if ($result) {
        echo "Los datos se han guardado correctamente.";
    } else {
        echo "Error al guardar los datos.";
    }
}
?>



<body>
    <h2>Guardar Jugador</h2>
    <form method="POST" action="guardar.php">
        <label for="nombre_completo">Nombre completo:</label>
        <input type="text" name="nombre_completo" required><br><br>

        <label for="apodo">Apodo:</label>
        <input type="text" name="apodo" required><br><br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br><br>

        <label for="caracteristicas">Características:</label>
        <textarea name="caracteristicas" required></textarea><br><br>

        <label for="id_equipo">ID Equipo:</label>
        <input type="number" name="id_equipo" required><br><br>

        <label for="id_liga">ID Liga:</label>
        <input type="number" name="id_liga" required><br><br>

        <label for="id_pais">ID País:</label>
        <input type="number" name="id_pais" required><br><br>

        <label for="id_contiente">ID Continente:</label>
        <input type="number" name="id_contiente" required><br><br>

        <label for="id_posicion">ID Posición:</label>
        <input type="number" name="id_posicion" required><br><br>

        <label for="id_perfil">ID Perfil:</label>
        <input type="number" name="id_perfil" required><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>

</html>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>