<?php
require_once '../../Models/EstadisticasModel.php';

class Controller{
    private $modelo;

    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }
    
    public function suma($cantidad)
    {
        $this->modelo->suma($cantidad);
    }

    public function resta($cantidad)
    {
        $this->modelo->resta($cantidad);
    }

    public function getValor()
    {
        return $this->modelo->getValor();
    }
}


?>