<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
$data = new ReportesController();
$datosPdf = $_REQUEST;

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



require_once '../../fpdf185/fpdf.php';

class PDF extends FPDF
{
    //Cabecera de pagina
    function header()
    {

        //Logo
        $this->cell(-200);
        $this->Image('../../Public/assets/img/tituloStadplayers.jpeg', 0, -10, 220);
        //Letra
        $this->Ln(10);
        $this->SetFont('Arial', '#', 10);
        $this->cell(-200);
    }

    function footer()
    {
        $this->SetFillColor(20.05, 19);
        $this->Rect(0, 270, 220, 30, 'F');
        //Letra
        $this->SetY(-20); //sube las letras
        $this->SetFont('Arial', '', 10);
        $this->SetTextColor(255, 255, 255);
        $this->SetX(90);
        $this->Write(5, '    Derechos Reservados');
        $this->Ln();
        $this->SetX(70);
    }
}
$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

$pdf->SetY(70);
$pdf->SetX(45);
$pdf->SetTextColor(255, 255, 255);

$pdf->SetFillColor(79, 59, 120);
$pdf->Cell(59, 9, 'Nombre', 0, 0, 'c', 1);
$pdf->Cell(17, 9, 'Apodo', 0, 0, 'c', 1);
$pdf->Cell(50, 9, 'Equipo', 0, 0, 'c', 1);
$pdf->Cell(59, 9, 'Liga', 0, 0, 'c', 1);
$pdf->Cell(59, 9, 'Posición', 0, 0, 'c', 1);
$pdf->Cell(59, 9, 'Total Minutos', 0, 0, 'c', 1);
$pdf->Cell(59, 9, 'Partidos Jugados', 0, 0, 'c', 1);
$pdf->Cell(59, 9, 'promedio', 0, 1, 'c', 1);




$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(240, 245, 255);
$pdf->Output();

?>
<div class="container">

    <table class="table table-striped w-auto">

        <!--Table head-->
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