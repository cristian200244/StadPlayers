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
                case 3:
                    self::stad();
                    break;
                case 4:
                    self::delete();
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
        $datos = new EstadisticasModel();
        $id_usuario = $datos->getByid();    

        // $id_usuario = $_SESSION['id'];
        $datos = [
            'id_jugador'        => $_REQUEST['id_jugador'],
            'fecha_del_partido' => $_REQUEST['fecha_del_partido'],
            'id_tipo_partido'   => $_REQUEST['id_tipo_partido'],
            'id_equipo'         => $_REQUEST['id_equipo'],
            'numero_partido'    => $_REQUEST['numero_partido'],
            'id_usuario'        => $id_usuario,
        ];

        $result = $this->estadistica->store($datos);

        if ($result) {
            header("Location: ../Views/Estadisticas/LlenarEstadistica.php");
            exit();
        }

        return $result;
    }

    public function stad()
    {

        $datos = [
            'nombre' => $_REQUEST['nombre'],
            'descripcion' => $_REQUEST['descripcion'],
            'tipo'         => $_REQUEST['tipo']
        ];

        $result = $this->estadistica->stad($datos);

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
            header("Location: ../Views/Estadisticas/VerEstadisticas.php");
            exit();
        } else {
            echo "No se pudo eliminar la estadistica, !Intentalo nuevamente";
        }
    }
}
