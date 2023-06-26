<?php
include_once(__DIR__ . "../../../config/rutas.php");
include_once '../../Models/conexionModel.php';
include_once '../../Models/UsuarioModel.php';

$datosUser = new UsuarioModel();
$password = $datosUser->getUser($datos);


var_dump($password);
die();





$email = implode(",", $_POST);






if (empty($email)) {
    echo "Campo vacio";
} else {

    $sql = 'SELECT Email FROM usuarios WHERE Email =:email';
    $query  = $this->db->conect()->prepare($sql);
    if ($query > 0) {

        $token = uniqid(md5(time()));

        $sql = "INSERT INTO olvido_contraseña(email,token) VALUES('$email','$token')";
        $query  = $this->db->conect()->query($sql);

        echo "Has Click <a href='#'>Aquí<a/>para restaurar tu contraseña ";
    } else {

        echo "Usuario No Existe";
    }
}
    









//Instanciar la base de datos en el constructor para poder realizar consultas









    

// }