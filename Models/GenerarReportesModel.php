<?php

require_once("conexionModel.php");


class ReportesModel
{

    public $id;
    public $nombre_completo;

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


            $sql = 'INSERT INTO generar_reporte(fecha_inicial, fecha_final, id_jugador, id_usuario) VALUES(:num1, :num2, :operacion, :resultado)';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'fechaInicial' => $_REQUEST['fechaInicial'],
                'fechaFinal' => $_REQUEST['fechaFinal'],
                'id_jugador' => $_REQUEST['id'],
                'id_usuario' => $_REQUEST['id'],


            ]);
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
        $items = [];

        try {
            $sql = 'SELECT id, nombre_completo, id_usuario FROM jugadores WHERE id_usuario= 1';

            $query = $this->db->conect()->query($sql);
            while ($row = $query->fetch()) {
                $item       = new  ReportesModel();
                $item->id   = $row['id'];
                $item->nombre_completo = $row['nombre_completo'];
                $item->nombre_completo = $row['id_usuario'];


                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
