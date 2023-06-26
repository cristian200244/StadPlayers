<?php

require_once("conexionModel.php");

class UsuarioModel
{
    public $id;
    public $email;
    public $DbEmail;
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
        $this->DbEmail;
        //Instanciar la base de datos en el constructor para poder realizar consultas
        $this->db = new Database();
    }


    public function Store($datos)
    {

        try {

            if (!empty($_POST['email']) && !empty($_POST['nickname']) && !empty($_POST['password']) && strlen($_POST['password']) >= 8) {

                $password = md5($_POST['password']);
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

        // $pass = md5($datos['password']);
        $pass = ($datos['password']);
        try {

            $sql = 'SELECT id, Email, password FROM usuarios WHERE Email = :email AND password = :password';

            $query = $this->db->conect()->prepare($sql);
            $query->bindParam(':email', $datos['email']);
            $query->bindParam(':password', $pass);
            $query->execute();

            $results = $query->fetchObject();

            return $results;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        $items = [];

        try {
            $sql = 'SELECT u.id, u.email, u.nickname, u.password
            FROM usuarios u';

            $query  = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item                       =   new UsuarioModel();
                $item->id                   =  $row['id'];
                $item->email                =  $row['email'];
                $item->nickname             =  $row['nickname'];
                $item->password             =  $row['password'];


                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getEmail($email)
    {
        $this->email = $email;
        // var_dump($this->email);
        // die();

        try {
            $sql = 'SELECT * FROM usuarios WHERE Email = :email';
            $query = $this->db->conect()->prepare($sql);

            $query->bindParam(':email', $this->email);
            $query->execute();
            $results = $query->fetchObject();

            // var_dump($results);
            // die();
            if ($results) {

                $token = uniqid(md5(time()));

                $inser_query = "INSERT INTO olvido_password(email,token) VALUES('$this->email','$token')";
                $res  = $this->db->conect()->query($inser_query);

                echo "Has Click <a href='../../Views/Usuario/nuevacontraseña.php?token=$token'>Aquí<a/>para restaurar tu contraseña ";
            } else {

                echo "Usuario No Existe";
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

    

    

// lalocadekevin@gmail.com