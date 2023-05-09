<?php

include_once(__DIR__ . "../../../config/rutas.php");
include_once(BASE_DIR . "../../Views/main/header.php");


?>

<div style=" background-image:url('../../Public/assets/img/reportes-futbol2.jpg');margin-left:0%; margin-right:0%; padding-left:0%; padding-right:0;
   background-position: center;
   background-repeat: no-repeat;
   background-attachment: relative;
   background-size: cover;
height: 40vw;
width:100%; 
">

<div class="container">


   
        <!-- <div class="card-header">
                        <h1>¡Bienvenido! Ahora puede generar sus reportes </h1>
                    </div> -->
        <div class="card" style="width: 40rem;  padding-left:5%; padding-right:5%; padding-bottom:5%;margin-left:25%; margin-right:15% ;margin-top:20% ">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body text-center">
                <h5 class="card-title">Generar Reporte</h5>
                <!-- <p class="card-text">En esta seccion podra generar reportes de sus jugadores creados</p> -->
            </div>


            <ul class="list-group list-group-flush" style=" padding-left:10%;">
                <div class="row">
                    <div class="col-6">
                        <li class="list-group-item">Fecha Inicial</li>
                    </div>
                    <div class="col-6">
                        <input type="date" name="fechaInicial" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <li class="list-group-item">Fecha Final</li>
                    </div>
                    <div class="col-6">
                        <input type="date" name="fechaInicial" id="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <li class="list-group-item">Nombre del Jugador</li>
                    </div>
                    <div class="col-6">
                        <div class="dropdown">
                            <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Elegir jugador
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card-body text-center ">
                    <a href="#" class="btn btn-primary">Generar</a>
                </div>
            </ul>
        </div>
   

</div>

</div>
<?php
include_once(BASE_DIR . "../../Views/partials/aside.php");
include_once(BASE_DIR . "../../Views/main/footer.php");
?>


div