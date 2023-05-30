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

        $datos = [
            'id'  => $_REQUEST['reporte'],
        ];

        
        $this->reportesModel->getReporteId($datos);
     
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

        // var_dump($items);
        $this->reportesModel->getById($items);
        $result = $items;
        if ($result) {

            exit();
        }
    }
}
