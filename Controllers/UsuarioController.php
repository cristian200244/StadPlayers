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
        case '1': //StoreUser
          self::StoreUser();
          break;
        case '2':
          self::cerrarSesion();

          break;
        case '3': //Ver por operacion
          // self::show();
          break;
        case '4':
          // self::update();
        case '5':
          self::InciarSesion();
          break;
      }
    }
  }
  public function StoreUser()
  {

    $datos = [
      'email' => $_REQUEST['email'],
      'nickname' => $_REQUEST['nickname'],
      'password' => $_REQUEST['password'],
    ];


    $result =  $this->usuarioModel->StoreUser($datos);


    if ($result) {
    }
  }


  public function InciarSesion()
  {

    session_start();
    $datos = [
      'email' => $_REQUEST['email'],
      'password' => $_REQUEST['password'],
    ];
    $results =  $this->usuarioModel->getUser($datos);
    if (
      empty($_REQUEST['email']) || empty($_REQUEST['password'])
    ) {
      echo '<div class="alert-danger"> Nombre de Usuario o contraseña vacio</div>';
    } else {
    }

    $user = new UsuarioModel;
    $results = $user->getUser();
    if (isset($results)) {
      $message = '';

      if ($results && ($_POST['password'] == $results['password'])) {
        $_SESSION['usuario'] = $results['id'];
        $message = '<div class="alert-info"> ¡Bienvenido!</div>';
        header('Location:../Views/partials/MenuPrincipal.php');
      } else {
        $message = '¡Lo sentimos! Los datos ingresados no concuerdan' . '<br>' .
          '<div class="alert-danger"> ¡Error al Digtar o Usuario no existe!</div>';
      }
    }
    if (!empty($message)) {
      echo $message;
    }
  }
  public function Session()
  {
    $user = new UsuarioModel;
    $session = $user->getUserSession();
    $user = null;
    if (count($session) > 0) {
      $user = $session;
    }
    if (!empty($user))
      $message = ' Wellcome' . $user['email'] .
        '<br>' . 'You are Successfully Logged In';

    else
      header('Location:../index.php');
  }
  public function cerrarSesion()
  {
    $user = new UsuarioModel;
    $id = $_REQUEST['id'];
    var_dump($id);
    $data = $id->cerrarSesion($id);

    if ($data) {
      session_start();
      session_unset();
      session_destroy();
      header('Location:../index.php');
    }
  }
}