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

    private $db;

    public function __construct()
    {
        //Instanciar la base de datos en el constructor para poder realizar consultas
        $this->db = new Database();
    }

    //metodos mágicos


    public function store($datos)
    {
        try {


            $sql = 'INSERT INTO generar_reporte(fecha_inicial, fecha_final, id_jugador, id_usuario) VALUES(:fechainicial, :fechaFinal, :id_jugador, :id)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'fechainicial' => $_REQUEST['fechaInicial'],
                'fechaFinal' => $_REQUEST['fechaFinal'],
                'id_jugador' => $_REQUEST['id_jugador'],
                'id' => $_REQUEST['id_usuario'],
                
            ]);
            var_dump($query);
           
            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

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

        $id_usuario =  $_SESSION['id'];
        $items = [];

        try {

            $sql = ' SELECT id, nombre_completo FROM jugadores WHERE id_usuario=' . $id_usuario;

            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item       = new  ReportesModel();
                $item->id   = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];
                $item->id_usuario = $id_usuario;

                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
