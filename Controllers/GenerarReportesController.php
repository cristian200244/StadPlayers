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
        $datosReporte = [];

        $id_reporte = $_REQUEST['reporte'];

        $reporte              = $this->reportesModel->getReporteId($id_reporte);
        $datosJugador         = $this->reportesModel->DatosJugadorReporte($id_reporte);
        $totalMinutosJugados  = $this->reportesModel->getTotalMinutos($reporte);
        $totalPartidosJugados = $this->reportesModel->getTotalPartidos($reporte);
        $totalEstadisticas    = $this->reportesModel->getTotalEstadisticas($reporte);
        $nuevaEstadistica     = $this->reportesModel->getNuevaEstadistica($reporte);


        $params['IdReporte']       = $id_reporte;
        $params["FechaInicial"]     = $reporte->fechaInicial;
        $params["FechaFinal"]       = $reporte->fechaFinal;
        $params["IdJugador"]       = $reporte->id_jugador;
        $params["id"]               = $datosJugador->id;
        $params["NombreCompleto"]  = $datosJugador->nombre_completo;
        $params["apodo"]            = $datosJugador->apodo;
        $params["equipo"]           = $datosJugador->equipo;
        $params["nombre"]           = $datosJugador->liga;
        $params["descripcion"]      = $datosJugador->posicion;
        $params["TotalMinutos"]     = $totalMinutosJugados;
        $params["TotalPartidos"]    = $totalPartidosJugados;

        $params["PasesAcertados"]               = $totalEstadisticas["Pases acertados"];
        $params["PasesErrados"]                 = $totalEstadisticas["Pases errados"];
        $params["TirosAlArco"]                  = $totalEstadisticas["Tiros al arco"];
        $params["AsistenciasDeGol"]             = $totalEstadisticas["Asistencias de Gol"];
        $params["RechazosBienDirigidos"]        = $totalEstadisticas["Rechazos bien dirigidos"];
        $params["RechazosMalDirigidos"]         = $totalEstadisticas["Rechazos mal dirigidos"];
        $params["PerdidasDeBalon"]              = $totalEstadisticas["Perdidas de balon"];
        $params["PerdidasDeBalonPerjudiciales"] = $totalEstadisticas["Perdidas de balon perjudiciales"];
        // $params["MinutosJugados"]               = $totalEstadisticas["Minutos Jugados"];
        $params["GolesAnotados"]                = $totalEstadisticas["Goles Anotados"];
        $params["AmarillasRecibidas"]           = $totalEstadisticas["Amarillas Recibidas"];
        $params["RojasRecibidas"]               = $totalEstadisticas["Roja Recibida"];

        $params["AtajadaHeroica"]               = $totalEstadisticas["Atajada Heroica"];
        $params["PenalesAtajados"]              = $totalEstadisticas["Penales atajados"];
        $params["ExitoManoAMano"]               = $totalEstadisticas["exitos en mano a mano"];
        $params["NuevaEstadistica"]             = $nuevaEstadistica;

        $datosReporte =
            $params['IdReporte']                   . "|" .
            $params["FechaInicial"]                . "|" .
            $params["FechaFinal"]                  . "|" .
            $params["IdJugador"]                  . "|" .
            $params["id"]                          . "|" .
            $params["NombreCompleto"]             . "|" .
            $params["apodo"]                       . "|" .
            $params["equipo"]                      . "|" .
            $params["nombre"]                      . "|" .
            $params["descripcion"]                 . "|" .
            $params["TotalMinutos"]                . "|" .
            $params["TotalPartidos"]               . "|" .


            $params["PasesAcertados"]         . "|" .
            $params["PasesErrados"]           . "|" .
            $params["TirosAlArco"]            . "|" .
            $params["AsistenciasDeGol"]       . "|" .
            $params["RechazosBienDirigidos"]  . "|" .
            $params["RechazosMalDirigidos"]   . "|" .
            $params["PerdidasDeBalon"]   . "|" .
            $params["PerdidasDeBalonPerjudiciales"] . "|" .
            // $params["MinutosJugados"]  . "|" .
            $params["GolesAnotados"]             . "|" .
            $params["AmarillasRecibidas"]        . "|" .
            $params["RojasRecibidas"]            . "|" .

            $params["AtajadaHeroica"]            . "|" .
            $params["PenalesAtajados"]           . "|" .
            $params["ExitoManoAMano"]            . "|" .
            $params[implode($params["NuevaEstadistica"])];




        // var_dump($params["NuevaEstadistica"]);
        // die();



        header("Location: ../Views/Reportes/VerReporteIndividual.php?params=" . $datosReporte);
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