<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto WordPress</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="img/icone.ico" type="image/x-icon">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul><!--menu-desktop-->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div><!--menu-mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->

    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante, <br/>primeira conversa</h2>
                <p><b>Telefone:</b> (48) 99947-7316</p>
                <p><b>E-mail:</b> diegocb81@gmail.com</p>
                <p><b>Endereço:</b> Travessa Montevidéu, 98 - Cep: 88058-083 - Florianópolis/SC.</p>
            <div class="mapa-container">
                <div id="mapa"></div><!--mapa-->
            </div><!--mapa-container-->
            </div><!--w50-contato-info-->
            <div class="w50 contato-form">
                <form>
                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone" type="text">
                    <select>
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar!">
                </form>
            </div><!--w50-contato-form-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--contato-->

    <footer style="padding: 50px 0;">
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
                <img src="img/logo-dummy.png" alt="Logo">
            </div><!--col-footer-->
        </div><!--center-->
    </footer>


<script src="js/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCZFPyu5iVf1NgMAiCBSfgYWIOtlv8korY"></script>
<script src="js/map.js"></script>    
<script>
    $('.menu-mobile i').click(function(){
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>
</html>