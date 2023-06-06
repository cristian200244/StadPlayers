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
            $message = '';
            if (!empty($_POST['email']) && !empty($_POST['nickname']) && !empty($_POST['password'])) {


                $sql = 'INSERT INTO usuarios ( Email, nickname,password) VALUES (:email,:nickname,:password)';
                // $prepare = $this->db->conect()->prepare($sql);
                // $query = $this->db->conect()->prepare($sql);
                // $query = $prepare->execute([
                $stmt = $this->db->conect()->prepare($sql);
                $stmt->bindParam(':Email', $_POST['email']);
                $stmt->bindParam(':nickname', $_POST['nickname']);
                $password = password_hash($datos['password'], PASSWORD_BCRYPT);
                $stmt->bindParam(':password', $password);
                // 'email' => $datos['email'],
                // 'nickname' => $datos['nickname'],
                // 'password' => $datos['password'],
                // ]);

                if ($stmt->execute()) {
                    $message = ' Nuevo Usuario Creado Correctamente';
                    header("Location: ../index.php");
                } else {
                    $message = 'Hubo un erro al crear el Usuario';
                }

                if (!empty($message)) {
                    print_r($this->message);
                }
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getUser($datos)
    {
        try {

            $sql = 'SELECT id, email, nickname FROM usuarios WHERE email = :email AND password = :password';
            $query = $this->db->conect()->prepare($sql);
            $query->bindParam(':email', $_POST['email']);
            $query->bindParam(':password', $_POST['password']);
            $query->execute();

            $results = $query->fetch(PDO::FETCH_ASSOC);

            return $results;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
