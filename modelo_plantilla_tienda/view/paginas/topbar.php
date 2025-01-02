<?php
    $pest = $_GET["pagina"];

    if($pest == "inicio"){ $est_inicio = 'active'; }else{ $est_inicio = ' '; }
    if($pest == "tienda"){ $est_tienda = 'active'; }else{ $est_tienda = ' '; }
    if($pest == "nosotros" || $pest == "detalles_tienda" || $pest == "carro_de_compras" || $pest == "verificar" || $pest == "detalles_blog"){ $est_paginas = 'active'; }else{ $est_paginas = ' '; }
    if($pest == "blog"){ $est_blog = 'active'; }else{ $est_blog = ' '; }
    if($pest == "contactos"){ $est_contactos = 'active'; }else{ $est_contactos = ' '; }


?>

<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="#">INICIAR SESIÓN</a>
            <a href="#">PREGUNTAS FRECUENTES</a>
        </div>
        <div class="offcanvas__top__hover">
            <span>PEN <i class="arrow_carrot-down"></i></span>
            <ul>
                <li>PEN</li>
                <li>USD</li>
                <li>EUR</li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"><img src="assets/img/icon/search.png" alt=""></a>
        <a href="#"><img src="assets/img/icon/heart.png" alt=""></a>
        <a href="#"><img src="assets/img/icon/cart.png" alt=""> <span>0</span></a>
        <div class="price">S/ 0.00</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>ABIERTO: Lunes - Sabado | 8:00 - 17:30. Jr. San Martin N°2655</p>
    </div>
</div>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>ABIERTO: Lunes - Sabado | 8:00 - 17:30. Jr. San Martin N°2655</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            <a href="#">INICIAR SESIÓN</a>
                            <a href="#">PREGUNTAS FRECUENTES</a>
                        </div>
                        <div class="header__top__hover">
                            <span>PEN <i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li>PEN</li>
                                <li>USD</li>
                                <li>EUR</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="index.php?pagina=inicio"><img src="assets/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="<?php echo $est_inicio; ?>"><a href="index.php?pagina=inicio">Inicio</a></li>
                        <li class="<?php echo $est_tienda; ?>"><a href="index.php?pagina=tienda">Tienda</a></li>
                        <li class="<?php echo $est_paginas; ?>"><a href="#">Páginas</a>
                            <ul class="dropdown">
                                <li><a href="index.php?pagina=nosotros">Sobre Nosotros</a></li>
                                <li><a href="index.php?pagina=detalles_tienda">Detalles De La Tienda</a></li>
                                <li><a href="index.php?pagina=carro_de_compras">Carro De Compras</a></li>
                                <li><a href="index.php?pagina=verificar">Verificar</a></li>
                                <li><a href="index.php?pagina=detalles_blog">Detalles Del Blog</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $est_blog; ?>"><a href="index.php?pagina=blog">Blog</a></li>
                        <li class="<?php echo $est_contactos; ?>"><a href="index.php?pagina=contactos">Contáctos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="assets/img/icon/search.png" alt=""></a>
                    <a href="#"><img src="assets/img/icon/heart.png" alt=""></a>
                    <a href="#"><img src="assets/img/icon/cart.png" alt=""> <span>0</span></a>
                    <div class="price">S/ 0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>