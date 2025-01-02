<?php

require_once "conexion.php";

class ModelsFormularios{
    static public function mdlSelecVistAct($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt -> null;
    }
    static public function mdlIncVist($tabla,$valor){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET sun1Vist=$valor" );
        $stmt->execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt -> null;
    }



















    
    
    
    
    
    
    
}