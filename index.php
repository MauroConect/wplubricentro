<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Lubricentro</title>
    <?php wp_head();?>
</head>

<body>
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

    <section class="main main--home">
        <section class="main-banner parallax-window" data-parallax="scroll" data-image-src="<?php echo IMAGES ?>/homebanner.jfif">
            <div class="main-banner-inner">
                <div class="container">
                    <div class="main-banner-content text-center">
                        <h2>El mejor sitio para cuidar tu vehiculo</h2>
                        <p>Lo mejor en Mecanica, Lubricantes y Autopartes</p>
                        <a href="#" class="btn btn-primary btn-lg">COMPRAR</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-content page-content--page">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-content">
                            <div class="row">
                                <div class="col post-col">
                                    <article class="post">
                                        <div class="post-content">
                                            <p>Somos una empresa de la localidad de Guamini que nos dedicamos a la venta
                                                de articulos para tu automotor, tenemos la garantia de brindar un
                                                servicio de calidad y la mejor atencion, hacemos servicio de motor,
                                                cambio de filtro, venta de caño de escape, Defensas</p>


                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-content">
                                <div class="row">





                                    <div class="container1">
                                        <div class="box">
                                            <h2 class="name">Lubricantes</h2>
                                            <a href="#" class="buy">Comprar</a>
                                            <div class="circle"></div>
                                            <img src="wp-content/themes/lubricentro/img/Lubricantes.svg" alt="" class="product" draggable="false">
                                        </div>
                                        <div class="box">
                                            <h2 class="name">Mecánica</h2>
                                            <a href="#" class="buy">Contactar</a>
                                            <div class="circle"></div>
                                            <img src="wp-content/themes/lubricentro/img/mecanico.svg" alt="" class="product" draggable="false">
                                        </div>
                                        <div class="box">
                                            <h2 class="name">AutoPartes</h2>
                                            <a href="#" class="buy">Comprar</a>
                                            <div class="circle"></div>
                                            <img src="wp-content/themes/lubricentro/img/autopartes.png" alt="" class="product" draggable="false">
                                        </div>
                                    </div>

                                </div>







                            </div>
                        </div>
                    </div>
                </div>   
            </section>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section-title text-center my-5 pb-3 text-uppercase">¿Que tenemos para Ofrecerte?</h2>
                    </div>
                </div>
            </div>

            <section class="featured-rooms">
                <div class="container">
                    <div class="row room-row no-gutters">
                        <div class="col-md-8">
                            <div class="room-thumbnail">
                                <img src="wp-content/themes/lubricentro/img/Filtros.jfif" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="room-info bg-white">
                                <h3 class="room-info__title">KIT DE FILTROS</h3>
                                <p class="room-info--date">30 Marzo, 2018</p>
                                <div class="room-info--excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <p class="room-info--type">Adecuada para: <a href="#" class="btn-link">Filtros</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row room-row no-gutters">
                        <div class="col-md-4">
                            <div class="room-info bg-white">
                                <h3 class="room-info__title">Servicios</h3>
                                <p class="room-info--date">30 Marzo, 2018</p>
                                <div class="room-info--excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <p class="room-info--type">Adecuada para: <a href="#" class="btn-link">Negocios</a></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="room-thumbnail">
                                <img src="wp-content/themes/lubricentro/img/service.jpg" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="row room-row no-gutters">
                        <div class="col-md-8">
                            <div class="room-thumbnail">
                                <img src="wp-content/themes/lubricentro/img/sheel.jfif" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="room-info bg-white">
                                <h3 class="room-info__title">LUBRICANTES</h3>
                                <p class="room-info--date">30 Marzo, 2018</p>
                                <div class="room-info--excerpt">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <p class="room-info--type">Adecuada para: <a href="#" class="btn-link">Lubricantes</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <footer>
                <div class="footer-inner">
                    <div class="footer-widgets">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Artículos más recientes</h3>
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">Vestibulum auctor</a></li>
                                            <li><a href="#">Suspendisse efficitur orci</a></li>
                                            <li><a href="#">Nulla vehicula felis</a></li>
                                            <li><a href="#">Donec sagittis</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Categorías</h3>
                                        <ul>
                                            <li><a href="#">Suspendisse efficitur orci</a></li>
                                            <li><a href="#">Nulla vehicula felis</a></li>
                                            <li><a href="#">Donec sagittis</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="widget">
                                        <h3 class="widget-title">Conócenos</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, atque.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="wp-content/themes/lubricentro/js/jquery.js"></script>
            <script src="wp-content/themes/lubricentro/js/parallax.min.js"></script>
            <script src="wp-content/themes/lubricentro/js/main.js"></script>
            <script src="wp-content/themes/lubricentro/vanilla-tilt.min.js"></script>
            <script>
                VanillaTilt.init(document.querySelectorAll(".box"), {
                    max: 25,
                    speed: 400
                });
            </script>
           
           
</body>

</html>