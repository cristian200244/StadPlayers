

<?php

require_once '../Models/GenerarReportesModel.php';


//Instanciando la clase CalculadoraController
$usuario = new ReportesController();

class ReportesController
{
    private $reportesModel;
    public function __construct()
    {
        $this->reportesModel = new ReportesModel();
        
        if (isset($_REQUEST['c'])) {
            $controlador = $_REQUEST['c'];
            switch ($controlador) {
                case 1: //Store
                    print_r('aqui se va guardar el reporte...');
                    self::Store();
                    break;
                    case 2: //Eliminar
                    // self::destroy();
                    
                    break;
                case 3: //Ver por operacion
                    // self::show();
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
        $datos = [
            'fechaInicial' => $_REQUEST['fechaInicial'],
            'fechaFinal' => $_REQUEST['fechaFinal'],
            'jugadores' => $_REQUEST['jugadores'],
        ];
        
      

         $result =  $this->reportesModel->Store($datos);
    }
}
