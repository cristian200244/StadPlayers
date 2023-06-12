<?php
require_once __DIR__ . '../../Models/GenerarReportesModel.php';




//Instanciando la clase CalculadoraController
$usuario = new ReportesController();

class ReportesController
{
    private $reportesModel;
    public $reporte;
    public function __construct()
    {

        $this->reportesModel = new ReportesModel();

        if (isset($_REQUEST['c'])) {
            $controlador = $_REQUEST['c'];
            switch ($controlador) {
                case 1: //Store
                    self::Store();
                    break;
                case 2: //Eliminar
                    // self::destroy();

                    break;
                case 3: //Ver por operacion
                    self::show();

                    break;
                case 4:
                    // self::update();
                    break;
                case 5:

                    break;
                case 6:
                    //   self::CerrarSesion();
                    break;
            }
        }
    }
    public function Store()
    {
        $id_usuario =  $_SESSION['id'];
        $datos = [
            'fechaInicial'  => $_REQUEST['fechaInicial'],
            'fechaFinal'    => $_REQUEST['fechaFinal'],
            'id_jugador'    => $_REQUEST['nombre_completo'],
            'id_usuario'    => $id_usuario,
        ];


        $result =  $this->reportesModel->Store($datos);
        header("Location: ../views/Reportes/index.php");
    }
    public function show()
    {
        $id_reporte = $_REQUEST['reporte'];

        $reporte                  = $this->reportesModel->getReporteId($id_reporte);
        $datosJugador             = $this->reportesModel->DatosJugadorReporte($id_reporte);
        $totalMinutosJugados      = $this->reportesModel->getTotalMinutos($reporte);
        $totalPartidosJugados     = $this->reportesModel->getTotalPartidos($reporte);
        $totalEstadisticasPre     = $this->reportesModel->getTotalEstadPre($reporte);
        $totalEstadisticasPortero = $this->reportesModel->getTotalEstadPortero($reporte);
        $nuevasEstadisticas       = $this->reportesModel->getNuevaEstadistica($reporte);

        $params =
            http_build_query($reporte)
            . "&totalMinutosJugados="  . ($totalMinutosJugados)
            . "&totalPartidosJugados=" . ($totalPartidosJugados)
            . "&" . http_build_query($datosJugador)
            . "&" . http_build_query($totalEstadisticasPre)
            . "&" . http_build_query($totalEstadisticasPortero)
            . "&" . http_build_query($nuevasEstadisticas);

        // var_dump($nuevasEstadisticas);
        // die();



        header(
            "Location: ../Views/Reportes/VerReporteIndividual.php?" . $params
        );
    }

    public function getDateId()
    {
        $id_usuario = $_SESSION['id'];

        return $this->reportesModel->getById($id_usuario);
    }

    public function fechasReporte($items)
    {
        $items = [
            'fechaInicial' => ['fechaInicial'],
            'fechaFinal' => ['fechaFinal'],

        ];


        $this->reportesModel->getById($items);
        $result = $items;
        if ($result) {

            exit();
        }
    }
}