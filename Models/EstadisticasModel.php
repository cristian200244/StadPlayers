<?php

require_once __DIR__ . '../../config/config_example.php';
require_once 'conexionModel.php';



class EstadisticasModel extends stdClass
{


    public $id;
    public $nombre;
    public $valor;
    public $nombre_completo;
    public $equipo;
    private $db;


    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function getId()
    {
        return $this->id;
    }


    public function getbyId($id_encuentro)
    {
        $operacion = [];

        try {
            // Obtener el último ID
            $lastId = $id_encuentro;

            $sql = "SELECT estadisticas_count.id, nombre, valor
            FROM estadisticas_count
            JOIN estadisticas ON estadisticas_count.id_estadistica = estadisticas.id
            JOIN posiciones ON posiciones.id = estadisticas.id_posicion
            WHERE id_encuentro_estadistica = :lastId";

            $query  = $this->db->conect()->query($sql);
            $query->bindParam(':lastId', $lastId);
            $query->execute();

            while ($row = $query->fetch()) {
                $item            = new EstadisticasModel();
                $item->id        = $row['id'];
                $item->nombre    = $row['nombre'];
                $item->valor     = $row['valor'];
                $id_posicion     = $row['id_posicion'];


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



    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }



    public function getPlayers()
    {
        $items = [];

        try {
            $sql = 'SELECT id, nombre_completo FROM jugadores';

            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item       = new  EstadisticasModel();
                $item->id   = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    public function  getEquipo()
    {
        return $this->equipo;
    }



    public function equipos()
    {
        $items = [];

        try {
            $sql = 'SELECT id, equipo FROM equipos';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item           = new EstadisticasModel();
                $item->id       = $row['id'];
                $item->equipo   = $row['equipo'];

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    public function getTipoPartido()
    {
        return $this->nombre;
    }



    public function TipoPartido()
    {
        $items = [];

        try {
            $sql = 'SELECT id, nombre FROM tipo_partido';
            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item            = new EstadisticasModel();
                $item->id        = $row['id'];
                $item->nombre    = $row['nombre'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }



    public function getNumeroPartido()
    {
        return $this->num_partido;
    }



    public function NumeroPartido()
    {
        $items = [];
        try {
            $sql = 'SELECT id, num_partido FROM numero_partido';
            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item                = new EstadisticasModel();
                $item->id            = $row['id'];
                $item->num_partido   = $row['num_partido'];

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException  $e) {
            die($e->getMessage());
        }
    }


    public function store($datos)
    {
        $fecha_del_partido = $datos['fecha_del_partido'];
        $tipo_partido      = $datos['id_tipo_partido'];
        $jugador           = $datos['id_jugador'];
        $equipo            = $datos['id_equipo'];
        $numero_partido    = $datos['numero_partido'];

        try {
            $sql = "INSERT INTO estadisticas_encuentro (fecha_del_partido, id_tipo_partido, id_jugador, id_equipo, numero_partido) VALUES (:fecha_del_partido, :id_tipo_partido, :id_jugador, :id_equipo, :numero_partido)";

            $connection = $this->db->conect();
            $prepare = $connection->prepare($sql);
            $prepare->execute([
                'fecha_del_partido' => $fecha_del_partido,
                'id_tipo_partido'   => $tipo_partido,
                'id_jugador'        => $jugador,
                'id_equipo'         => $equipo,
                'numero_partido'    => $numero_partido
            ]);

            $lastId = $connection->lastInsertId();
            $this->storeEstadisticasCount($lastId);

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getLastId()
    {
        try {
            // Obtener el último id insertado
            $lastId = $this->db->conect()->lastInsertId();
            return $lastId;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function storeEstadisticasCount($lastId)
    {
        try {
            $sqlSelect = 'SELECT * FROM estadisticas';
            $sqlInsert = 'INSERT INTO estadisticas_count (id_encuentro_estadistica, id_estadistica) VALUES (?, ?)';

            $connection = $this->db->conect();

            // Obtener los datos de la tabla estadisticas
            $querySelect = $connection->query($sqlSelect);
            $items = $querySelect->fetchAll(PDO::FETCH_ASSOC);

            // Insertar los datos en la tabla estadisticas_count
            $Insert = $connection->prepare($sqlInsert);
            foreach ($items as $item) {
                $Insert->execute([
                    $lastId,
                    $item['id']
                ]);
            }

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUltimasEstadisticas()
    {
        $items = [];

        try {

            $sql = 'SELECT ec.id AS id, e.nombre, ec.valor
                FROM estadisticas_count AS ec
                JOIN estadisticas AS e ON e.id = ec.id_estadistica
                WHERE ec.id_encuentro_estadistica = (SELECT MAX(id) FROM estadisticas_encuentro)';

            $query = $this->db->conect()->query($sql);

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
