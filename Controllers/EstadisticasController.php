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
        $datos = [
            'id_jugador'        => $_REQUEST['id_jugador'],
            'fecha_del_partido' => $_REQUEST['fecha_del_partido'],
            'id_tipo_partido'   => $_REQUEST['id_tipo_partido'],
            'id_equipo'         => $_REQUEST['id_equipo'],
            'equipo_rival'      => $_REQUEST['equipo_rival'],
            'numero_partido'    => $_REQUEST['numero_partido'],
        ];

        $result = $this->estadistica->store($datos);


        if ($result) {
            header("Location: ../Views/Estadisticas/LlenarEstadistica.php");
            exit();
        } 
        return $result;
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
