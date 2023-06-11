<?php
require_once '../Models/JugadorModel.php';

$jugadorController = new JugadorController();

class JugadorController
{
    private $jugadorModel;

    public function __construct()
    {
        $this->jugadorModel = new JugadorModel();

        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1:
                    $this->store();
                    break;
                case 2:
                    $this->show();
                    break;
                case 3:
                    $this->update();
                    break;
                case 4:
                    $this->delete();
                    break;
                case 5:
                    $this->guardar();
                    break;
                case 6:
                    $this->BorrarHistorial();
                    break;
                case 7:
                    $this->titulos();
                    break;
                default:
                    $this->index();
                    break;
            }
        }
    }

    public function index()
    {
        return $this->jugadorModel->getAll();
    }

    public function store()
    {
        $datos = [
            'nombre_completo' => $_POST['nombre_completo'],
            'apodo' => $_POST['apodo'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
            'caracteristicas' => $_POST['caracteristicas'],
            'id_equipo' => $_POST['id_equipo'],
            'id_liga' => $_POST['id_liga'],
            'id_pais' => $_POST['id_pais'],
            'id_contiente' => $_POST['id_contiente'],
            'id_posicion' => $_POST['id_posicion'],
            'id_perfil' => $_POST['id_perfil']
        ];

        $result = $this->jugadorModel->store($datos);

        if ($result) {

            header("Location: ../views/jugadores/VerJugadores.php");
            exit();
        }
        return $result;
    }

    public function guardar()
    {

        $datos = [
            
            'id_jugador' => $_POST['id_jugador'],
            'fecha_inicial' => $_POST['fecha_inicial'],
            'fecha_terminacion' => $_POST['fecha_terminacion'],
            'id_equipo' => $_POST['id_equipo'],

        ];

        $result = $this->jugadorModel->guardar($datos);

        if ($result) {

            header("Location: ../views/jugadores/historial.php");
            exit();
        }
        return $result;
    }

    public function titulos()
    {

        $datos = [
            'id_jugador' => $_POST['id_jugador'],
            'fecha' => $_POST['fecha'],
            'id_copa' => $_POST['id_copa'],
            'id_equipo' => $_POST['id_equipo'],

        ];

        $result = $this->jugadorModel->titulos($datos);

        if ($result) {

            header("Location: ../views/jugadores/titulos.php");
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
            'id' => $_POST['id'],
            'nombre_completo' => $_POST['nombre_completo'],
            'apodo' => $_POST['apodo'],
            'fecha_nacimiento' => $_POST['fecha_nacimiento'],
            'caracteristicas' => $_POST['caracteristicas'],
            'id_equipo' => $_POST['id_equipo'],
            'id_liga' => $_POST['id_liga'],
            'id_pais' => $_POST['id_pais'],
            'id_contiente' => $_POST['id_contiente'],
            'id_posicion' => $_POST['id_posicion'],
            'id_perfil' => $_POST['id_perfil']
        ];

        $result = $this->jugadorModel->update($datos);

        if ($result) {
            header("Location: ../views/jugadores/verJugadores.php");
            exit();
        }
        return $result;
    }


    public function delete()
    {
        $id = $_REQUEST['id'];
        $result = $this->jugadorModel->delete($id);
        if ($result) {
            header("Location: ../views/jugadores/VerJugadores.php");
            exit();
        }
    }


    public function BorrarHistorial()
    {
        $id = $_REQUEST['id'];
        $result = $this->jugadorModel->delete($id);
        if ($result) {
            header("Location: ../views/jugadores/historial.php");
            exit();
        }
    }
}

    // public function titulos()
    // {
    //     $datos = [
    //         'fecha' => $_POST['fecha'],
    //         'fecha_inicial' => $_POST['fecha_inicial'],
    //         'fecha_terminacion' => $_POST['fecha_terminacion'],
    //         'id_jugador' => $_POST['id_equipo'],
    //         'id_copa' => $_POST['id_copa']
    //     ];

    //     var_dump($datos);
    //     die();

    //     $result = $this->jugadorModel->titulos($datos);

    //     if ($result) {
    //         header("Location: ../views/jugadores/index.php");
    //         exit();
    //     }
    // }
