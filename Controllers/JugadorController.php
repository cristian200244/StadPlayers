<?php

require_once '../../Models/JugadorModel.php';
$jugadores = new JugadorController;

class JugadorController{
private $jugadores;



    

    public function __construct()
    {
        $this->jugadores = new JugadorController();
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
            'perfiles' => $_REQUEST['perfiles'],
          
        ];
        
        
        $result = $this->jugadores->store($datos);
        
        if ($result) {
            header("Location:  ../views/jugadores/index.php");
            exit();
        }
        
        return $result;
    }