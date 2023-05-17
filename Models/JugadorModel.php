<?php
include_once __DIR__ . '../../config/config_example.php';
require_once("conexionModel.php");

class JugadorModel extends stdClass
{
    public $id;
    public $nombre_completo;
    public $apodo;
    public $fecha_nacimiento;
    public $caracteristicas;
    public $resultado;
    public $perfiles;
    private $db;

    public function __construct()
    {
        $this->id;
        $this->nombre_completo;
        $this->apodo;
        $this->fecha_nacimiento;
        $this->caracteristicas;
        $this->resultado;
        $this->perfiles;

        $this->db = new DataBase();
    }

    public function getbyId($id)
    {
        $resultado = [];

        try {
            $sql = "SELECT * FROM jugadores WHERE id = $id";
            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->nombre_completo = $row['nombre_completo'];
                $item->apodo = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];
                // $item->perfiles = $row['perfiles'];
                $item->resultado = $row['resultado'];

                array_push($resultado, $item);
            }

            return $resultado;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function store($datos)
    {
        try {
            $sql = 'INSERT INTO jugadores (nombre_completo, apodo, fecha_nacimiento, caracteristicas) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas)';
            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'nombre_completo' => $datos['nombre_completo'],
                'apodo' => $datos['apodo'],
                'fecha_nacimiento' => $datos['fecha_nacimiento'],
                'caracteristicas' => $datos['caracteristicas'],
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        $items = [];

        try {
            $sql = 'SELECT jugadores.id, jugadores.nombre_completo, continentes.nombre AS nombre_continente, equipos.equipo, ligas.nombre AS nombre_liga, paises.nombre_pais, perfiles.nombre AS nombre_perfil, posiciones.descripcion AS nombre_posicion
            FROM jugadores
            JOIN continentes ON jugadores.id_contiente = continentes.id
            JOIN equipos ON jugadores.id_equipo = equipos.id
            JOIN ligas ON jugadores.id_liga = ligas.id
            JOIN paises ON jugadores.id_pais = paises.id
            JOIN perfiles ON jugadores.id_perfil = perfiles.id
            JOIN posiciones ON jugadores.id_posicion = posiciones.id;
            ';
            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];
                $item->apodo = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];

                array_push($items, $item);
            }
    
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
    
