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
                <div class="logo"><img src="img/logo.png" alt="Logotipo"></div><!--logo-->
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul><!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div><!--menu-mobile-->
            <div class="clear"></div>
            <br/>
            <br/>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, e principalmente, pessoas.</p>
                <a href="https://github.com/diegocb81" target="_blank">Ver demonstração</a>
            </div><!--w50-time-descricao-->
            <div class="w50 time-imagem">
                <img src="img/equipe.png" alt="Equipe">
            </div><!--w50-time-imagem-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
    <!--circle-->
    <section class="clientes-slider">
        <div class="center">
        <div style="max-width:700px;margin:0 auto;overflow:hidden;" class="slider-container">
            <img src="img/amazon.png" alt="Amazon">
            <img src="img/costco.png" alt="CostCo">
            <img src="img/dominos.png" alt="Dominos">
            <img src="img/uber.png" alt="Uber">
            <img src="img/walmart.png" alt="walmart">
            <img src="img/amazon.png" alt="Amazon">
            <img src="img/costco.png" alt="CostCo">
            <img src="img/dominos.png" alt="Dominos">
            <img src="img/uber.png" alt="Uber">
            <img src="img/walmart.png" alt="walmart">
        </div><!--slider-container-->
        </div><!--center-->
    </section><!--clientes-slider-->

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="img/ilustracao-01.png" alt="Ícone">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <img src="img/ilustracao-02.png" alt="Ícone">
                    <h3>Sites e Intranets</h3>
                    <p>Um diálogo só acontece quando ambas as partes falam e escutam, garanta que seu público te entenda.</p>
                </div><!--box-single-diferenciais-->
                <div class="box-single-diferenciais">
                    <img src="img/ilustracao-03.png" alt="Ícone">
                    <h3>Comunicação one-to-one</h3>
                    <p>O digital veio para ficar, sem dúvidas, mas uma comunicação integrada de verdade exige clareza nas decisões.</p>
                </div><!--box-single-diferenciais-->
            </div><!--icons-diferenciais-->
        </div><!--center-->
    </section><!--diferenciais-->

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Um time experiente,<br/>comunicador e coeso.</h2>
                <p>A DAST acredita que marcas fortes são construídas à partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                <br/><br/>
                Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
            </div><!--w50-->
            <div class="w50 img-time">
                <img src="img/time.png" alt="Time">
            </div><!--w50-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--sobre-time-->


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
    </script>
    <script>
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>