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
            $controlador = $_REQUEST['c'];
            switch ($controlador['c']) {
                case 1: //Almacenar en la base de datos
                    self::store();
                    break;
            }
        }
    }





    public function store()
    {
        $datos = [

            'nombre_completo' => $_REQUEST['nombre_completo'],
            'apodo' => $_REQUEST['apodo'],
            'fecha_nacimiento' => $_REQUEST['fecha_nacimiento'],
            'caracteristicas' => $_REQUEST['caracteristicas'],
           
        ];


        $result = $this->jugador->store($datos);

        if ($result) {
            
        }

      
    }
}
