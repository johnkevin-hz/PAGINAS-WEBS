<?php

class ControllerFormularios{
    static public function ctrIncVist(){
        $tabla = "sun1_vist";
        $can = ModelsFormularios::mdlSelecVistAct($tabla);

        $valor = $can["sun1Vist"] + 1;
        
        $respuesta = ModelsFormularios::mdlIncVist($tabla,$valor);
        return $can;
    }











}