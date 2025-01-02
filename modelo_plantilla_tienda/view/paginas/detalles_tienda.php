<?php
  include('head.php');
?>
<body>
    <?php
        include('topbar.php');
    ?>

    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="index.php?pagina=inicio">Inicio</a>
                            <a href="index.php?pagina=tienda">Tienda</a>
                            <span>Detalles De Producto</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="assets/img/shop-details/thumb-1.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="assets/img/shop-details/thumb-2.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="assets/img/shop-details/thumb-3.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="assets/img/shop-details/thumb-4.png">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="assets/img/shop-details/product-big-2.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="assets/img/shop-details/product-big-3.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="assets/img/shop-details/product-big.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="assets/img/shop-details/product-big-4.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>Anorak térmico con capucha</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reseñas</span>
                            </div>
                            <h3>S/ 270.00 <span>70.00</span></h3>
                            <p>Abrigo con forro acolchado y capucha ajustable. Con mangas largas con ajustable lengüetas en los puños, bajo asimétrico ajustable con lengüetas laterales elásticas y cierre frontal con cremallera con tapeta.</p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Tamaño:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                                <div class="product__details__option__color">
                                    <span>Color:</span>
                                    <label class="c-1" for="sp-1">
                                        <input type="radio" id="sp-1">
                                    </label>
                                    <label class="c-2" for="sp-2">
                                        <input type="radio" id="sp-2">
                                    </label>
                                    <label class="c-3" for="sp-3">
                                        <input type="radio" id="sp-3">
                                    </label>
                                    <label class="c-4" for="sp-4">
                                        <input type="radio" id="sp-4">
                                    </label>
                                    <label class="c-9" for="sp-9">
                                        <input type="radio" id="sp-9">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">Añadir al carrito</a>
                            </div>
                            <div class="product__details__btns__option">
                                <a href="#"><i class="fa fa-heart"></i> Añadir a la lista de deseos</a>
                                <a href="#"><i class="fa fa-exchange"></i> Añadir a comparar</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Pago seguro garantizado</span></h5>
                                <img src="assets/img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>SKU:</span> 3812912</li>
                                    <li><span>Categoría:</span> Ropas</li>
                                    <li><span>Etiqueta:</span> Ropas, Piel, Cuerpo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Descripción</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Vistas previas de clientes(5)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Información adicional</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Información de productos</h5>
                                            <p>Una Pocket PC es una computadora de mano que presenta muchas de las mismas capacidades como una PC moderna. Estos pequeños y prácticos dispositivos permiten personas para recuperar y almacenar mensajes de correo electrónico, crear un contacto archivar, coordinar citas, navegar por internet, intercambiar mensajes de texto y más. Todo producto etiquetado como Pocket PC debe ser acompañado de un software específico para operar la unidad y debe incluir una pantalla táctil y un panel táctil.</p>
                                            <p>Como es el caso con cualquier producto de nueva tecnología, el costo de una Pocket PC fue sustancial durante su lanzamiento temprano. Por aproximadamente $700.00, los consumidores podían comprar uno de los mejores Pocket PC en 2003. En estos días, los clientes están descubriendo que los precios se han vuelto mucho más razonable ahora que la novedad se está acabando. por aproximadamente $350.00, ahora se puede comprar una nueva Pocket PC.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material utilizado</h5>
                                            <p>El poliéster se considera de menor calidad debido a que no es de calidad natural. Hecho
                                                 de materiales sintéticos, no naturales como la lana. Los trajes de poliéster se vuelven
                                                 se arrugan fácilmente y son conocidas por no ser transpirables. Trajes de poliéster
                                                 tienden a tener brillo en comparación con los trajes de lana y algodón, esto puede
                                                 hacer que el traje parezca barato. La textura del terciopelo es lujosa y
                                                 respirable. El terciopelo es una excelente opción para la chaqueta de una cena y puede ser
                                             usado todo el año.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Información de productos</h5>
                                            <p>Una Pocket PC es una computadora de mano que presenta muchas de las mismas
                                                 capacidades como una PC moderna. Estos pequeños y prácticos dispositivos permiten
                                                 personas para recuperar y almacenar mensajes de correo electrónico, crear un contacto
                                                 archivar, coordinar citas, navegar por internet, intercambiar mensajes de texto
                                                 y más. Todo producto etiquetado como Pocket PC debe ser
                                                 acompañado de un software específico para operar la unidad y debe incluir
                                             una pantalla táctil y un panel táctil.</p>
                                            <p>Como es el caso con cualquier producto de nueva tecnología, el costo de una Pocket PC
                                                 fue sustancial durante su lanzamiento temprano. Por aproximadamente $700.00,
                                                 los consumidores podían comprar uno de los mejores Pocket PC en 2003.
                                                 En estos días, los clientes están descubriendo que los precios se han vuelto mucho más
                                                 razonable ahora que la novedad se está acabando. por aproximadamente
                                             $350.00, ahora se puede comprar una nueva Pocket PC.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material utilizado</h5>
                                            <p>El poliéster se considera de menor calidad debido a que no es de calidad natural. Hecho
                                                 de materiales sintéticos, no naturales como la lana. Los trajes de poliéster se vuelven
                                                 se arrugan fácilmente y son conocidas por no ser transpirables. Trajes de poliéster
                                                 tienden a tener brillo en comparación con los trajes de lana y algodón, esto puede
                                                 hacer que el traje parezca barato. La textura del terciopelo es lujosa y
                                                 respirable. El terciopelo es una excelente opción para la chaqueta de una cena y puede ser
                                             usado todo el año.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                                             solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                                             ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                                         pharetras loremos.</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Información de productos</h5>
                                            <p>Una Pocket PC es una computadora de mano que presenta muchas de las mismas
                                                 capacidades como una PC moderna. Estos pequeños y prácticos dispositivos permiten
                                                 personas para recuperar y almacenar mensajes de correo electrónico, crear un contacto
                                                 archivar, coordinar citas, navegar por internet, intercambiar mensajes de texto
                                                 y más. Todo producto etiquetado como Pocket PC debe ser
                                                 acompañado de un software específico para operar la unidad y debe incluir
                                             una pantalla táctil y un panel táctil.</p>
                                            <p>Como es el caso con cualquier producto de nueva tecnología, el costo de una Pocket PC
                                                 fue sustancial durante su lanzamiento temprano. Por aproximadamente $700.00,
                                                 los consumidores podían comprar uno de los mejores Pocket PC en 2003.
                                                 En estos días, los clientes están descubriendo que los precios se han vuelto mucho más
                                                 razonable ahora que la novedad se está acabando. por aproximadamente
                                             $350.00, ahora se puede comprar una nueva Pocket PC.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material utilizado</h5>
                                            <p>El poliéster se considera de menor calidad debido a que no es de calidad natural. Hecho
                                                 de materiales sintéticos, no naturales como la lana. Los trajes de poliéster se vuelven
                                                 se arrugan fácilmente y son conocidas por no ser transpirables. Trajes de poliéster
                                                 tienden a tener brillo en comparación con los trajes de lana y algodón, esto puede
                                                 hacer que el traje parezca barato. La textura del terciopelo es lujosa y
                                                 respirable. El terciopelo es una excelente opción para la chaqueta de una cena y puede ser
                                             usado todo el año.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Productos relacionados</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-1.jpg">
                            <span class="label">Nuevos</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Cazadora Biker Piqué</h6>
                            <a href="#" class="add-cart">+ Añadir al carrito</a>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
                            <a href="#" class="add-cart">+ Añadir al carrito</a>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item Rebaja">
                        <div class="product__item__pic set-bg" data-setbg="assets/img/product/product-3.jpg">
                            <span class="label">Rebaja</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="assets/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/compare.png" alt=""> <span>Comparar</span></a></li>
                                <li><a href="#"><img src="assets/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Bolso de pecho con múltiples bolsillos</h6>
                            <a href="#" class="add-cart">+ Añadir al carrito</a>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
                            <a href="#" class="add-cart">+ Añadir al carrito</a>
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