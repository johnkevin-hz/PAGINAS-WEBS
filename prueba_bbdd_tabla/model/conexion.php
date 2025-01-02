<?php
error_reporting(0);
class Conexion{
    static public function conectar(){
        try {
            $link = new PDO("mysql:host=localhost;dbname=kevvingc_iuvade_prueba","kevvingc_iuvade","kevin8520");
            //$link = new PDO("mysql:host=localhost;dbname=iuvade_prueba","root","");
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
                session_destroy();
                header("Location: https://kevving.com/");

        }
    }

}




