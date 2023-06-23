
<?php
// if (!isset($_SESSION['id'])) {

//     header("Location:../../index.php");
// }else{
//     if($_SESSION['usuario']=="ok") {

//     $nombreUsuario=$_SESSION["nombreUsuario"];}
// }
ob_start();

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
// include_once(BASE_DIR . "../../Views/partials/header.php");


$data = new ReportesController();
$datosPdf = $_REQUEST;


// var_dump($datosPdf);
// die();

// var_dump($datosReporte["id"]);
// die();
// 
// foreach ($datosPdf as $k => $v) {
//     print_r($k . "=>" . $v);
//     echo "<hr>";
// }


// die();

$encabezado = [

    "Fecha_Inicial" => $_REQUEST["fechaInicial"],
    "Fecha_Final" => $_REQUEST["fechaFinal"]
];

$datosJugador = [
    "Nombre" => $_REQUEST["nombre_completo"],
    "Apodo" => $_REQUEST["apodo"],
    "Equipo" => $_REQUEST["equipo"],
    "Liga" => $_REQUEST["liga"],
    "Posicion" => $_REQUEST["posicion"],
    "Total_Minutos" => $_REQUEST["totalMinutosJugados"],
    "Partidos_Jugados" => $_REQUEST["totalPartidosJugados"],
    "promedio" => $_REQUEST["promedio"],
    "id_posicion" => $_REQUEST["id_posicion"],

];

// var_dump($datosJugador);
// echo "<hr>";
// die();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../../public/assets/css/styles.css" rel="stylesheet" /> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>StadplayerPDF</title>
</head>

<body>
    <div class="container">
    <img class="" src="// http://<?php echo $_SERVER['HTTP_HOST']; ?>/StadPlayers/Public/assets/img/tituloStadplayers.jpg<?php echo $libro[''];?>" width="100" alt=""srcset="" >
        <table class="table table-striped">
            <thead>
                <tr>

                    <th>Nombre del Jugador</th>
                    <th>Apodo</th>
                    <th>Equipo</th>
                    <th>Liga</th>
                    <th>Posición</th>
                    <th>Total Minutos</th>
                    <th>Partidos Jugados</th>
                    <th>promedio</th>

                </tr>
            </thead>

            <tbody>


            <?php
                foreach ($datosJugador as $key => $dato) {

                    if ($key != 'id_posicion') { ?>

                        <td><?php str_replace("_", " ", $key)  ?><?= $dato ?></td>

                    <?php } ?>
                <?php } ?>
            </tbody>


        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>
<?php
// include_once(BASE_DIR . "../../Views/partials/header.php");
// include_once(BASE_DIR . "../../Views/partials/aside.php");
// session_start();



$html = ob_get_clean();


require_once '../../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnable' => true));
$dompdf->setOptions($options);


$dompdf->loadHtml($html);
$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("archivo-.pdf", array("Attachment" => false));



// $dompdf->setPaper('A4','Landscape');
// si no se quiere mostrar el contenido en format de carta o
// estas creando certifidados necesita mostrarlos en fora horzontal se puede usar esta función.

?>