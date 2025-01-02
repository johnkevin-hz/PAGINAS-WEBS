<?php
  include('head.php');
?>
<body>
    <?php
        include('topbar.php');
    ?>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.396020321714!2d-70.1426716851493!3d-15.463116189257814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9167f3a76df2925d%3A0xc22b5ecd01dac401!2sDise%C3%B1o%20de%20p%C3%A1ginas%20Web%20AREQUIPA%20-%20JULIACA%20-%20Proyectos%20IOT%20-%20Desarrollo%20Web%20AREQUIPA%20-%20JULIACA%20-%20YASTA!5e0!3m2!1ses!2spe!4v1645559804437!5m2!1ses!2spe" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>INFORMACIÓN</span>
                            <h2>Contacta Con Nosotras</h2>
                            <p>Como cabría esperar de una empresa que comenzó como contratista de interiores de alto nivel, pagamos atención estricta.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Juliaca</h4>
                                <p>Jr. Ocoña N°26 Urb. SAN MATEO <br />+51 991 141 414</p>
                            </li>
                            <li>
                                <h4>Arequipa</h4>
                                <p>Jr. Maria Nieves y Bustamante Rivero  <br />+51 991 141 414</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <br>
                    <div class="contact__form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Nombres">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mensaje"></textarea>
                                    <button type="submit" class="site-btn">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
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