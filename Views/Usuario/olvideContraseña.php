$to = $email;
$subject = "Link de Recuperación de contraseña";
$msg = 'Has Click <a
    href="http://localhost/stadPlayers/Views/Usuario/nuevacontraseña.php?token=' . $token . '">Aquí<a />para restaurar
    tu contraseña ';
    $message = "Email:" . $email . "\n\n" . " " . $msg;
    $msg = 'Has Click <a
        href="http://localhost/StadPlayers/Views/Usuario/nuevacontraseña.php?token=' . $token . '">Aquí<a />para
        restaurar tu contraseña ';
        // $message = "Email:" . $email . "\n\n" . " " . $msg;
        $message = $msg;
        $headers = "MIME-Version:1.0" . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= "from: " . $email;
        $headers .= "From: " . $email;

        if (mail($to, $subject, $message, $headers)) {
        echo "se ha enviado un Link de restablecer contraseña a tu correo";


        $_POST['respuesta'] = "se ha enviado un Link de restablecer contraseña a tu correo";
        // $respuesta = $_POST['respuesta'];
        // var_dump($respuesta);
        // die();
        } else {
        echo "¡Ups! Algo salió mal al enviar, Intenta de Nuevo";
        }