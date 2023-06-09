<!DOCTYPE html>
<html>

<head>
    <title>Cargar imagen con Bootstrap</title>
    <!-- Agregamos los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Cargar imagen con Bootstrap</h2>
        <!-- Creamos un formulario con un input de tipo "file" -->
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="imagen">Seleccionar imagen:</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Agregamos los archivos JS de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>


include_once '../../Models/JugadorModel.php';

$data = new JugadorModel();
$registros = $data->getAll();
?>












                                                <!-- <div class="row row-cols-1 row-cols-md-2 g-4" id="id_historial_equipos" name="id_historial_equipos">
                                                    <div class="col">
                                                        <div class="card">

                                                            <div class="card-body">


                                                                <div class="card-body card-header bg-success">
                                                                    <h5 class="text-center text-light my-4 fs-4">Historial Equipos</h5>
                                                                </div>
                                                                <div class="form-floating  mt-3">

                                                                    <select class="form-select" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Equipo</option>
                                                                        <?php foreach ($equipos as $equipo) :; ?>

                                                                            <option value="<?= $equipo->getId() ?>">
                                                                                <?= $equipo->getid_equipos() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>


                                                                <div class="mt-3">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha_inicial" id="fecha_inicial" class="form-label">Fecha Inicial</label>
                                                                        <input type="date" class="form-control" type="datetime" placeholder="Fecha Inicial" name="fecha_inicial" id="fecha_inicial" required>
                                                                    </div>
                                                                </div>

                                                                <div class="mt-3">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha_terminacion" id="fecha_terminacion" class="form-label">Fecha Terminacion</label>
                                                                        <input type="date" class="form-control" type="datetime" placeholder="Fecha Terminacion" name="fecha_terminacion" id="fecha_terminacion" required>
                                                                    </div>
                                                                </div>
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Nombre Equipo</th>
                                                                            <th scope="col">Fecha Inicial</th>
                                                                            <th scope="col">Fecha Terminacion</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>
                                                                            <td>@mdo</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>
                                                                            <td>@fat</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">3</th>
                                                                            <td colspan="2">Larry the Bird</td>
                                                                            <td>@twitter</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card">
                                                            <div class="card-body card-header bg-success">
                                                                <h5 class="text-center text-light my-4 fs-4">Titulos Obtenidos</h5>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-floating  mt-2">

                                                                    <select class="form-select" id="id_copas" name="id_copas" aria-label="Default select example" required>
                                                                        <option selected>Seleccionar Titulo</option>
                                                                        <?php foreach ($copas as $nombre) :; ?>

                                                                            <option value="<?= $nombre->getId() ?>">
                                                                                <?= $nombre->getid_copa() ?> </option>

                                                                        <?php endforeach ?>
                                                                    </select>
                                                                </div>


                                                                <div class="mt-2">
                                                                    <div class="form-floating pt-2">
                                                                        <label for="fecha" id="fecha" class="form-label">Fecha del Titulo</label>
                                                                        <input type="date" class="form-control" type="datetime" name="fecha" id="fecha" required>
                                                                    </div>
                                                                </div>


                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Nombre Titulo</th>
                                                                            <th scope="col">Fecha Obtencion</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">1</th>
                                                                            <td>Mark</td>
                                                                            <td>Otto</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">2</th>
                                                                            <td>Jacob</td>
                                                                            <td>Thornton</td>

<!-- < -->

public function getbyId($id)
    {
        $resultado = [];
    
        try {
            $sql = "SELECT j.*, e.equipo, l.nombre AS nombre_liga, p.nombre AS nombre_pais, c.nombre AS nombre_continente, pr.nombre AS nombre_perfil
                    FROM jugadores j
                    INNER JOIN equipos e ON j.id_equipo = e.id
                    INNER JOIN ligas l ON j.id_liga = l.id
                    INNER JOIN paises p ON j.id_pais = p.id
                    INNER JOIN continentes c ON j.id_contiente = c.id
                    INNER JOIN perfiles pr ON j.id_perfil = pr.id
                    WHERE j.id = $id";
            $query  = $this->db->conect()->query($sql);
    
            while ($row = $query->fetch()) {
                $item                   = new JugadorModel();
                $item->nombre_completo  = $row['nombre_completo'];
                $item->apodo            = $row['apodo'];
                $item->fecha_nacimiento = $row['fecha_nacimiento'];
                $item->caracteristicas  = $row['caracteristicas'];
                $item->id_equipo        = $row['id_equipo'];
                $item->id_liga          = $row['id_liga'];
                $item->id_pais          = $row['id_pais'];
                $item->id_contiente     = $row['id_contiente'];
                $item->id_perfil        = $row['id_perfil'];
                $item->equipo           = $row['equipo'];
                $item->nombre_liga      = $row['nombre_liga'];
                $item->nombre_pais      = $row['nombre_pais'];
                $item->nombre_continente = $row['nombre_continente'];
                $item->nombre_perfil    = $row['nombre_perfil'];
    
                array_push($resultado, $item);
            }
    
            return $resultado;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
                                                                            


    <a class="btn btn-sm btn-outline-warning" href="../../Controllers/jugadorController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>