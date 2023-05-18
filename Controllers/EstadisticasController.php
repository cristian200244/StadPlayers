<?php

require_once '../Models/EstadisticasModel.php';

$estadistica = new EstadisticasController;

class EstadisticasController
{
    private $estadistica;

    public function __construct()
    {
        $this->estadistica = new EstadisticasModel();

        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1:
                    self::store();
                    break;
                case 2:
                    self::update();
                    break;
                default:
                    self::index();
                    break;
            }
        }
    }

    public function index()
    {

        return $this->estadistica->getAll();
    }



    public function store()
    {
    }

    public function update()
    {
        $datos = [
            'id'     => $_REQUEST['id'],
            'valor'  => $_REQUEST['valor'],
        ];

        $result = $this->estadistica->update($datos);

        if ($result) {
            echo json_encode(array('success' => 1, 'valor' => $datos['valor']));
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $result = $this->estadistica->delete($id);
        if ($result) {
            header("Location: ../Views/Estadisticas/index.php");
            exit();
        }
    }
}
