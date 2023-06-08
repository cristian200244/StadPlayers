<?php
include_once __DIR__ . '../../config/config_example.php';
require_once 'conexionModel.php';

class JugadorModel extends stdClass
{
    public $id;
    public $nombre_completo;
    public $apodo;
    public $fecha;
    public $fecha_inicial;
    public $fecha_terminacion;
    public $fecha_nacimiento;
    public $caracteristicas;
    public $id_equipo;
    public $id_liga;
    public $id_pais;
    public $id_contiente;
    public $id_posicion;
    public $id_perfil;
    // public $id_historial_equipos;
    public $guardar;
    public $resultado;
    private $db;

    public function __construct()
    {
        $this->id;

        $this->guardar;

        $this->db = new DataBase();
    }
    public function getId()
    {
        return $this->id;
    }


    public function getAll()
    {
        $items = [];

        try {
            $sql = 'SELECT j.*, c.nombre AS nombre_continente, eq.equipo, l.nombre 
            AS nombre_liga, p.nombre_pais, pf.nombre AS nombre_perfil, ps.descripcion AS descripcion_posicion
            FROM jugadores j
            JOIN continentes c ON j.id_contiente = c.id
            JOIN equipos eq ON j.id_equipo = eq.id
            JOIN ligas l ON j.id_liga = l.id
            JOIN paises p ON j.id_pais = p.id
            JOIN perfiles pf ON j.id_perfil = pf.id
            JOIN posiciones ps ON j.id_posicion = ps.id';

            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item                   =   new JugadorModel();
                $item->id               =  $row['id'];
                $item->nombre_completo  =  $row['nombre_completo'];
                $item->apodo            =  $row['apodo'];
                $item->fecha_nacimiento =  $row['fecha_nacimiento'];
                $item->caracteristicas  =  $row['caracteristicas'];
                $item->id_equipo        =  $row['equipo'];
                $item->id_liga          =  $row['nombre_liga'];
                $item->id_pais          =  $row['nombre_pais'];
                $item->id_contiente     =  $row['nombre_continente'];
                $item->id_posicion      =  $row['descripcion_posicion'];
                $item->id_perfil        =  $row['nombre_perfil'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getbyId($id)
    {
        $resultado = [];

        try {
            $sql = "SELECT * FROM jugadores WHERE id = $id";
            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item                   = new JugadorModel();
                $item->nombre_completo  = $row['nombre_completo'];
                $item->apodo            = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas  = $row['caracteristicas'];
                $item->id_equipo        = $row['id_equipo'];
                $item->id_liga          = $row['id_liga'];
                $item->id_pais          = $row['id_pais'];
                $item->id_contiente     = $row['id_contiente'];
                $item->id_perfil        = $row['id_perfil'];


                array_push($resultado, $item);
            }

            return $resultado;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function guardar($data)
    {
        try {
            $sql = 'INSERT INTO historial_equipos (id_jugador, fecha_inicial, fecha_terminacion, id_equipo)
            VALUES ((SELECT MAX(id) FROM jugadores), :fecha_inicial, :fecha_terminacion, :id_equipo)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'fecha_inicial' => $data['fecha_inicial'],
                'fecha_terminacion' => $data['fecha_terminacion'],
                'id_equipo' => $data['id_equipo']
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return false;
    }

    public function getObtener()
    {
        $items = [];

        try {
            $sql = 'SELECT historial_equipos.id, (SELECT MAX(id) FROM jugadores) AS id_jugador, historial_equipos.fecha_inicial, historial_equipos.fecha_terminacion, historial_equipos.id_equipo
                FROM historial_equipos
                JOIN equipos ON historial_equipos.id_equipo = equipos.id';

            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->id_jugador = $row['id_jugador'];
                $item->fecha_inicial = $row['fecha_inicial'];
                $item->fecha_terminacion = $row['fecha_terminacion'];
                $item->id_equipo = $row['id_equipo'];

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


            $sql = 'INSERT INTO jugadores(nombre_completo, apodo, fecha_nacimiento, caracteristicas, id_equipo, id_liga, id_pais, id_contiente, id_posicion, id_perfil) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas, :id_equipo, :id_liga, :id_pais, :id_contiente, :id_posicion, :id_perfil)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([

                'nombre_completo'       => $datos['nombre_completo'],
                'apodo'                 => $datos['apodo'],
                'fecha_nacimiento'      => $datos['fecha_nacimiento'],
                'caracteristicas'       => $datos['caracteristicas'],
                'id_equipo'             => $datos['id_equipo'],
                'id_liga'               => $datos['id_liga'],
                'id_pais'               => $datos['id_pais'],
                'id_contiente'          => $datos['id_contiente'],
                'id_posicion'           => $datos['id_posicion'],
                'id_perfil'             => $datos['id_perfil'],

            ]);

            if ($query) {

                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    }


    public function update($datos)
    {
        try {


            $sql = 'UPDATE jugadores SET nombre_completo = :nombre_completo, apodo = :apodo, fecha_nacimiento = :fecha_nacimiento, caracteristicas = :caracteristicas, id_equipo = :id_equipo,  id_liga = :id_liga, id_pais = :id_pais, id_contiente = :id_contiente, id_posicion = :id_posicion, id_perfil = :id_perfil  WHERE id = :id';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id'                    => $datos['id'],
                'nombre_completo'       => $datos['nombre_completo'],
                'apodo'                 => $datos['apodo'],
                'fecha_nacimiento'      => $datos['fecha_nacimiento'],
                'caracteristicas'       => $datos['caracteristicas'],
                'id_equipo'             => $datos['id_equipo'],
                'id_liga'               => $datos['id_liga'],
                'id_pais'               => $datos['id_pais'],
                'id_contiente'          => $datos['id_contiente'],
                'id_posicion'           => $datos['id_posicion'],
                'id_perfil'             => $datos['id_perfil'],

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
    public function BorrarHistorial($id)
    {
        try {
            $sql = "DELETE FROM historial_equipos WHERE id = :id";
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

    // public function getUltimoJugador()
    // {

    //     $items = [];
    //     try {
    //         $sql = 'SELECT titulos_jugador.fecha, equipos.id AS id_equipo, copas.id AS id_copa, jugadores.id AS id_jugador, historial_equipos.fecha_inicial, historial_equipos.fecha_terminacion
    //         FROM titulos_jugador
    //         JOIN equipos ON titulos_jugador.id_equipo = equipos.id
    //         JOIN copas ON titulos_jugador.id_copa = copas.id
    //         JOIN jugadores ON titulos_jugador.id_jugador = jugadores.id
    //         JOIN historial_equipos ON jugadores.id = historial_equipos.id_jugador
    //         WHERE jugadores.id = (SELECT MAX(id) FROM jugadores)';

    //         $query = $this->db->conect()->prepare($sql);


    //         while ($registro = $query->fetch()) {

    //             $item  = new JugadorModel();
    //             $item->id  = $registro['id'];
    //             $item->fecha_inicial  = $fecha_inicial['fecha_inicial'];
    //             $item->fecha_terminacion  = $fecha_inicial['fecha_terminacion'];
    //             $item->id_equipo  = $id_equipo['id_equipo'];
    //             $item->id_copa  = $id_copa['id_copa'];
    //             $item->id_jugador  = $id_jugador['id_jugador'];



    //             array_push($items, $item);
    //         }
    //         return $items;

    //     } catch (PDOException $e) {
    //         echo $e->getMessage();

    //         return false;
    //     }
    // }


    // public function titulos()
    // {
    //     $items = [];
    //     try {

    //         $sql = 'SELECT titulos_jugador.fecha, equipos.id AS id_equipo, copas.id AS id_copa, jugadores.id AS id_jugador, historial_equipos.fecha_inicial, historial_equipos.fecha_terminacion
    //         FROM titulos_jugador
    //         JOIN equipos ON titulos_jugador.id_equipo = equipos.id
    //         JOIN copas ON titulos_jugador.id_copa = copas.id
    //         JOIN jugadores ON titulos_jugador.id_jugador = jugadores.id
    //         JOIN historial_equipos ON jugadores.id = historial_equipos.id_jugador
    //         WHERE jugadores.id = (SELECT MAX(id) FROM jugadores)';
    //         $query  = $this->db->conect()->query($sql);


    //         while ($row = $query->fetch()) {
    //             $item            = new JugadorModel();
    //             $item->id        = $row['id'];
    //             $item->fecha                 = $row['fecha'];
    //             $item->id_equipo           = $row['id_equipo'];
    //             $item->id_copa               = $row['id_copa'];
    //             $item->id_jugador            = $row['id_jugador'];

    //             array_push($items, $item);
    //         }

    //         return $items;
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    //Equipos
    public function getid_equipos()
    {
        return $this->nombre;
    }

    public function equipos()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, equipo FROM equipos';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['equipo'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //ligas
    public function getid_ligas()
    {
        return $this->nombre;
    }

    public function ligas()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, nombre FROM ligas';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getid_paises()
    {
        return $this->nombre;
    }

    public function paises()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, nombre_pais FROM paises';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre_pais'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getid_continentes()
    {
        return $this->nombre;
    }

    public function continentes()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, nombre_continente FROM paises';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre_continente'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getid_perfil()
    {
        return $this->nombre;
    }

    public function perfiles()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, nombre FROM perfiles';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getid_posicion()
    {
        return $this->nombre;
    }

    public function posiciones()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, descripcion FROM posiciones';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['descripcion'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getid_copa()
    {
        return $this->nombre;
    }

    public function copas()
    {
        $items = [];
        try {
            $sql = 'SELECT  id, nombre FROM copas';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
