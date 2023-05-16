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
    public $results;
    private $db;


    public function __construct()
    {
        $this ->id;
        $this ->nombre_completo;
        $this ->apodo;
        $this->fecha_nacimiento;
        $this ->results;
        $this->db = new DataBase();
    }

 

    public function getbyId($id)
    {
        $operacion = [];

        try {
            $sql = "SELECT * FROM jugadores WHERE id = $id";
            $query  = $this->db->conect()->query($sql);


            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->nombre_completo        = $row['nombre_completo'];
                $item->apodo   = $row['apodo'];
                $item->fecha_nacimiento   = $row['fecha_nacimiento'];
                $item->fecha_nacimiento= $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];
              

                array_push($operacion, $item);
            }

            return $operacion;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
 
    
    public function store($datos)
    {

        try {

            $resultado = self::resultadoOperacion($datos);
            $sql = 'INSERT INTO jugadores (nombre_completo, apodo, fecha_nacimiento, caracteristicas) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'nombre_completo'   => $datos['nombre_completo'],
                'apodo'   => $datos['apodo'],
                'fecha_nacimiento' => $datos['fecha_nacimiento'],

            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function resultadoOperacion($datos)
    {
        switch ($datos['operacion']) {
            case '1': //Suma
                return $datos['n1'] + $datos['n2'];
                break;
            case '2': //Resta
                # code...
                return $datos['n1'] - $datos['n2'];
                break;
            case '3': //Multiplicación
                return $datos['n1'] * $datos['n2'];
                # code...
                break;
            case '4': //División
                return $datos['n1'] / $datos['n2'];
                # code...
                break;

            default:
                return false;
                break;
        }
    }

    // public function getAll()
    // {
    //     $items = [];

    //     try {

    //         $sql = 'SELECT jugadores.id, jugadores.nombre_completo, jugadores.apodo, jugadores.fecha_nacimiento, jugadores.caracteristicas, AS jugadores, jugadores.id FROM jugadores JOIN jugadores ON jugadores.jugadores = jugadores.id';
    //         $query  = $this->db->conect()->query($sql);


    //         while ($row = $query->fetch()) {
    //             $item            = new JugadorModel();
    //             $item->id        = $row['id'];
    //             $item->nombre_completo   = $row['nombre_completo'];
    //             $item->apodo   = $row['apodo'];
    //             $item->fecha_nacimiento = $row['fecha_nacimiento'];
    //             $item->caracteristicas = $row['caracteristicas'];

    //             array_push($items, $item);
    //         }

    //         return $items;
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // public function store($datos)
    // {

    //     try {

    //         $guardar = ($datos);
    //         $sql = 'INSERT INTO jugadores(nombre_completo, apodo, fecha_nacimiento, caracteristicas) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas)';

    //         $prepare = $this->db->conect()->prepare($sql);
    //         $query = $prepare->execute([
    //             'nombre_completo'   => $datos['nombre_completo'],
    //             'apodo'   => $datos['apodo'],
    //             'fecha_nacimiento' => $datos['fecha_nacimiento'],
    //             'caracteristicas' => $guardar,
    //         ]);

    //         if ($query) {
    //             return true;
    //         }
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }
    // public function update($datos)
    // {
    //     try {

    //         $guardar= ($datos);
    //         $sql = 'UPDATE jugadores SET nombre_completo = :nombre_completo, apodo = :apodo, fecha_nacimiento = :fecha_nacimiento,caracteristicas = :caracteristicas WHERE id = :id';

    //         $prepare = $this->db->conect()->prepare($sql);
    //         $query = $prepare->execute([
    //             'id'        => $datos['id'],
    //             'n1'   => $datos['n1'],
    //             'n2'   => $datos['n2'],
    //             'operacion' => $datos['operacion'],
    //             'resultado' => $guardar,
    //         ]);

    //         if ($query) {
    //             return true;
    //         }
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }
    // public function delete($id)
    // {
    //     try {
    //         $sql = "DELETE FROM jugadores WHERE id = :id";
    //         $prepare = $this->db->conect()->prepare($sql);
    //         $query = $prepare->execute([
    //             'id'   => $id,
    //         ]);

    //         if ($query) {
    //             return true;
    //         }
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

}
