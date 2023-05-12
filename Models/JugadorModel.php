<?php
include_once dirname(__FILE__) . '../../config/config_example.php';

require_once 'conexionModel.php';
class JugadorModel extends stdClass
{

    public $id;
    public $nombre_completo;
    public $apodo;
    public $fecha_nacimiento;
    public $caracteristicas;
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
        $guardar = [];

        try {
            $sql = "SELECT * FROM jugador WHERE id = $id";
            $query  = $this->db->conect()->query($sql);


            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->id        = $row['id'];
                $item->nombre_completo   = $row['nombre_completo'];
                $item->apodo   = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];

                array_push($guardar, $item);
            }

            return $guardar;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAll()
    {
        $items = [];

        try {

            $sql = 'SELECT jugadores.id, jugadores.nombre_completo, jugadores.apodo, jugadores.fecha_nacimiento, jugadores.caracteristicas, jugador.nombre_completo AS jugador, jugadores.id FROM jugadores JOIN jugador ON jugadores.jugador = jugador.id';
            $query  = $this->db->conect()->query($sql);


            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->id        = $row['id'];
                $item->nombre_completo   = $row['nombre_completo'];
                $item->apodo   = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function store($datos)
    {

        try {

            $guardar = ($datos);
            $sql = 'INSERT INTO jugadores(nombre_completo, apodo, fecha_nacimiento, caracteristicas) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'nombre_completo'   => $datos['nombre_completo'],
                'apodo'   => $datos['apodo'],
                'fecha_nacimiento' => $datos['fecha_nacimiento'],
                'caracteristicas' => $guardar,
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function update($datos)
    {
        try {

            $guardar= ($datos);
            $sql = 'UPDATE jugadores SET nombre_completo = :nombre_completo, apodo = :apodo, fecha_nacimiento = :fecha_nacimiento,caracteristicas = :caracteristicas WHERE id = :id';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id'        => $datos['id'],
                'n1'   => $datos['n1'],
                'n2'   => $datos['n2'],
                'operacion' => $datos['operacion'],
                'resultado' => $guardar,
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
        try {
            $sql = "DELETE FROM jugadores WHERE id = :id";
            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id'   => $id,
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}
