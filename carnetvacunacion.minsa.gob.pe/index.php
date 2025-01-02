<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <base href=".">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Puedes verificar la aplicación de tu vacuna contra el coronavirus u otras que hayas recibido recientemente en el Carné de vacunación web del Ministerio de Salud. Aquí, está registrada la fecha y lugar donde se te inmunizó, además del tipo de vacuna que recibiste, el fabricante de la vacuna y el número de lote.">
        <meta name="keywords" content="Carnet Vacunas, Minsa, Covid19">
        <meta name="author" content="Minsa Perú">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>MINSA - Carnet Vacunación</title>
        <link rel="shortcut icon" type="image/x-icon" href="./plugins/favicon.ico">
        <meta name="msapplication-TileColor" content="#b7e3e4">
        <meta name="theme-color" content="#b7e3e4">
        <link id="app-template" rel="stylesheet" href="./plugins/css/estilos_login.min.css">
    </head>
<body>
    <div class="app" id="japp">
        <style>
            .aFrmLoginIconHelp {
                font-size: 1.2rem;
                padding: 0.4rem 0.2rem 0;
                cursor: pointer;
                color: #9c9c9c;
            }
        </style>
        <div class="aContainer" style="top: 0px;">
            <div class="text-center">
                <img src="./plugins/logo-minsa-opt.jpg" alt="Logo Minsa" width="220" style="max-width: 15rem; width: 100%; border: #fff solid 1px">
            </div>
            <div class="aLogo">
                <img src="./plugins/logo-carnet-opt.png" class="aLogoImg" alt="Logo Carnet Vacunación">
            </div>
            <div class="aBody" id="jaBody">
                <form name="formulario" method="get" action="inicio.php">
                    <div class="aFrmContainer aAnimationOpacityShow">                    
                        <div class="aFrmHeader text-center" style="font-size:1.5em; padding:0; color: rgb(1, 135, 129)">
                            <b>Ingrese los Datos Solicitados</b>
                        </div>
                        <div class="aFrmBody">
                            <div class="row">
                                <div class="col-6">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="jaFrmRegVacTxtNumDoc"><b>Apellidos y Nombres</b></label>
                                        <div style="display: flex;">                                        
                                            <input type="text" id="nombres" name="nombres" required>

                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="jaFrmRegVacTxtNumDoc"><b>Número de Documento</b></label>
                                        <div style="display: flex;">                                        
                                            <input type="text" id="dni" name="dni" maxlength="8" required>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="jaFrmRegVacLstTipoDoc"><b>Sexo</b></label>
                                        <select id="sexo" name="sexo" required>
                                            <option value="1">HOMBRE</option>
                                            <option value="2">MUJER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php 
                                    $cant_dosis = 4;
                                    $lugares = array(
                                        'PUNO - C.S. JORGE CHAVEZ - PUNO SAN ROMAN JULIACA',
                                        'PUNO - HOSPITAL CARLOS MONJE MEDRANO - PUNO SAN ROMAN JULIACA',
                                        'PUNO - COLISEO CERRADO - JULIACA - PUNO SAN ROMAN JULIACA',
                                        'PUNO - COLISEO CERRADO - JULIACA - PUNO SAN ROMAN JULIACA'
                                    );
                                    $cant_lugares = 4;
                                ?>
                                <?php for($i = 1; $i <= $cant_dosis; $i++){ 
                                    $array_rand = rand(1,$cant_lugares); ?>

                                    <div class="col-3">
                                        <div class="aFrmForm">
                                            <label class="aFrmLabel" for="jaFrmRegVacLstTipoDoc"><b>Lugar de vacuna <?php echo $i;?> - <?php echo $array_rand;?></b></label>
                                            <select id="lugar<?php echo $i;?>" name="lugar<?php echo $i;?>" required>
                                                <option value="<?php echo $lugares[$array_rand - 1];?>"><?php echo $lugares[$array_rand - 1];?></option>
                                                <?php for($j = 1; $j <= $cant_lugares; $j++){ ?>
                                                    <option value="<?php echo $lugares[$j - 1];?>"><?php echo $lugares[$j - 1];?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtFechaNacimiento"> <b>Fecha de Nacimiento</b> <span>(opcional)</span></label>
                                        <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="18-09-1985" placeholder="dd/mm/yyyy" maxlength="10" lang="es" min="1900-01-01" max="2023-01-01">
                                    </div>
                                </div>
                                <div class="col-6 jaFrmXTDoc">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtFechaEmision"><b>Fecha de Emisión</b> <span>(opcional)</span></label>
                                        <div style="display: flex;">
                                            <input type="text" id="fecha_emision" name="fecha_emision" value="25-11-2016" placeholder="dd/mm/yyyy" maxlength="10" lang="es" min="1900-01-01" max="2023-01-01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-6 jaFrmXTDoc">
                                    <div class="aFrmForm">
                                        <label class="aFrmLabel" for="txtCodigoVerificacion"> <b>Código de Verificación</b></label>
                                        <div style="display: flex;">
                                            <input type="number" id="txtCodigoVerificacion" value="1">
                                            <div class="aFrmLoginIconHelp jaFrmXTDoc" title="¿Qué es?" data-type="4">
                                                <img src="./plugins/question-solid.png" alt="Icono Pregunta">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                </div>                          
                            </div>
                            <hr class="aLine1">
                            <!--
                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <a href="./plugins/doc/politica-privacidad.pdf" style="font-size: 1rem" target="_blank"> Política de privacidad </a>
                                    </div>
                                </div>
                            </div>
                            <hr class="aLine1">
                            
                            <div class="row">
                                <div class="col-12">                               
                                    <input type="checkbox" id="chkPolitica" style="float:left; margin-right: 0.5rem">
                                    <label for="chkPolitica" style="font-size: 1rem; display:block; padding-top: 0.4rem;">
                                        Acepto el <a href="./plugins/doc/tratamiento-datos.pdf" style="font-size: 1rem" target="_blank"> tratamiento de mis datos personales </a>
                                    </label>                                                      
                                </div>
                            </div>
                            -->
                            <hr class="aLine1">
                            <hr class="aLine1">
                            <div class="row"> 
                                <div class="col-4">                               
                                </div>                           
                                <div class="col-4" style="padding-top:15px">
                                    <button class="btn btn1 btnEff" type="submit">                                    
                                        <img src="./plugins/angle-double-right-solid.png" alt="Icono Iniciar Sesión" style="vertical-align: sub">
                                        INICIAR SESIÓN
                                    </button>
                                </div>
                                <div class="col-4">                               
                                </div>
                            </div>
                            <!--
                            <div class="row">                            
                                <div class="col-4">                               
                                </div>
                                <div class="col-4" style="padding-top:10px">
                                    <div class="text-center" style="font-size: 1.3em;color: rgb(1, 135, 129); padding:0 0 0.2rem 0">¿Cuentas con tu código QR?</div>
                                    <button class="btn btn2 btnEff" id="btnVerificar" type="button">                                    
                                        <img src="./plugins/qrcode-solid.png" alt="Verificar" style="vertical-align: sub">
                                        VALIDAR QR
                                    </button>
                                </div>
                                <div class="col-4">                               
                                </div>
                            </div>
                            -->
                            <hr class="aLine1">
                            <div class="text-center" style="color:#6c6c6c">
                                Copyright © 2021. Desarrollado por la Oficina General de Tecnologías de la Información del Ministerio de Salud | Todos los derechos reservados.
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
