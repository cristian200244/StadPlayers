 <?php
    // if (!isset($_SESSION['id'])) {

    //     header("Location:../../index.php");
    // }else{
    //     if($_SESSION['usuario']=="ok") {

    //     $nombreUsuario=$_SESSION["nombreUsuario"];}
    // }
    ob_start();
    include_once(__DIR__ . "../../../config/rutas.php");
    include_once __DIR__ . "../../../Models/GenerarReportesModel.php";
    require_once __DIR__ . '../../../Controllers/GenerarReportesController.php';
    // include_once(BASE_DIR . "../../Views/partials/header.php");


    $data = new ReportesController();
    $datosPdf = $_REQUEST;


    // var_dump($datosPdf);
    // die();

    // var_dump($datosReporte["id"]);
    // die();
    // 
    // foreach ($datosPdf as $k => $v) {
    //     print_r($k . "=>" . $v);
    //     echo "<hr>";
    // }


    // die();

    $encabezado = [

        "Fecha_Inicial" => $_REQUEST["fechaInicial"],
        "Fecha_Final" => $_REQUEST["fechaFinal"]
    ];

    $datosJugador = [
        "Nombre" => $_REQUEST["nombre_completo"],
        "Apodo" => $_REQUEST["apodo"],
        "Equipo" => $_REQUEST["equipo"],
        "Liga" => $_REQUEST["liga"],
        "Posicion" => $_REQUEST["posicion"],
        "Total_Minutos" => $_REQUEST["totalMinutosJugados"],
        "Partidos_Jugados" => $_REQUEST["totalPartidosJugados"],
        "promedio" => $_REQUEST["promedio"],
        "id_posicion" => $_REQUEST["id_posicion"],

    ];

    // var_dump($datosJugador);
    // echo "<hr>";
    // die();

    ?>

 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link href="../../public/assets/css/styles.css" rel="stylesheet" /> -->
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
     <title>StadplayerPDF</title>

     <style>
         @page {
             margin-left: 4cm;
             margin-right: 4cm;

             ;
         }


         table {

             font-family: Russo One;
         }
     </style>

