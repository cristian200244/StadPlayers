<?php

require_once("conexionModel.php");

class UsuarioModel
{

    public $email;
    public $password;
    private $db;

    public function __construct()
    {
        //Instanciar la base de datos en el constructor para poder realizar consultas
        $this->db = new Database();
    }
    public function getUser($email, $password,)
    {

        try {

            $sql = "SELECT * FROM  usuarios WHERE email= '$email' AND password'$password'";
            $query = $this->db->conect()->query($sql);
            $numRows = $query;
            if ($numRows == 1) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }




   
    
}
