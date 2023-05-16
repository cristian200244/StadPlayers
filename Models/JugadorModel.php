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
    public $pefiles;
   
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
    public function getAll()
    {
        $items = [];

        try {

            $sql = 'SELECT jugadores.id, jugadores.nombre_completo, jugadores.fecha_nacimiento, jugadores.caracterisitcas, perfiles.nombre, posiciones.descripcion, equipos.equipo, historial_equipos.id_equipo, ligas.nombre, continentes.nombre AS  perfiles, jugadores.id_perfil, posiciones, jugadores.id_posicion, paises, jugadores.id_pais, equipos, jugadores.id_equipos, historial_equipos, juagadores.id_historial_equipos, ligas, jugadores.id_liga, continentes, jugadores.id_continente FROM perfiles, posiciones, paises, equipos, historial_equipos, ligas,continentes JOIN  perfiles, posiciones, paises, equipos. historial_equipos, ligas,continentes ON jugadores.id_equipo = equipos.id';

            // ,jugadores.id_liga = ligas.id, jugadores.id_pais = paises.is, jugadores.id_continente = continentes.id, jugadores.id_posicion = posiciones.id, jugadores.id_perfil = perfiles.id, jugadores.id_historial_equipos = historial_equipos.id';
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
