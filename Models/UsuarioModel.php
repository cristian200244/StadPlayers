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


                $sql = 'INSERT INTO usuarios ( email, nickname,password) VALUES (:email,:nickname,:password)';
                $prepare = $this->db->conect()->prepare($sql);

                $query = $prepare->execute([
                    'email' => $datos['email'],
                    'nickname' => $datos['nickname'],
                    'password' => $datos['password'],
                    // $password = password_hash($datos['password'], PASSWORD_BCRYPT),
                    // $datos->bindParam(':password', $password)
                ]);

                if ($query) {
                    $message = ' Nuevo Usuario Creado Correctamente';
                    header("Location: ../index.php");
                    // header("Location: ../index.php");
                    // header("Location: ../index.php");
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


    // public function getUserSession()
    // {
    //     $user = new UsuarioController;
    //     $results = $user->InciarSesion();
    //     try {
    //         if (isset($this->results->$_SESSION['usuario'])) {
    //             $sql = 'SELECT id, email, password FROM usuarios  WHERE id = :id';
    //             $query = $this->db->conect()->prepare($sql);
    //             $query->bindParam(':id', $_SESSION['usuario']);
    //             $query->execute();
    //             $Session = $query->fetch(PDO::FETCH_ASSOC);
    //             return $Session;
    //         }
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }


    // public function cerrarSesion($id)

    // {

    //     $getSession = new UsuarioModel();

    //     $getSession->getUserSession();


    //     if ($getSession) {

    //         $query = "DELETE FROM operaciones WHERE id=$id";
    //         $query = $this->db->conect()->query($query);
    //     } else {
    //         return false;
    //     }
    // }
}



// public function getUser()
// {


//     try {
//         $message = '';
//         if (!empty($_POST['email']) && !empty($_POST['password'])) {

//             $sql = 'SELECT id, email, password FROM usuarios WHERE email = :email';
//             $query = $this->db->conect()->prepare($sql);
//             $query->bindParam(':email', $_POST['email']);
//             $query->execute();
//             $results = $query->fetch(PDO::FETCH_ASSOC);
//             $numRows = $results;
//             if ($numRows == 1) {
//                 return $numRows;
//             }
//         }
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }