<?php
include_once __DIR__ . '../../Config/config_example.php';
include_once dirname(__FILE__) . '../../Config/rutas.php';
require_once("conexionModel.php");

session_start();

class ReportesModel
{

    public $id;
    public $nombre_completo;
    public $id_usuario;
    public $fechaInicial;
    public $fechaFinal;
    public $id_reporte;
    public $apodo;
    public $equipo;
    public $liga;
    public $posicion;

    private $db;

    public function __construct()
    {
        //Instanciar la base de datos en el constructor para poder realizar consultas

        $this->db = new Database();


        $this->id_usuario = $_SESSION['id'];
        $this->fechaInicial;
        $this->fechaFinal;
        $this->id_reporte;
        $this->apodo;
        $this->equipo;
        $this->liga;
        $this->posicion;
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
    public function getIdReporte()
    {
        return $this->id;
    }


    //Metodos propios
    public function getById()
    {
        $this->id_usuario = $_SESSION['id'];
        return  $this->id_usuario; # code...
    }

    public function getAll()
    {

        $sql = 'SELECT gr.id, gr.fecha_inicial, gr.fecha_final, j.nombre_completo
        FROM generar_reporte as gr
        JOIN jugadores as j ON gr.id_jugador = j.id
        WHERE gr.id_usuario =' . $this->id_usuario;
        try {
            $items = [];
            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item = new ReportesModel();
                $item->id               = $row['id'];
                $item->fechaInicial     = $row['fecha_inicial'];
                $item->fechaFinal       = $row['fecha_final'];
                $item->nombre_completo  = $row['nombre_completo'];

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
            $sql = 'INSERT INTO generar_reporte(fecha_inicial, fecha_final, id_jugador, id_usuario)
                     VALUES(:fechaInicial, :fechaFinal, :id_jugador, :id_usuario)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'fechaInicial' => $_REQUEST['fechaInicial'],
                'fechaFinal' => $_REQUEST['fechaFinal'],
                'id_jugador' => $_REQUEST['id_jugador'],
                'id_usuario' => $_SESSION['id'],

            ]);


            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getReporteId($datos)
    {
        try {


            // $sql = 'SELECT gr.id, gr.fecha_inicial, gr.fecha_final, j.nombre_completo, j.apodo, e.equipo,l.nombre,p.descripcion
            // FROM generar_reporte as gr 
            // JOIN jugadores as j ON gr.id_jugador = j.id
            // JOIN equipos as e ON  j.id_equipo = e.id
            // JOIN ligas as l ON  j.id_liga = l.id
            // JOIN posiciones as p ON  j.id_posicion = p.id
            // WHERE gr.id =' . $datos['id'];

            $sql = 'SELECT coun.id,coun.valor 
            FROM count_estadisticas AS coun 
            JOIN encuentro_estadisticas AS encu ON coun.id_encuentro_estadistica = encu.id
             WHERE  encu.id=encu.id_jugador AND coun.id_estadistica=15;';



            $query = $this->db->conect()->query($sql);
            $items = [];
            while ($row = $query->fetch()) {
                $item = new ReportesModel();
                $item->id = $row['id'];
                $item->fechaInicial     = $row['fecha_inicial'];
                $item->fechaFinal       = $row['fecha_final'];
                $item->nombre_completo  = $row['nombre_completo'];
                $item->apodo            = $row['apodo'];
                $item->equipo        = $row['equipo'];
                $item->liga          = $row['nombre'];
                $item->posicion      = $row['descripcion'];

                array_push($items, $item);
                print_r($items);
                die();
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getPlayers()
    {
        $items = [];

        try {

            $sql = "SELECT id, nombre_completo FROM jugadores WHERE id_usuario = $this->id_usuario";
            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item       = new  ReportesModel();
                $item->id   = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];
                $item->id_usuario = $this->id_usuario;

                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}