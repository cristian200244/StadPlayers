<?php

require_once '../Models/JugadorModel.php';
$jugadores = new JugadorController;

class JugadorController
{
    private $jugadores;

    public function __construct()
    {
        $this->jugadores = new JugadorModel();
        var_dump($_REQUEST);
        echo "<hr>";
        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case 1: //Almacenar en la base de datos
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
        return $this->jugadores->getAll();
    }

    
    public function store()
    {
        $datos = [
            'n1' => $_REQUEST['n1'],
            'n2' => $_REQUEST['n2'],
            'operacion' => $_REQUEST['operacion']
        ];
        
        
        $result = $this->jugadores->store($datos);
        
        if ($result) {
            header("Location:  ../views/index.php");
            exit();
        }
        
        return $result;
    }
    public function show()
    {
        $id = $_REQUEST['id'];
        header("Location:  ../Views/editar.php?id=$id");
    }

    public function update()
    {

        $datos = [
            'id'        => $_REQUEST['id'],
            'n1'   => $_REQUEST['n1'],
            'n2'   => $_REQUEST['n2'],
            'operacion' => $_REQUEST['operacion']
        ];

        $result = $this->jugadores->update($datos);

        if ($result) {
            header("Location: ../Views/index.php");
        }
        exit();

        return $result;
    }

    public function delete()
    {
        // var_dump($_REQUEST);
        $id = $_REQUEST['id'];
        $result = $this->jugadores->delete($id);
        if ($result) {
            header("Location: ../Views/index.php");
            exit();
        }
    }
}

