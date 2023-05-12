<?php

require_once("conexionModel.php");

class ReportesModel
{

    public $id;
    public $nombre_completo;
    private $db;


    public function __construct()
    {
        //Instanciar la base de datos en el constructor para poder realizar consultas
        $this->db = new Database();
    }

    //metodos mágicos
    public function getId()
    {
        return $this->id;
    }

    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    public function getPlayers()
    {
        $items = [];

        try {
            $sql = 'SELECT id, nombre_completo FROM jugadores WHERE id_usuario= 1';

            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item       = new  ReportesModel();
                $item->id   = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}