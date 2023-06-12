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
        case 1: //Store
          self::Store();
          break;
        case 2: //Eliminar
          // self::destroy();

          break;
        case 3: //Ver por operacion
          // self::show();
          break;
        case 4:
          // self::update();
          break;
        case 5:
          self::InciarSesion();
          break;
        case 6:
          self::CerrarSesion();
          break;
      }
    }
  }
  public function Store()
  {

    $datos = [
      'email' => $_REQUEST['email'],
      'nickname' => $_REQUEST['nickname'],
      'password' => $_REQUEST['password'],
    ];
    // var_dump($datos);
    // die();
    $result =  $this->usuarioModel->Store($datos);
  }



  public function InciarSesion()
  {
    //Lo que llega por REQUEST
    $datos = [
      'email' => $_REQUEST['email'],
      'password' => $_REQUEST['password'],
    ];

    if (empty($datos['email']) || empty($datos['password'])) {

      return $mensaje = "Nombre de Usuario o contraseña vacio";
      // echo '<div class="alert-danger"> </div>';
    } else {
      $results = $this->usuarioModel->getUser($datos);

      if ($results) {
        session_start();

        $_SESSION['id'] = $results['id'];
        $_SESSION['nickname'] = $results['nickname'];
        $_SESSION['email'] = $results['email'];

        $message = '¡Bienvenido!';
        header('Location:../Views/main/MenuPrincipal.php');
      } else {
        $message = '¡Lo sentimos! Los datos ingresados no concuerdan' . '<br>' .
          '<div class="alert-danger"> ¡Error al Digtar o Usuario no existe!</div>';
      }
    }
  }
  public function cerrarSesion()
  {
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../index.php');

    // error_reporting(0);

  }
}
// public function Session()
// if (!isset($_SESSION['id'])) {
// header("Location:index.php");
// }
// {
// $user = new UsuarioModel;
// $session = $user->getUserSession();
// $user = null;
// if (count($session) > 0) {
// $user = $session;
// }
// if (!empty($user))
// $message = ' Wellcome' . $user['email'] .
// '<br>' . 'You are Successfully Logged In';

// else
// header('Location:../index.php');
// }