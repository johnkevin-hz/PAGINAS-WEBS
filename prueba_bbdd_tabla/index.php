<?php
require_once "controller/plantilla.controller.php";
require_once "controller/formularios.controller.php";

require_once "model/formularios.model.php";


//echo '<pre>'; print_r($conexion); echo '</pre>';   

$plantilla = new ControllerPlantilla();
$plantilla -> ctrTraerPlantilla();