<script>
     window.addEventListener('DOMContentLoaded', event => {

         // Función Show & hidde

         let predeterminadas = document.getElementById('EstadisticasPre');
         let arquero = document.getElementById('EstadArquero')
         let id_posicion = document.getElementById('id_posicion').value;

         if (!document.getElementById("control")) {} else {
             if (document.getElementById("control").value == 1) {
                 OptNuevasEstadisticas.style.display = "block";
             }
         }

         if (!document.getElementById("controlPre")) {} else {
             if (document.getElementById("controlPre").value == 2) {
                 OptEstadisticas.style.display = "block";
             } else {


             }
         }


         if (id_posicion != 1) {
             document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
             predeterminadas.style.display = "block";
             arquero.style.display = "none";

             var estadPre = document.getElementById("EstadisticasPre").value;
             if (estadPre == 0) {
                 predeterminadas.style.display = "none";
             }
         } else { //Cuando es portero
             document.getElementById("TituloEstadJugador").textContent = "Estadisticas del Jugador";
             document.getElementById("TituloEstadArquero").textContent = "Estadisticas del Portero";
             predeterminadas.style.display = "block";
             arquero.style.display = "block";
         }

     });
 </script>
 </head>

 <body>
     <div class="container">
         <img src="<?php echo $imagenBase64 ?>" />

         <table width="500px" cellpadding="5px" border="1" style="background-color:#03D27D;">
             <thead style="background-color:#000000; color: white;">
                 <tr>
                     <th>Fecha Inicial</th>
                     <th>Fecha Final</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    foreach ($encabezado as $key => $dato) {
                        if ($key != 'id_posicion') { ?>
                         <td><?php str_replace("_", " ", $key)  ?><?= $dato ?></td>
                     <?php } ?>
                 <?php } ?>
             </tbody>
         </table>

         <table width="500px" cellpadding="5px" border="1" style="background-color: #03CCD2 ;">
             <thead style="background-color:#000000; color: white;">
                 <tr>
                     <th>Nombre del Jugador</th>
                     <th>Apodo</th>
                     <th>Equipo</th>
                     <th>Liga</th>
                     <th>Posición</th>
                     <th>Total Minutos</th>
                     <th>Partidos Jugados</th>
                     <th>promedio</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                    foreach ($datosJugador as $key => $dato) {
                        if ($key != 'id_posicion') { ?>
                         <td><?php str_replace("_", " ", $key)  ?><?= $dato ?></td>
                     <?php } ?>
                 <?php } ?>
             </tbody>
         </table>
     </div>
     <br> <br>
     <div class="container">
     <div class="col-lg-5" style="display:none;" id="OptEstadisticas">
        <input type="hidden" id="controlEstad" value="2">
             <input type="hidden" id="id_posicion" name="id_posicion" value=" <?= $DatosJugador["id_posicion"] ?>">
             <table width="230px" cellpadding="5px" border="1" style="background-color: #E393A8 ; text-align: center;">
                 <thead style="background-color:#000000; color: white;">
                     <tr>
                         <th>Estadisticas</th>

                         <th>Total</th>
                     </tr>
                 </thead>
                 <tbody>
               
                     <?php
                        foreach ($datosPdf as $key => $value) {
                            if ("pre_" == substr($key, 0, 4)) {
                        ?>
                             <tr>
                                 <td> <?= str_replace("_", " ", str_replace("pre_", " ", $key)) ?></td>
                                 <td> <?= str_replace("_", " ", str_replace("pre_", " ", $value)) ?></td>
                             </tr>
                         <?php } ?>
                     <?php } ?>
                    </tbody>
                    
                </table>
                <input type="hidden" id="controlPre" value="2">
         </div>

     </div>
     <br> <br>


     <table width="200px" cellpadding="5px" border="1" style="background-color:#93C4E3; 
             text-align: center;margin-left:53% ; margin-top: -70%;">
         <thead style="background-color:#000000; color: white;">
             <tr>
                 <th>Estadísticas Nuevas</th>
                 <th>Total</th>
             </tr>
         </thead>
         <tbody>
             <?php
                foreach ($datosPdf as $key => $value) {
                    if ("nueva_" == substr($key, 0, 6)) {
                ?>
                     <tr>
                         <td> <?= str_replace("_", " ", str_replace("nueva_", " ", $key)) ?></td>
                         <td> <?= str_replace("_", " ", str_replace("nueva_", " ", $value)) ?></td>
                     </tr>
                 <?php } ?>
             <?php } ?>
         </tbody>
     </table>
     <br> <br>

     

</div>
     <div class="container">

         <table width="200px" cellpadding="5px" border="1" style="background-color: #FBDFFD; text-align: center;">
             <thead style="background-color:#000000; color: white;">
                 <tr>
                     <th>Estadísticas de Arquero</th>
                     <th>Total</th>
                 </tr>
             </thead>
             <tbody>
                 <div class="col-8 mt-3">
                     <span id="TituloEstadArquero"></span>
                 </div>
                 <?php

                    foreach ($datosPdf as $key => $value) {
                        if ("por_" == substr($key, 0, 4)) {
                    ?>
                         <tr>
                             <td> <?= str_replace("_", " ", str_replace("por_", " ", $key)) ?></td>
                             <td> <?= $value ?></td>
                         </tr>
                     <?php } ?>
                 <?php } ?>
             </tbody>
         </table>
     </div>
 </body>




 </html>


 <?php

    $nombreImagen = "../../public\assets\img\Stadplayers.jpg";
    $imagenBase64 = "data:image/jpg;base64," . base64_encode(file_get_contents($nombreImagen));
    // var_dump(file_get_contents($nombreImagen));
    
    ?>
 <?php
    // include_once(BASE_DIR . "../../Views/partials/header.php");
    // include_once(BASE_DIR . "../../Views/partials/aside.php");
    // session_start();





    // require_once '../../dompdf/autoload.inc.php';
    include_once "../../dompdf/vendor/autoload.php";

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    // include "../../public/assets/img/Stadplayers.jpg";
    $html = ob_get_clean();
    $dompdf->setPaper('A4','Landscape');
    $dompdf->loadHtml($html);
    $dompdf->render();
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=documento.pdf");
    echo $dompdf->output();
