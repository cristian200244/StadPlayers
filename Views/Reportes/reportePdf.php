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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
 </head>

 <body>
     <div class="container">
         <img src="<?php echo $imagenBase64 ?>" />

         <table width="500px" cellpadding="5px" border="1" style="background-color: #FBDFFD;">
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

         <table width="500px" cellpadding="5px" border="1" style="background-color: #FBDFFD;">
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

         <table width="230px" cellpadding="5px" border="1" style="background-color: #FBDFFD; text-align: center;">
             <thead style="background-color:#000000; color: white;">
                 <tr>
                     <th>Estadísticas</th>
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

         <br> <br>


         <table width="200px" cellpadding="5px" border="1" style="background-color: #FBDFFD; 
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

     </div>
     <br> <br>
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

    $nombreImagen = "Stadplayers.jpg";
    $imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
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
    $dompdf->loadHtml($html);
    $dompdf->render();
    header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=documento.pdf");
    echo $dompdf->output();