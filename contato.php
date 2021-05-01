<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto WordPress</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="img/logo.png" alt="Logotipo"></div>
                <!--logo-->
            </header>
            <ul class="menu-desktop">
                <li><a href="home">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
            <!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
            <!--menu-mobile-->
            <div class="clear"></div>
            <br />
            <br />
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, e principalmente, pessoas.</p>
                <a href="https://github.com/diegocb81" target="_blank">Ver demonstração</a>
            </div>
            <!--w50-time-descricao-->
            <div class="w50 time-imagem">
                <img src="img/equipe.png" alt="Equipe">
            </div>
            <!--w50-time-imagem-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--topo-->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
    <!--circle-->

    <footer>
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <!--col-footer-->
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <!--col-footer-->
            <div style="width: 40%;text-align:right;" class="col-footer">
                <img src="img/logo-dummy.png" alt="Logo">
            </div>
            <!--col-footer-->
        </div>
        <!--center-->
    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
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