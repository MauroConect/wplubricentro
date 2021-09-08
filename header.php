<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset= <?php bloginfo ('charset'); ?> >
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('-',true,'right'); ?> <?php bloginfo('name'); ?> </title>
    <?php wp_head();?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-inner">
            <div class="top-bar">
                <div class="container">
                    <ul class="social-top-bar">
                        <li>
                            <a href="#" class="text-gray">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-gray">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="logo-container">
                <a href="#">
                    <h1 class="d-none">LubriCentro</h1>
                    <img src="<?php echo IMAGES ?>/lubri.png" alt="Lubricentro">
                </a>
            </div>
            <nav class="main-menu-container">
                <div class="container">
                    <ul id="mainMenu" class="main-menu">
                        <li>
                            <a href="#">INICIO</a>
                        </li>
                        <li>
                            <a href="#">SOBRE NOSOTROS</a>
                        </li>
                        <li>
                            <a href="#">TIENDA</a>
                        </li>
                        <li>
                            <a href="#">CARRITO</a>
                        </li>
                        <li>
                            <a href="#">MI CUENTA</a>
                        </li>
                        <li>
                            <a href="#">SERVICIOS</a>
                        </li>

                        <li>
                            <a href="#">CONTACTAR</a>
                        </li>
                    </ul>
                    <a href="#" class="mobile-menu-button" id="mobileMenuButton">
                        MENÚ PRINCIPAL <i class="fas fa-bars"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>
