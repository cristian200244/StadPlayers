<?php

require_once '../Models/UsuarioModel.php';

//Instanciando la clase CalculadoraController
$usuario = new UsuarioController();

class UsuarioController
{
  private $usuarioModel;

  public function __construct()
  {
    $this->usuarioModel = new UsuarioModel();
    if (isset($_REQUEST['c'])) {
      $controlador = $_REQUEST['c'];

      switch ($controlador) {
        case '1': //Store
          // self::store();
          break;
        case '2': //Eliminar
          // self::destroy();
          break;
        case '3': //Ver por operacion
          // self::show();
          break;
        case '4':
          // self::update();
        case '5':
          self::iniciarSesion();
          break;
      }
    }
  }

  public function iniciarSesion()
  {
    
    session_start();
    if (isset($_POST['UsuarioLoginController'])) {

      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      var_dump($email);

      if (
        empty($email)|| empty($username)
      ) {
        echo '<div class = "alert-danger"> Nombre de Usuario o contraseña vacio</div>';
      } else {

        $user = new UsuarioModel;
        if ($user->getUser($email, $username, $password)) {

          session_start();
          $_SESSION['usuario'] = $username;
          header('Location: ../Views/partials/MenuPrincipal.php');
        } else {

          echo '<div class = "alert-danger"> ¡Usuario no existe!</div>';
        }
      }
    }
  }

  public function cerrarSesion()
  {
    session_start();
    session_unset();
    session_destroy();
    // header('Location: /php-login');
  }
}
