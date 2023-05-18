<?php

require_once __DIR__ . '../../config/config_example.php';
require_once 'conexionModel.php';


class EstadisticasModel extends stdClass
{

    public $id;
    public $nombre;
    public $valor;
    private $db;


    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getbyId($id)
    {
        $operacion = [];

        try {
            $sql = "SELECT nombre, valor FROM estadisticas JOIN estadisticas_count WHERE id = $id";
            $query  = $this->db->conect()->query($sql);


            while ($row = $query->fetch()) {
                $item            = new EstadisticasModel();
                $item->id        = $row['id'];
                $item->nombre   = $row['nombre'];
                $item->valor   = $row['valor'];

                array_push($operacion, $item);
            }

            return $operacion;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        $items = [];

        try {

            $sql = 'SELECT ec.id AS id, e.nombre, ec.valor
            FROM estadisticas_count AS ec
            JOIN estadisticas AS e ON e.id = ec.id_estadistica';
            $query  = $this->db->conect()->query($sql);

            while ($registro = $query->fetch()) {
                $item         = new EstadisticasModel();
                $item->id     = $registro['id'];
                $item->nombre = $registro['nombre'];
                $item->valor  = $registro['valor'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    public function store($datos)
    {
    }

    public function update($datos)
    {

        try {
            $sql = 'UPDATE estadisticas_count SET valor = :valor WHERE id = :id';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id'    => $datos['id'],
                'valor' => $datos['valor'],
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($id)
    {
    }
}
