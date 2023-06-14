<?php

require_once("conexionModel.php");

class UsuarioModel
{

    public $email;
    public $nickname;
    public $password;
    public $message;
    public $results;
    private $db;

    public function __construct()
    {
        $this->email;
        $this->nickname;
        $this->password;
        $this->message;
        $this->results;
        //Instanciar la base de datos en el constructor para poder realizar consultas
        $this->db = new Database();
    }


    public function Store($datos)
    {

        try {

            if (!empty($_POST['email']) && !empty($_POST['nickname']) && !empty($_POST['password'])) {

                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $sql = 'INSERT INTO usuarios ( email, nickname,password) VALUES (:email, :nickname, :password)';
                $prepare = $this->db->conect()->prepare($sql);

                $query = $prepare->execute([
                    'email'    => $datos['email'],
                    'nickname' => $datos['nickname'],
                    'password' => $password,
                ]);
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getUser($datos)
    {
        try {

            $sql = 'SELECT id, Email, password FROM usuarios WHERE Email = :email AND password = :password';

            $query = $this->db->conect()->prepare($sql);
            $query->bindParam(':email', $_POST['email']);
            $query->bindParam(':password', $_POST['password']);
            $query->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);
            // var_dump($results);
            // die();

            return $results;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
