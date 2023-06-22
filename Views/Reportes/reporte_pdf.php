
<?php
ob_start();
// session_start();
// if (!isset($_SESSION['id'])) {

//     header("Location:../../index.php");
// }

include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
include_once(BASE_DIR . "../../Views/partials/header.php");


$data = new ReportesController();
$datosReporte = $_REQUEST;

// var_dump($datosReporte["id"]);
// die();

// foreach ($datosReporte as $k => $v) {
//     print_r($k . "=>" . $v);
//     echo "<hr>";
// }


// die();

// $encabezado = [

//     "Fecha_Inicial" => $_REQUEST["fechaInicial"],
//     "Fecha_Final" => $_REQUEST["fechaFinal"]
// ];

// $DatosJugador = [
//     "Nombre" => $_REQUEST["nombre_completo"],
//     "Apodo" => $_REQUEST["apodo"],
//     "Equipo" => $_REQUEST["equipo"],
//     "Liga" => $_REQUEST["liga"],
//     "Posicion" => $_REQUEST["posicion"],
//     "Total_Minutos" => $_REQUEST["totalMinutosJugados"],
//     "Partidos_Jugados" => $_REQUEST["totalPartidosJugados"],
//     "promedio" => $_REQUEST["promedio"],
//     "id_posicion" => $_REQUEST["id_posicion"],
//     // "Rendimiento" =>   =>     $_REQUEST["promedio"],
// ];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <embed type="application/x-google-chrome-pdf" src="chrome-untrusted://print/1/0/print.pdf" original-url="chrome-untrusted://print/1/0/print.pdf" background-color="4292533472" javascript="block">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>
<?php
// include_once(BASE_DIR . "../../Views/partials/header.php");
// include_once(BASE_DIR . "../../Views/partials/aside.php");

$html = ob_get_clean();
// echo $html;

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
// http://<?php echo $_SERVER['HTTP_HOST']; ?>/sitioweb/img/<?php echo $libro['imagen']; ?>