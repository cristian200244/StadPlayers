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

        $params = [];
        $id_reporte = $_REQUEST['reporte'];

        $reporte        = $this->reportesModel->getReporteId($id_reporte);
        $datosJugador   = $this->reportesModel->DatosJugadorReporte($id_reporte);

        $totalMinutosJugados = $this->reportesModel->getTotalMinutos($reporte);


        $params['id_reporte']       = $id_reporte;
        $params["fechaInicial"]     = $reporte->fechaInicial;
        $params["fechaFinal"]       = $reporte->fechaFinal;
        $params["id_jugador"]       = $reporte->id_jugador;
        $params["id_jugador"]       = $datosJugador->id;
        $params["id"]               = $datosJugador->id;
        $params["nombre_completo"]  = $datosJugador->nombre_completo;
        $params["apodo"]            = $datosJugador->apodo;
        $params["equipo"]           = $datosJugador->equipo;
        $params["nombre"]           = $datosJugador->liga;
        $params["descripcion"]      = $datosJugador->posicion;
        $params["totalMinutos"]     = $totalMinutosJugados;


        $DatosReporte = [];


        $DatosReporte = $params['id_reporte'] . '<br>' . $params["fechaInicial"] .  '<br>' .
            $params["fechaFinal"] . '<br>' . $params["id_jugador"]   .  '<br>' .
            $params["id_jugador"] . '<br>' . $params["id"] .             '<br>' .
            $params["nombre_completo"] . '<br>' . $params["apodo"] .        '<br>' .
            $params["equipo"] .         '<br>' . $params["nombre"] .       '<br>' .
            $params["totalMinutos"] .   '<br>' . $params["descripcion"];
        '<br>' .

            header("Location: ../Views/Reportes/VerReporteIndividual.php?b=" . $DatosReporte);


        // header("Location:Location: ../Views/Reportes/VerReporteIndividual.php?//$mensaje");



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