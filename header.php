<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        wp_head();
    ?>
    <title>Projeto WordPress</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="icon" href="img/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/projeto_wordpress/style.css">
</head>
<body>

    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="<?php echo get_theme_root_uri(); ?>/projeto_wordpress/img/logo_dast.png" alt="Logotipo"></div><!--logo-->
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