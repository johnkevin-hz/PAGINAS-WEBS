<?php

require_once "conexion.php";

class ModelsFormularios{
    static public function mdlSelecRegistryTrab($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt -> null;
    }
    static public function mdlRegistry($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(tra_cod,tra_nom,tra_pat,tra_mat,tra_Ful,tra_Hul) VALUES (:cod,:nombre,:apa,:ama,:fecha,:hora)");
        $stmt -> bindParam(":cod", $datos["cod"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apa", $datos["apa"], PDO::PARAM_STR);
        $stmt -> bindParam(":ama", $datos["ama"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
            return "error";
        }
        $stmt -> close();
        $stmt -> null;
    }
    static public function mdlEdit($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET tra_nom=:nombre,tra_pat=:apa,tra_mat=:ama,tra_Ful=:fecha,tra_Hul=:hora WHERE tra_cod = :cod");
        $stmt -> bindParam(":cod", $datos["cod"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apa", $datos["apa"], PDO::PARAM_STR);
        $stmt -> bindParam(":ama", $datos["ama"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
            return "error";
        }
        $stmt -> close();
        $stmt -> null;
    }
    static public function mdlEli($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET est_ado=1,tra_Ful=:fecha,tra_Hul=:hora WHERE tra_cod = :cod");
        $stmt -> bindParam(":cod", $datos["cod"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
            return "error";
        }
        $stmt -> close();
        $stmt -> null;
    }
























    static public function mdlSeleccionarRegistroIngreso($tabla, $item, $valor){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item , $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt -> null;
    }

    
    static public function mdlSeleccionarRegistroAdmin($tabla, $item, $valor){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt -> bindParam(":".$item , $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt -> fetch();
        $stmt -> close();
        $stmt -> null;
    }
    
    static public function mdlRegistroTorres($tabla, $datos){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(ttorregDesc,ttorregCoord,ttorregTipAnt,ttorregRad,ttorregCol,ttorregFechReg,ttorregHorReg) VALUES (:descripcion,:coordenadas,:antena,:radio,:color,:fecha,:hora)");
        $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":coordenadas", $datos["coordenadas"], PDO::PARAM_STR);
        $stmt -> bindParam(":antena", $datos["antena"], PDO::PARAM_STR);
        $stmt -> bindParam(":radio", $datos["radio"], PDO::PARAM_STR);
        $stmt -> bindParam(":color", $datos["color"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
            return "error";
        }
        $stmt -> close();
        $stmt -> null;
    }






















    
    
    static public function mdlSelecRegistryTowers($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt -> null;
    }
    static public function mdlSelecRegistryTowersCustomers($tabla,$item){
        $stmt = Conexion::conectar() -> prepare("SELECT Reg.tregCod,Reg.tregTok,Reg.tregDni,Reg.tregNom,Reg.tregApa,Reg.tregAma,Reg.tregCel1,Reg.tregCel2,Reg.tregTorr,Reg.tregDir,Reg.tregDesc,Reg.tregDis,Reg.tregCoord,Reg.tregEst,Reg.tregFechReg,Reg.tregHorReg,Torr.ttorregCod,Torr.ttorregDesc,Torr.ttorregCoord,Torr.ttorregTipAnt,Torr.ttorregRad,Torr.ttorregCol,Torr.ttorregFechReg,Torr.ttorregHorReg FROM $tabla Reg INNER JOIN tel_reg_torr Torr ON Reg.tregTorr=Torr.ttorregCod WHERE tregTorr = $item");
        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt -> close();
        $stmt -> null;
    }

}