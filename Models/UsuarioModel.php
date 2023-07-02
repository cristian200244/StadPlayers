<?php

require_once("conexionModel.php");

class UsuarioModel
{
    public $id;
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

    public function getId()
    {
        return $this->id;
    }
    public function Store($datos)
    {

        try {

            if (!empty($_POST['email']) && !empty($_POST['nickname']) && !empty($_POST['password']) && strlen($_POST['password']) >= 8) {

                $password = md5($_POST['password']);
                $sql = 'INSERT INTO usuarios ( email, nickname,password) VALUES (:email, :nickname, :password)';
                $prepare = $this->db->conect()->prepare($sql);

                $query = $prepare->execute([
                    'email' => $datos['email'],
                    'nickname' => $datos['nickname'],
                    'password' => $password,
                ]);
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function update($datos)
    {
        try {


            $sql = 'UPDATE usuarios SET email = :email, nickname = :nickname, password = :password WHERE id = :id';

            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id' => $datos['id'],
                'email' => $datos['email'],
                'nickname' => $datos['nickname'],
                'password' => $datos['password'],

            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editar($id)
    {
        $operacion = [];

        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $query = $this->db->conect()->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            while ($row = $query->fetch()) {
                $item = new UsuarioModel();
                $item->id = $row['id'];
                $item->email = $row['email'];
                $item->nickname = $row['nickname'];
                $item->password = $row['password'];

                array_push($operacion, $item);
            }

            return $operacion;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function getUser($datos)
    {

        $pass = md5($datos['password']);
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

            $query = $this->db->conect()->query($sql);

            while ($row = $query->fetch()) {
                $item = new UsuarioModel();
                $item->id = $row['id'];
                $item->email = $row['email'];
                $item->nickname = $row['nickname'];
                $item->password = $row['password'];


                array_push($items, $item);
            }

            return $items;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $prepare = $this->db->conect()->prepare($sql);
            $query = $prepare->execute([
                'id' => $id,
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getById($id)
    {
        $resultado = [];

        try {
            $sql = "SELECT email, nickname, password
                FROM usuarios
                WHERE id = :id";

            $query = $this->db->conect()->prepare($sql);
            $query->bindParam(':id', $id);
            $query->execute();

            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $item = new UsuarioModel();
                $item->email = $row['email'];
                $item->nickname = $row['nickname'];
                $item->password = $row['password'];

                array_push($resultado, $item);
            }

            return $resultado;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
