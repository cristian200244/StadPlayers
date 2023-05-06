<?php
    include_once(__DIR__ . "../../config/rutas.php");
    include_once(BASE_DIR . "../../Views/main/header.php");
    include_once(BASE_DIR . "../../Views/main/main.php");
?>

<div class="container">
        <div class="row">
            <div class="col">
            
                <h1>
                    ¡Bienvenido! Estos son sus jugadores</h1>
                    
<main>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
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
</main>
 
<?php
       
       include_once(BASE_DIR . "../../Views/main/footer.php");
       ?>
            </div>
        </div>
    </div>


<?php
    include_once(BASE_DIR . "../../Views/partials/aside.php");
    include_once(BASE_DIR . "../../Views/main/footer.php");
?>

