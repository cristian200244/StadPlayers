<?php
include_once dirname(__FILE__) . '../../config/config_example.php';

require_once 'conexionModel.php';
class JugadorModel extends stdClass
{

    public $id;
    public $nombre_completo;
    public $apodo;
    public $perfil;
    public $posicion;
    public $pais;
    public $equipo;
    public $equipo_anterior;
    public $liga;
    public $continente;
    public $caracteristicas;


    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getId()
    {
        return $this->id;
    }

}
