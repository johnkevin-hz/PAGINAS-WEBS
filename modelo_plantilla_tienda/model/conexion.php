
<?php
error_reporting(0);
class Conexion{
    static public function conectar(){
        try {
            $link = new PDO("mysql:host=localhost;dbname=suningei_sun1","root","");
            #$link = new PDO("mysql:host=localhost;dbname=v1c3ns4y0s","root","1@CenUZ2%ncv20");
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
                session_destroy();
                header("Location: https://suningeirl.com/");

        }
    }

}


