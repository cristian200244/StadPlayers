
<?php
require_once '../Models/JugadorModel.php';

$jugador = new JugadorController();

class JugadorController
{
    private $jugador;

    public function __construct()
    {
        $this->jugador = new EstadisticasModel();

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
        return $this->jugador->getAll();
    }

    public function store()
    {
        $datos = [
            'nombre_completo' => $_REQUEST['nombre_completo'],
            'apodo' => $_REQUEST['apodo'],
            'fecha_nacimiento' => $_REQUEST['fecha_nacimiento'],
            'caracteristicas' => $_REQUEST['caracteristicas'],
            'id_usuario' => $_REQUEST['id_usuario'],
            'id_equipo' => $_REQUEST['id_equipo'],
            'id_liga' => $_REQUEST['id_liga'],
            'id_pais' => $_REQUEST['id_pais'],
            'id_contiente' => $_REQUEST['id_contiente'],
            'id_posicion' => $_REQUEST['id_posicion'],
            'id_perfil' => $_REQUEST['id_perfil'],
            'id_historial_equipos' => $_REQUEST['id_historial_equipos'],
        ];

        $result = $this->jugador->store($datos);

        if ($result) {
            header("Location: ../views/jugadores/index.php");
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

        $result = $this->jugador->update($datos);

        if ($result) {
            echo json_encode(array('success' => 1, 'valor' => $datos['valor']));
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $result = $this->jugador->delete($id);
        if ($result) {
            header("Location: ../Views/Estadisticas/index.php");
            exit();
        }
    }
}
