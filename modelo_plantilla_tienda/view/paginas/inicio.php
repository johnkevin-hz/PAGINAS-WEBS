<?php
  include('head.php');
?>
<body>
    
    <?php
        include('topbar.php');
    ?>
    

    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Colección de verano</h6>
                                <h2>Colecciones Otoño - Invierno 2030</h2>
                                <p>Una marca especializada en la creación de artículos esenciales de lujo. Hecho éticamente con un inquebrantable compromiso con la calidad excepcional.</p>
                                <a href="#" class="primary-btn">COMPRA AHORA <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="assets/img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Colección de verano</h6>
                                <h2>Colecciones Otoño - Invierno 2030</h2>
                                <p>Una marca especializada en la creación de artículos esenciales de lujo. Hecho éticamente con un inquebrantable compromiso con la calidad excepcional.</p>
                                <a href="#" class="primary-btn">COMPRA AHORA <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="assets/img/banner/banner-1.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Colecciones de Ropa 2030</h2>
                            <a href="#">COMPRAR AHORA</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="assets/img/banner/banner-2.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accesorios</h2>
                            <a href="#">COMPRAR AHORA</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="assets/img/banner/banner-3.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Zapatos Primavera 2030</h2>
                            <a href="#">COMPRAR AHORA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Las Más Vendidas</li>
                        <li data-filter=".new-arrivals">Los Recién Llegados</li>
                        <li data-filter=".hot-sales">Ventas Calientes</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-1.jpg">
                            <span class="label">NUEVO</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Cazadora Biker Piqué</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-2.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Cazadora Biker Piqué</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-3.jpg">
                            <span class="label">REBAJA</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Bolso de pecho con múltiples bolsillos</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-4.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Gorra con textura diagonal</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-5.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Mochila de cuero</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 31.37</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-6.jpg">
                            <span class="label">REBAJA</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Botines</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-7.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Camiseta Bolsillo Contraste</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-8.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Bufanda fluida básica</h6>
                            <a href="#" class="add-cart">+ Añadir Al Carrito</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>S/ 26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Ropa Caliente <br /> <span>Zapatos</span> <br /> Accesorios</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="assets/img/product-sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Liquidación</span>
                            <h5>S/ 29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Oferta de la semana</span>
                        <h2>Bolso Pechera Multibolsillos Negro</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Días</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Horas</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutos</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Segundos</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">COMPRAR AHORA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="assets/img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Encuentranos en nuestros redes sociales nuestras ultimas tendencias de acuerdo a nuestra actualidad. Amigos y Famosos de la Época.</p>
                        <h3>#Moda_Masculina</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>ÚLTIMAS NOTICIAS</span>
                        <h2>Moda: Nuevas Tendencias</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="assets/img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="assets/img/icon/calendar.png" alt=""> 16 Febrero 2022</span>
                            <h5>¿Qué rizadores son los mejores?</h5>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="assets/img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="assets/img/icon/calendar.png" alt=""> 21 Febrero 2022</span>
                            <h5>Las bandas de la eternidad duran para siempre</h5>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="assets/img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="assets/img/icon/calendar.png" alt=""> 28 Febrero 2022</span>
                            <h5>Los beneficios para la salud de las gafas de sol</h5>
                            <a href="#">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        include('footer.php');
    ?>
    
    <?php
        include('script.php');
    ?>
</body>

</html>