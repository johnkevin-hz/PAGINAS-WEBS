<?php 
    $dni = $_GET['dni'];
    $nombres = strtoupper($_GET['nombres']);
    $sexo = $_GET['sexo'];

    $lugar1 = $_GET['lugar1'];
    $lugar2 = $_GET['lugar2'];
    $lugar3 = $_GET['lugar3'];
    $lugar4 = $_GET['lugar4']; 

    $fecha_nacimiento = $_GET['fecha_nacimiento'];
    $fecha_nacimiento_año = date("Y", strtotime($fecha_nacimiento));
    $fecha_emision = $_GET['fecha_emision'];
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Puedes verificar la aplicación de tu vacuna contra el coronavirus u otras que hayas recibido recientemente en el Carné de vacunación web del Ministerio de Salud. Aquí, está registrada la fecha y lugar donde se te inmunizó, además del tipo de vacuna que recibiste, el fabricante de la vacuna y el número de lote.">
        <meta name="keywords" content="Carnet Vacunas, Minsa, Covid19">
        <meta name="author" content="Minsa Perú">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>MINSA - Carnet Vacunación</title>
        <link rel="shortcut icon" type="image/x-icon" href="plugins/favicon.ico">
        <meta name="msapplication-TileColor" content="#b7e3e4">
        <meta name="theme-color" content="#b7e3e4">
        <link id="app-template" rel="stylesheet" href="./plugins/css/estilos_inicio.min.css">
    </head>
<body>
    <div class="app" id="japp">
        <div class="aContainer">
            <div class="aLogo">
                <img src="./plugins/logo-carnet-opt.png" class="aLogoImg" alt="Logo Carnet de Vacunación - MINSA">                
            </div>
            <div class="aBody" id="jaBody">
            <div class="aTitle">
               <img src="./plugins/injeccion-opt.png" width="30" height="30" alt="Icono Inyección" style="vertical-align: bottom;">
               Carnet de Vacunación
            </div>
            <div class="aBorder1">
               <div class="row">
                   <div class="col-3 text-center">
                       <img src="./plugins/user-<?php echo $sexo; ?>-opt.png" class="img-responsive" style="width:100%;max-width: 8rem;">
                   </div>
                   <div class="col-9">
                       <div style="line-height:1.3rem">
                         <?php echo $nombres; ?>
                         <hr style="border:none; border-top: #d3d8d8 solid 1px;">
                         <b>Fec. Nac.:</b> <?php echo $fecha_nacimiento; ?>
                         <hr style="border:none; border-top: #d3d8d8 solid 1px;">
                         <b>Fec. Em.:</b> <?php echo $fecha_emision; ?>
                         <hr style="border:none; border-top: #d3d8d8 solid 1px;">
                         <b>Edad:</b>  <?php echo date("Y", time()) - $fecha_nacimiento_año; ?>
                       </div>
                   </div>
               </div>
            </div>
          
            <div class="row" style="margin-top: 0.8rem">
                <div class="col-12" style="text-align:right">
                </div>
            </div>
           <div class="aCList" style="padding:0">
               <div class="aList">
                    <div style="display: flex">
                        <div style="width:2rem">
                            <div class="aListIcon">
                                <img src="./plugins/covid19-opt.png" class="img-responsive" alt="Icono COVID-19">
                            </div>
                        </div>
                        <div style="width: 100%;">                            
                            <div class="aTxtTitle"><b>Vacuna contra Covid</b></div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-7">
                        </div>           
                        <div class="col-5">
                        <button type="button" class="btn btn1 btnEff jOptVacuna" data-id="0" style="border-radius: 0.4rem; margin:0.3rem 0">
                            <img src="./plugins/eye-regular.png" alt="Icono ver certificado" style="vertical-align: middle">
                            VER CÓDIGO QR
                        </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="background:#e7f6f5; border-radius: 5px;">
                            <div class="aTxtBody2">
                                <img src="./plugins/arrow-alt-circle-right-regular.png" alt="Icono Dosis" style="vertical-align: sub;">
                                1ª dosis
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Jueves 09 de Dic. del 2021 
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Vacuna contra Covid 
                            </div>                              
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/map-marker-alt-solid.png" alt="Icono lugar vacuna" style="vertical-align: sub;">
                                <?php echo $lugar1; ?>
                            </div>                            
                        </div>
                        <div class="col-12" style="background:#e7f6f5; border-radius: 5px;">
                            <div class="aTxtBody2">
                                <img src="./plugins/arrow-alt-circle-right-regular.png" alt="Icono Dosis" style="vertical-align: sub;">
                                2ª dosis
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Sábado 19 de Feb. del 2022
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Vacuna contra Covid 
                            </div>                              
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/map-marker-alt-solid.png" alt="Icono lugar vacuna" style="vertical-align: sub;">
                                <?php echo $lugar2; ?>
                            </div>                            
                        </div>
                        <div class="col-12" style="background:#e7f6f5; border-radius: 5px;">
                            <div class="aTxtBody2">
                                <img src="./plugins/arrow-alt-circle-right-regular.png" alt="Icono Dosis" style="vertical-align: sub;">
                                3ª dosis
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Sábado 15 de Abr. del 2022
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Vacuna contra Covid 
                            </div>                              
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/map-marker-alt-solid.png" alt="Icono lugar vacuna" style="vertical-align: sub;">
                                <?php echo $lugar3; ?>
                            </div>                            
                        </div>
                        <div class="col-12" style="background:#e7f6f5; border-radius: 5px;">
                            <div class="aTxtBody2">
                                <img src="./plugins/arrow-alt-circle-right-regular.png" alt="Icono Dosis" style="vertical-align: sub;">
                                4ª dosis
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Lunes 04 de Jul. del 2022
                            </div>
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/shield-alt-solid.png" alt="Icono fecha vacuna" style="vertical-align: sub;">
                                Vacuna contra Covid 
                            </div>                              
                            <div class="aTxtBody2 aTxtBody2-Right">
                                <img src="./plugins/map-marker-alt-solid.png" alt="Icono lugar vacuna" style="vertical-align: sub;">
                                <?php echo $lugar4; ?>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            </div> 
            <hr class="aLine1" style="margin-top:0">
            <div class="text-center" style="color:#5c5c5c; padding:0 0.2rem 0.3rem">
                Copyright © 2022. Desarrollado por la Oficina General de Tecnologías de la Información del Ministerio de Salud | Todos los derechos reservados.
            </div>           
        </div>
        <nav>
            <ul>
                <li>
                    <a href="">
                        <img src="./plugins/globe-americas-solid.png" alt="Icono Ver Ipress">
                        <span>Mapa</span>
                    </a>
                </li>
                <li>
                    <a href="" routertype="2">
                        <img src="./plugins/exclamation-circle-solid.png" alt="Icono Ver Ipress">
                        <span>Info</span>
                    </a>
                </li>
            </ul>
        </nav>
        <a href="index.php" class="btn btn1 aBtnClose">Salir</a>
    </div>
</body>
</html>