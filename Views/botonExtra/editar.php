<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../../index.php");
    exit();
}

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/partials/header.php");
include_once(BASE_DIR . "../../Views/partials/aside.php");

include_once '../../Models/conexionModel.php';
include_once '../../Models/UsuarioModel.php';

$id = $_GET['id'];

$datos = new UsuarioModel();
$registros = $datos->editar($id);

foreach ($registros as $resultado) {
    $id = $resultado->getId();
    $email = $resultado->email;
    $nickname = $resultado->nickname;
    $password = $resultado->password;
}

function obtenerIniciales($nickname)
{
    $iniciales = '';
    $palabras = explode(' ', $nickname);

    foreach ($palabras as $palabra) {
        $iniciales .= strtoupper(substr($palabra, 0, 1));
    }

    return $iniciales;
}
?>

<div class="ImgJUGADOR">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>¡Bienvenido! Ahora Podrá ingresar sus Jugadores</h1>
            </div>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header bg-colorr">
                                    <h3 class="text-center text-light my-4 fs-4">Ingresar Su Actualizacion de Usuario</h3>
                                </div>
                                <div class="card-body bg-colorbody ">
                                    <form action="../../Controllers/UsuarioController.php" method="post">
                                        <input type="hidden" name="c" value="3">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <div class="mb-3 ">
                                            <div class="row bg-color1 text-primary">

                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="email" class="form-control" id="email" type="email" placeholder="email" name="email" value="<?= $email ?>" required />
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>

                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="text" class="form-control" id="nickname" placeholder="nickname" name="nickname" value="<?= $nickname ?>" />
                                                        <label for="nickname">nickname</label>
                                                    </div>
                                                </div>
                                                <div class="form-floating col-md-6 mt-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input type="password" class="form-control" id="password" placeholder="password" name="password" value="<?= $password ?>" />
                                                        <label for="password"> password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-dark  btn-block" id="submitBtn">Guardar Usuario</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<style>
    .avatar-circle {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .avatar-circle h1 {
        font-size: 80px;
        color: #fff;
        text-transform: uppercase;
        margin: 0;
    }

    .card {
        padding: 10px;
        text-align: center;
    }
</style>

<?php
include_once(BASE_DIR . "../../Views/partials/footer.php");
?>