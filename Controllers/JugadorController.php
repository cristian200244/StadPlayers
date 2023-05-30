
<?php
require_once '../Models/JugadorModel.php';

$jugador = new JugadorController();

class JugadorController
{
    private $jugador;

    public function __construct()
    {
        $this->jugador = new JugadorModel();

        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1:
                    self::store();
                    break;
                case 2: //Ver usuario
                    self::show();
                    break;
                case 3: //Actualizar el registro 
                    self::update();
                    break;
                case 4: //Actualizar el registro 
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
        return $this->jugador->getAll();
    }

    public function store()
    {

        $datos = [
            'nombre_completo'       => $_REQUEST['nombre_completo'],
            'apodo'                 => $_REQUEST['apodo'],
            'fecha_nacimiento'      => $_REQUEST['fecha_nacimiento'],
            'caracteristicas'       => $_REQUEST['caracteristicas'],
            'id_equipo'             => $_REQUEST['id_equipo'],
            'id_liga'               => $_REQUEST['id_liga'],
            'id_pais'               => $_REQUEST['id_pais'],
            'id_contiente'          => $_REQUEST['id_contiente'],
            'id_posicion'           => $_REQUEST['id_posicion'],
            'id_perfil'             => $_REQUEST['id_perfil'],

        ];

        $result = $this->jugador->store($datos);

        if ($result) {
            header("Location: ../views/jugadores/VerJugadores.php");
            exit();
        }
        return $result;
    }

    public function show()
    {
        $id = $_REQUEST['id'];
        header("Location:  ../views/jugadores/editar.php?id=$id");
    }

    public function update()
    {

        $datos = [
            'id'                    => $_REQUEST['id'],
            'nombre_completo'       => $_REQUEST['nombre_completo'],
            'apodo'                 => $_REQUEST['apodo'],
            'fecha_nacimiento'      => $_REQUEST['fecha_nacimiento'],
            'caracteristicas'       => $_REQUEST['caracteristicas'],
            'id_equipo'             => $_REQUEST['id_equipo'],
            'id_liga'               => $_REQUEST['id_liga'],
            'id_pais'               => $_REQUEST['id_pais'],
            'id_contiente'          => $_REQUEST['id_contiente'],
            'id_posicion'           => $_REQUEST['id_posicion'],
            'id_perfil'             => $_REQUEST['id_perfil'],
        ];

        $result = $this->jugador->update($datos);

        if ($result) {
            header("Location: ../views/jugadores/index.php");
        }
        exit();

        return $result;
    }

    public function delete()
    {
        // var_dump($_REQUEST);
        $id = $_REQUEST['id'];
        $result = $this->jugador->delete($id);
        if ($result) {
            header("Location: ../views/jugadores/VerJugadores.php");
            exit();
        }
    }
}
