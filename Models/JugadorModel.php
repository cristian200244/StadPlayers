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
    public $id_usuario;
    public $id_equipo;
    public $id_liga;
    public $id_pais;
    public $id_contiente;
    public $id_posicion;
    public $id_perfil;
    public $id_historial_equipos;
    public $guardar;
    private $db;

    public function __construct()
    {
        $this->id;
        $this->nombre_completo;
        $this->apodo;
        $this->fecha_nacimiento;
        $this->caracteristicas;
       $this->id_usuario;
       $this->id_equipo;
       $this->id_liga;
       $this->id_pais;
       $this->id_contiente;
       $this->id_posicion;
       $this->id_perfil;
        $this->id_historial_equipos;
        $this->guardar;

        $this->db = new DataBase();
    }
    public function getId()
    {
        return $this->id;
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
                $item->id_usuario = $row['id_usuario'];
                $item->id_equipo = $row['id_equipo'];
                $item->id_liga = $row['is_liga'];
                $item->id_pais = $row['id_pais'];
                $item->id_contiente = $row['id_contiente'];
                $item->id_perfil = $row['id_perfil'];
                $item->is_historial_equipos = $row['id_historial_equipos'];

                array_push($resultado, $item);
            }

            return $resultado;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        $items = [];

        try {
            $sql = 'SELECT j.*, c.nombre AS nombre_continente, eq.equipo, he.fecha_inicial, he.fecha_terminacion, l.nombre AS nombre_liga, p.nombre_pais, pf.nombre AS nombre_perfil, ps.descripcion AS descripcion_posicion
            FROM jugadores j
            JOIN continentes c ON j.id_contiente = c.id
            JOIN equipos eq ON j.id_equipo = eq.id
            JOIN historial_equipos he ON j.id_historial_equipos = he.id
            JOIN ligas l ON j.id_liga = l.id
            JOIN paises p ON j.id_pais = p.id
            JOIN perfiles pf ON j.id_perfil = pf.id
            JOIN posiciones ps ON j.id_posicion = ps.id;
            ';
            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item            = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];
                $item->apodo = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas = $row['caracteristicas'];
                $item->id_equipo = $row['id_equipo'];
                $item->id_liga = $row['id_liga'];
                $item->id_pais = $row['id_pais'];
                $item->id_continente = $row['id_contiente'];
                $item->id_posicion = $row['id_posicion'];
                $item->id_perfil = $row['id_perfil'];
                $item->id_historial_equipos = $row['id_historial_equipos'];

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
            $sql = 'INSERT INTO jugadores(nombre_completo, apodo, fecha_nacimiento, caracteristicas, id_equipo, id_liga, id_pais, id_contiente, id_posicion, id_perfil, id_historial_equipos) VALUES(:nombre_completo, :apodo, :fecha_nacimiento, :caracteristicas, :id_equipo, :id_liga, :id_pais, :id_contiente, :id_posicion, :id_perfil, :id_historial_equipos)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'nomber_completo'   => $datos['nombre_completo'],
                'apodo'   => $datos['apodo'],
                'fecha_nacimiento' => $datos['fecha_nacimiento'],
                'caracteristicas' => $datos['caracteristicas'],
                // 'id_usuario' => $datos['id_usuario'],
                'id_equipo' => $datos['id_equipo'],
                'id_liga' => $datos['id_liga'],
                'id_pais' => $datos['id_pais'],
                'id_contiente' => $datos['id_contiente'],
                'id_posicion' => $datos['id_posicion'],
                'id_perfil' => $datos['id_perfil'],
                // 'id_historial_equipos' => $datos['id_historial_equipos'],
                'resultado' => $guardar,
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getid_equipos(){
        return $this->equipo;
    }

    public function equipos()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, equipo FROM equipos';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->equipo = $row['equipo'];

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getid_ligas(){
        return $this->nombre;
    }

    public function ligas()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, nombre FROM ligas';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getid_paises(){
        return $this->nombre;
    }

    public function paises()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, nombre_pais FROM paises';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre_pais'];
               

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getid_continentes(){
        return $this->nombre;
    }

    public function continentes()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, nombre_continente FROM paises';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre_continente'];
                

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getid_perfil(){
        return $this->nombre;
    }

    public function perfiles()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, nombre FROM perfiles';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['nombre'];
              

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    public function getid_posicion(){
        return $this->nombre;
    }

    public function posiciones()
    {
        $items = [];
        try{
            $sql = 'SELECT  id, descripcion FROM posiciones';
            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()){
                $item = new JugadorModel();
                $item->id = $row['id'];
                $item->nombre = $row['descripcion'];
              

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
}
