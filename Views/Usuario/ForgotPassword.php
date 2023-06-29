<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once("../../Models/conexionModel.php");
include_once '../../Models/UsuarioModel.php';
$usuario = new UsuarioModel();
$db = new Database();

// $email = implode(",", $_POST);




if (isset($_POST['email'])) {

    $email = $_POST['email'];
    $myemail = '';

    $sql = "SELECT email FROM usuarios WHERE Email ='$email'";
    $query = $db->conect()->query($sql);
    if (empty($email)) {
        echo "Campo vacio";
    } else {
        if ($query) {
            $items = [];
            while ($row = $query->fetchObject()) {
                $item               = new UsuarioModel();
                $item->DbEmail   = $row->email;

                foreach ($row as $key => $value) {
                    $myemail = $value;
                }
            }

            if ($myemail == $email) {

                $token = uniqid(md5(time()));
                $insert_query = "INSERT INTO olvido_password(email,token) VALUES('$email','$token')";
                $res  = $db->conect()->query($insert_query);

                $to = $email;
                $subject = "Link de Recuperación de contraseña";
                $msg = 'Has Click <a href="http://localhost/StadPlayers/Views/Usuario/nuevacontraseña.php?token=' . $token . '">Aquí<a/>para restaurar tu contraseña ';
                $message = "Email:" . $email . "\n\n" . " " . $msg;
                $message = $msg;
                $headers = "MIME-Version:1.0" . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= "From: " . $email;

                if (mail($to, $subject, $message, $headers)) {
                    $array = [];
                    $mensaje = 'se ha enviado un Link de restablecer contraseña a tu correo';
                    $array = explode(' ',  $mensaje);
                    foreach ($array as $value) {
                        $string = $value;
                        array_push($array, $string);
                    }
                    $data   = ["msj" => $array];
                    json_encode($data) . "\n";
                    // var_dump(json_encode($data));
                    // die();
                } else {
                    echo "¡Ups! Algo salió mal al enviar, Intenta de Nuevo";
                }

                // echo "Has Click <a href='../../Views/Usuario/nuevacontraseña.php?token=$token'>Aquí<a/>para restaurar tu contraseña ";
            } else {

                echo "Usuario No Existe";
            }
        }
    }
}

   











//Instanciar la base de datos en el constructor para poder realizar consultas









    

// }