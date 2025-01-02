<?php

class ControllerFormularios{
    static public function ctrSelecRegistryTrab(){
        $tabla = "prueba_trabajador";
        $respuesta = ModelsFormularios::mdlSelecRegistryTrab($tabla);
        return $respuesta;
    }
    static public function ctrRegistry(){
        if(isset($_POST["reg"]) && isset($_POST["nom"]) && isset($_POST["apa"]) && isset($_POST["ama"]) ){
            $nombre = $_POST["nom"];
            $apa = $_POST["apa"];
            $ama = $_POST["ama"];

            $tkn ="";
            $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
            $codeAlphabet.= "0123456789";
            $max = strlen($codeAlphabet);
            for ($i=0; $i < 10; $i++) {
                $tkn = $codeAlphabet[rand(0, $max-1)];
            }
            $cod = md5($tkn);
            $tabla = "prueba_trabajador";
            $z = 'America/Lima';
            date_default_timezone_set($z);
            $fecPres = date("d/m/Y");
            $horPres = date("h:i:s A");

            $datos = array(
                "cod"=> $cod,
                "nombre"=> strtoupper($nombre),
                "apa"=> strtoupper($apa),
                "ama"=> strtoupper($ama),
                "fecha"=> $fecPres,
                "hora"=> $horPres
            );
            $respuesta = ModelsFormularios::mdlRegistry($tabla, $datos);
            return $respuesta;
        } 
    }
    static public function ctrEdit(){
        if(isset($_POST["edit"]) && isset($_POST["cod"]) && isset($_POST["nom"]) && isset($_POST["apa"]) && isset($_POST["ama"]) ){
            $cod = $_POST["cod"];
            $nombre = $_POST["nom"];
            $apa = $_POST["apa"];
            $ama = $_POST["ama"];

            $tabla = "prueba_trabajador";
            $z = 'America/Lima';
            date_default_timezone_set($z);
            $fecPres = date("d/m/Y");
            $horPres = date("h:i:s A");

            $datos = array(
                "cod"=> $cod,
                "nombre"=> strtoupper($nombre),
                "apa"=> strtoupper($apa),
                "ama"=> strtoupper($ama),
                "fecha"=> $fecPres,
                "hora"=> $horPres
            );
            $respuesta = ModelsFormularios::mdlEdit($tabla, $datos);
            return $respuesta;
        } 
    }

    static public function ctrEli(){
        if(isset($_POST["eli"]) && isset($_POST["cod"]) ){
            $cod = $_POST["cod"];

            $tabla = "prueba_trabajador";
            $z = 'America/Lima';
            date_default_timezone_set($z);
            $fecPres = date("d/m/Y");
            $horPres = date("h:i:s A");

            $datos = array(
                "cod"=> $cod,
                "fecha"=> $fecPres,
                "hora"=> $horPres
            );
            $respuesta = ModelsFormularios::mdlEli($tabla, $datos);
            return $respuesta;
        } 
    }









































    public function ctrIngreso(){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $tabla = "tel_admin";
            $item = "tadEma";
            $valor = $_POST["email"];
            $enPss = crypt($_POST["password"],'$2a$07$sind7UdjuHye8NjdmjutenCF8$');
            $respuesta = ModelsFormularios::mdlSeleccionarRegistroIngreso($tabla, $item, $valor);
            #echo '<pre>'; print_r($respuesta); echo '</pre>';
            if($respuesta["tadEma"] == $_POST["email"] && $respuesta["tadPas"] == $enPss){
                $_SESSION["valUserTel"] = "ok";
                $_SESSION["valUserDni"]= $respuesta["tadDni"];
                $_SESSION["valUserCod"]= $respuesta["tadCod"];
                $_SESSION["valUserEma"] = $respuesta["tadEma"];
                echo "
                    <div id='aler' class='alert alert-dismissible alert-success'><span class='icon-cross'></span><i class='fa fa-fw fa-close'></i>USUARIO VÁLIDO, INICIANDO.</div>
                    <script>
                    setTimeout(function(){
                        if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                        window.location ='index.php?pagina=inicio';
                    },2000);
                    </script>
                    ";
            }else{
                echo "
                    <div id='aler' class='alert alert-dismissible alert-danger'><span class='icon-cross'></span><i class='fa fa-fw fa-close'></i>¡INGRESO INCORRECTO!</div>
                    <script>
                    setTimeout(function(){
                        if(window.history.replaceState){
                        window.history.replaceState(null, null, window.location.href);
                        }
                        window.location.reload(); 
                    },2000);
                    </script>
                    ";
            }
            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistroAdmin(){
        $tabla = "tel_admin";
        $item = "tadEma";
        $valor = $_SESSION["valUserEma"];
        $respuesta = ModelsFormularios::mdlSeleccionarRegistroAdmin($tabla, $item, $valor);
        return $respuesta;
    }
    
    static public function ctrRegistroTorres(){
        
        if(isset($_POST["descripcion"]) && isset($_POST["coordenadas"]) && isset($_POST["antena"]) && isset($_POST["radio"]) && isset($_POST["color"])){
            $descripcion = $_POST["descripcion"];
            $coordenadas = $_POST["coordenadas"];
            $antena = $_POST["antena"];
            $radio = $_POST["radio"];
            $color = $_POST["color"];

            if(preg_match('/^[0-9]+$/',$radio)){
                $tabla = "tel_reg_torr";
                $z = 'America/Lima';
                date_default_timezone_set($z);
                $fecPres = date("d/m/Y");
                $horPres = date("h:i:s");

                $datos = array(
                    "descripcion"=> strtoupper($descripcion),
                    "coordenadas"=> $coordenadas,
                    "antena"=> $antena,
                    "radio"=> $radio,
                    "color"=> $color,
                    "fecha"=> $fecPres,
                    "hora"=> $horPres
                );
                $respuesta = ModelsFormularios::mdlRegistroTorres($tabla, $datos);
                return $respuesta;
            }
            else{
                return "error";
            } 
            
             
        } 
    }





    





    
    
    static public function ctrSelecRegistryTowers(){
        $tabla = "tel_reg_torr";
        $respuesta = ModelsFormularios::mdlSelecRegistryTowers($tabla);
        return $respuesta;
    }
    static public function ctrSelecRegistryTowersCustomers($TorrCod){
        $tabla = "tel_reg_client";
        $item = $TorrCod;
        $respuesta = ModelsFormularios::mdlSelecRegistryTowersCustomers($tabla,$item);
        return $respuesta;
    }




}