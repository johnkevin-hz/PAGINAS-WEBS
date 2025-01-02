<?php
session_start();
if(isset($_GET["pagina"])){
    if(
    $_GET["pagina"]=="inicio" ||
    $_GET["pagina"]=="tienda" || 

    $_GET["pagina"]=="nosotros"||
    $_GET["pagina"]=="detalles_tienda"||
    $_GET["pagina"]=="carro_de_compras"||
    $_GET["pagina"]=="verificar"||
    $_GET["pagina"]=="detalles_blog"||

    $_GET["pagina"]=="blog"||
    $_GET["pagina"]=="contactos"){
        include "paginas/".$_GET["pagina"].".php";
    }else{
        include "paginas/error404.php";
    }
}else{
    include "paginas/inicio.php";
}
