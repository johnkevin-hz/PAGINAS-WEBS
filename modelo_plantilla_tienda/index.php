<?php
require_once "controller/plantilla.controller.php";
require_once "controller/formularios.controller.php";
//require_once "controller/admin.controller.php";
require_once "model/formularios.model.php";
//require_once "model/admin.model.php";

//require_once "model/conexion.php";
//$conexion = Conexion::conectar();

//echo '<pre>'; print_r($conexion); echo '</pre>';   

$plantilla = new ControllerPlantilla();
$plantilla -> ctrTraerPlantilla();


