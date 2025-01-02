<?php
session_start();
if(isset($_GET["pagina"])){
    if($_GET["pagina"]=="registro" ||
    $_GET["pagina"]=="login" || 
    $_GET["pagina"]=="perfil" || 
    $_GET["pagina"]=="salir"||
    $_GET["pagina"]=="inicio"||
    $_GET["pagina"]=="inicio2"||
    $_GET["pagina"]=="clientes" || 
    $_GET["pagina"]=="clientes_map"||
    $_GET["pagina"]=="torres"||
    $_GET["pagina"]=="torres_map"||
    $_GET["pagina"]=="cpanel"){
        include "paginas/".$_GET["pagina"].".php";
    }else{
        include "paginas/error404.php";
    }
}else{
    include "paginas/inicio.php";
}
