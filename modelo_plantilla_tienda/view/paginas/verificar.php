<?php
  include('head.php');
?>
<body>
    <?php
        include('topbar.php');
    ?>

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Verificar</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php?pagina=inicio">Inicio</a>
                            <a href="index.php?pagina=tienda">Tienda</a>
                            <span>Verificar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code"><span class="icon_tag_alt"></span> ¿Tiene un cupón? <a href="#">haga clic aquí</a> para ingresar tu código</h6>
                            <h6 class="checkout__title">Detalles de facturación</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Primer nombre<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Apellidos<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>País<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Dirección<span>*</span></p>
                                <input type="text" placeholder="Dirección" class="checkout__input__add">
                                <input type="text" placeholder="Apartamento, suite, unidad, etc. (opcional)">
                            </div>
                            <div class="checkout__input">
                                <p>Pueblo/Ciudad<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Estado País<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Código postal / ZIP<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Teléfono<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    ¿Crea una cuenta?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                                <p>Cree una cuenta ingresando la información a continuación. Si eres un cliente recurrente
                                 Por favor inicia sesión en la parte de arriba de la página</p>
                            </div>
                            <div class="checkout__input">
                                <p>Contraseña de la cuenta<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Nota sobre su pedido, por ejemplo, noe especial para la entrega
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Pedidos<span>*</span></p>
                                <input type="text" placeholder="Notas sobre su pedido, p. Notas especiales para la entrega.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Su pedido</h4>
                                <div class="checkout__order__products">Producto <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    <li>01. Caramelo salado de vainilla <span>S/ 300.0</span></li>
                                    <li>02. chocolate alemán <span>S/ 170.0</span></li>
                                    <li>03. dulce otoño <span>S/ 170.0</span></li>
                                    <li>04. Mini docena sin gluten <span>S/ 110.0</span></li>
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Subtotal <span>S/750.99</span></li>
                                    <li>Total <span>S/750.99</span></li>
                                </ul>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        ¿Crea una cuenta?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                 ut labore et dolore magna aliqua.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Cheque Pago
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">REALIZAR PEDIDO</button>
                            </div>
                        </div>
                    </div>
                </form>
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