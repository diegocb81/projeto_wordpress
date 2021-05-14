    <footer>
    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br>Entre em contato por e-mail ou telefone</p>
            <a href="/contato">Entrar em contato</a>
        </div><!--center-->
    </section><!--metodologia-->
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div><!--col-footer-->
            <div style="width: 40%;text-align:right;" class="col-footer">
                <img src="<?php echo get_theme_root_uri(); ?>/projeto_wordpress/img/logo_dast.png" alt="Logo">
            </div><!--col-footer-->
        </div><!--center-->
    </footer>


    <script src="<?php echo get_theme_root_uri(); ?>/projeto_wordpress/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/projeto_wordpress/js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            centerMode: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:
            [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });

         $('section.depoimentos .depoimentos-box').slick({
                dots: true,
                arrows: false,
                infinite: true,
                centerMode: false,
                speed: 1000,
                slidesToShow: 1,
            });
    </script>
    <script>
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>