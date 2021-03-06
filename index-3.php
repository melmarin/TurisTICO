<!DOCTYPE html>
<html lang="en">
    <head>
        <title>destination</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="icon" href="View/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="View/images/favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,300italic,400italic,700italic,800italic,600italic,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!-- Css Bootstrap-->
        <link rel="stylesheet prefetch" href="View/css/bootstrap.css">
        <link rel="stylesheet prefetch" href="http://www.justinaguilar.com/animations/css/animations.css">
        <!-- font awesome Estrellas-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/FontAwesome.otf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.eot">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.ttf">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/fonts/fontawesome-webfont.woff">
        <link rel="stylesheet" href="View/css/styleSlider.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600&Inconsolata:400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="View/css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="View/css/bootstrap-responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="View/css/style.css" type="text/css" media="screen">


        <script>
            $(document).ready(function () {
                //
            }); //
            $(window).load(function () {
                //
            }); //
        </script>
    </head>

    <body class="subpage">
        <div id="main">
            <div class="top1 clearfix">
                <!-- header-->
                <header>
                    <div class="logo_wrapper log">
                        <a href="index.html" class="logo"><img src="View/images/cr/logo.png" alt="">
                        </a>
                    </div>
                </header>

                <div class="top2 clearfix">
                    <!-- search-form-wrapper clearfi-->
                    <div class="search-form-wrapper clearfix">
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" value='Search' onBlur="if (this.value == '')
                                        this.value = 'Search'" onFocus="if (this.value == 'Search')
                                                    this.value = ''">
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                    </div>

                    <!-- menu_wrapper clearfix-->
                    <div class="menu_wrapper clearfix">
                        <!-- navbar-->

                        <div class="navbar navbar_">
                            <div class="navbar-inner navbar-inner_">
                                <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <ul class="nav sf-menu clearfix">
                                        <li class="active"><a href="?inicio">Inicio</a></li>
                                        <li class="sub-menu sub-menu-1"><a href="?busqueda">Toures</a>
                                        </li>
                                        <li><a href="AcercaDeTurisTico.php">Acerda de</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END top2-->
            </div>
            <!-- END top1-->

            <!-- slider_wrapper-->

            <div id="slider_wrapper">
                <div class="img"><img src="View/images/cr/baner.jpg" alt=""></div>

                <div class="slider_bot">
                    <div class="page_title">Destinos</div>
                    <div class="breadcrumbs1">
                        <div class="breadcrumbs1_inner"><a href="index.html">Inicio</a>&nbsp;&nbsp;&nbsp;>&nbsp;&nbsp;&nbsp;Destinos</div>
                    </div>
                </div>
            </div>
            <!--END slider_wrapper-->

            <!--content-->

            <div id="content">
                <div class="container">
                    <div class="row">
                        <form action="?busqueda=calcular" method="POST">
                            <div class="span4">
                                <h2>Filtros</h2>
                                <div class="filter">
                                    <div class="stars">
                                        </select>
                                        <select name="provincia" class="nice-select wide">
                                            <option data-display="Provincia">Provincia</option>
                                            <option value="San José">San Jose</option>
                                            <option value="Heredia">Heredia</option>
                                            <option value="Cartago">Cartago</option>
                                            <option value="Guanacaste">Guanacaste</option>
                                            <option value="Limón">Limón</option>
                                            <option value="Alajuela">Alajuela</option>
                                            <option value="Puntarenas">Puntarenas</option>
                                        </select>
                                        <br><br><br><br>
                                        <center><label for="Precio">Precio</label></center>
                                        <input type="range" id="Precio" name="precio" value="0" step="25" min="0" max="2500">
                                        <div class="">
                                            <small class="min pull-left">Min</small>
                                            <small class="max pull-right">Max</small>
                                        </div>
                                        <br><br>
                                        <center><label for="Distancia">Distancia</label></center>
                                        <input type="range" id="Distancia" value="0" step="25" min="0" max="1000">
                                        <div class="">
                                            <small class="min pull-left">Min</small>
                                            <small class="max pull-right">Max</small>
                                        </div>
                                        <center><label style="margin-top:5em;">Top</label></center>

                                        <a href="https://www.w3schools.com" class="turist">
                                            <img class="rounded" alt="W3Schools" src="View/assets/vo.svg" width="100" height="100">
                                        </a>
                                        <a href="https://www.w3schools.com" class="turist">
                                            <img class="rounded" alt="W3Schools" src="View/assets/fo.svg" width="100" height="100">
                                        </a>
                                        <a href="https://www.w3schools.com" class="turist">
                                            <img class="rounded" alt="W3Schools" src="View/assets/ri.svg" width="100" height="100">
                                        </a>
                                        <a href="https://www.w3schools.com" class="turist">

                                            <a href="#" class="turist">
                                                <img class="rounded" alt="W3Schools" src="View/assets/vo.svg" width="100" height="100">
                                            </a>
                                            <a href="#" class="turist">
                                                <img class="rounded" alt="W3Schools" src="View/assets/fo.svg" width="100" height="100">
                                            </a>
                                            <a href="#" class="turist">
                                                <img class="rounded" alt="W3Schools" src="View/assets/ri.svg" width="100" height="100">
                                            </a>
                                            <a href="#" class="turist">

                                                <img class="rounded" alt="W3Schools" src="View/assets/be.svg" width="100" height="100">
                                            </a>

                                            <div class="aling-star">
                                                <form action="#">

                                                    <center><label style="margin-top:5em;">Clasificación</label></center>
                                                    <input value="5" class="star star-5" id="star-5-2" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5-2"></label>
                                                    <input  value="4" class="star star-4" id="star-4-2" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4-2"></label>
                                                    <input  value="3" class="star star-3" id="star-3-2" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3-2"></label>
                                                    <input  value="2" class="star star-2" id="star-2-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2-2"></label>
                                                    <input  value="1" class="star star-1" id="star-1-2" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1-2"></label>

                                                </form>
                                            </div>
                                    </div>

                                    <button type="submit" class="myButton">Buscar</button>
                                </div>
                                <!--<h2><?php
                                if (isset($resultados)) {
                                    echo $resultados;
                                }
                                ?></h2>-->
                            </div>
                        </form>
                        <div class="span8">

                            <h1>Tus Destinos</h1>
                            <div id="content_mapa_div">
                                <div id="mapa_div">

                                </div>
                            </div>
                            <p>TU POSICION ACTUAL</p>

                            <div class="div_items">
                                <?php
                                if (isset($resultados)) {
                                    foreach ($resultados as $resultado) {
                                        ?> 
                                        <div class="thumb3">
                                            <div class="thumbnail clearfix">
                                                <figure class="img-polaroid"><img src="View/images/cr/item1.jpg" alt=""></figure>
                                                <div class="caption">
                                                    <span class="sitio-name"><?php echo $resultado['nombre']; ?></span>
                                                    <span class="sitio-item__stars">
                                                        <?php
                                                        $puntuacion = intval($resultado['puntuacion_usuario']);
                                                        for ($i = 1; $i <= $puntuacion; $i++) {

                                                            $puntuacion = intval($resultado['puntuacion_usuario']);
                                                            for ($i = 1; $i <= $puntuacion; $i++) {
                                                                ?> 
                                                                <span>
                                                                    <span class="icon-ic hotel-item__star">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="12" height="12" viewBox="0 0 12 12">
                                                                        <path class="svg-color--primary" fill="#F6AB3F" d="M11.988 5.21c-.052-.275-.27-.488-.545-.534l-3.604-.6L6.63.455C6.542.184 6.287 0 6 0s-.542.184-.632.456L4.16 4.076l-3.603.6c-.275.046-.493.26-.545.533-.052.273.072.55.312.695L3.2 7.63l-1.165 3.493c-.093.28.01.59.25.758.115.08.25.12.382.12.148 0 .295-.05.416-.146L6 9.52l2.917 2.333c.12.098.27.147.416.147.133 0 .267-.04.38-.12.244-.17.346-.478.252-.758L8.8 7.63l2.876-1.725c.24-.144.364-.422.312-.696z">
                                                                        </path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </span>
                                                    <p id="p1">
                                                        <span class="icon-ic"><svg xmlns="http://www.w3.org/2000/svg" focusable="false" tabindex="-1" width="24" height="24" baseProfile="tiny" viewBox="3 3 25 25"><path class="svg-color--primary" fill="#37454D" d="M18 8.2C17.6 5.3 15 3 12 3S6.4 5.3 6 8.2V9c0 .7.1 1.4.4 2.1l.6 1.2 4.1 8.2c.2.3.5.5.9.5s.7-.2.9-.5l4.1-8.2.6-1.2c.3-.7.4-1.4.4-2.1v-.8zM12 13c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path></svg></span>
                                                        <span class="hotel-item__value"><span class="item__distance"><?php echo $resultado['direccion']; ?></span></span>
                                                    </p>
                                                    <p>
                                                        <span class="hotel-item__price hotel-item__price--best">$<?php echo $resultado['costo_paquete']; ?> por persona</span>
                                                        <button href="#" class="myButton" data-toggle="modal" data-target="#myModal">ver más</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="content2">
                <div class="container">
                    <div class="row">
                        <div class="span12">

                            <h2>Recomendados para ti</h2>

                            <div class="row">
                                <div class="span4">
                                    <div class="thumb1">
                                        <div class="thumbnail clearfix">
                                            <figure class="img-polaroid"><img src="View/images/cr/item2.jpg" alt=""></figure>
                                            <div class="caption">
                                                <p>
                                                    <strong>Cavernas de Venado</strong>
                                                </p>
                                                <p style="text-align: justify">
                                                    Las Cavernas de Venado se encuentran a 3km al este del pueblo del mismo nombre y aproximadamente a unos 45 minutos de La Fortuna de San Carlos.
                                                    <a href="#" class="button1">Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="thumb1">
                                        <div class="thumbnail clearfix">
                                            <figure class="img-polaroid"><img src="View/images/cr/item3.jpg" alt=""></figure>
                                            <div class="caption">
                                                <p>
                                                    <strong>Bosque Tropical Seco</strong>
                                                </p>
                                                <p style="text-align: justify">
                                                    Algunas especies vegetales comunes de esta zona de vida son : Anacardium excelsum (espavel), Enterelobium cyclocarpum (guanacaste), Samanea saman (cenízaro), Tabebia rosea (roble sabana), Hymenaea courbaril (guapinol), Manikara sapota (chicle), Cochlospermum vitifolium (poro poro), Calycophyllum candidissimum (madroño) y Bombacopsis quinatum (pochote). En estas formaciones son muy frecuentes las leguminosa y las bignoniácias.			</p>
                                                <a href="#" class="button1">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="thumb1">
                                        <div class="thumbnail clearfix">                                            
                                            <br><iframe width="500" height="260" 
                                                        src="https://www.youtube.com/embed/5-65wWY4Io4?autohide=1&showinfo=1"  allowfullscreen ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot1">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="bot1_title">Siguenos</div>
                        <div class="social_wrapper">
                            <ul class="social clearfix">
                                <li><a href="#"><img src="View/images/social_ic1.png"></a></li>
                                <li><a href="#"><img src="View/images/social_ic2.png"></a></li>
                                <li><a href="#"><img src="View/images/social_ic3.png"></a></li>
                                <li><a href="#"><img src="View/images/social_ic4.png"></a></li>
                                <li><a href="#"><img src="View/images/social_ic5.png"></a></li>
                                <li><a href="#"><img src="View/images/social_ic6.png"></a></li>
                            </ul>
                        </div>
                        <div class="bot1_title"><a href="./MapadelSitio.php">Mapa del Sitio</a></div>  
                    </div>
                    <div class="span3">
                        <div class="bot1_title">Destinos</div>
                        <ul class="ul0">
                            <li><a href="#">San José</a></li>
                            <li><a href="#">ALajuela</a></li>
                            <li><a href="#">Cartago</a></li>
                            <li><a href="#">Heredia</a></li>
                            <li><a href="#">Guanacaste</a></li>
                            <li><a href="#">Puntarenas</a></li>
                            <li><a href="#">Limon</a></li>

                        </ul>
                    </div>

                    <div class="span3">
                        <div class="bot1_title">Contactanos</div>
                        <div class="bot1_txt1">
                            Llama para más informacón:<br>
                            <span>(506)+2525-2525</span><br>

                            Paraiso,Cartago,<br>
                            Costa Rica.<br>
                            E-mail: <a href="#">turisTico@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="View/js/bootstrap.js"></script>
        <script type="text/javascript" src="View/js/mapa.js"></script>

        <script src="View/js/jquery.js"></script>
        <script src="View/js/bootstrap.js"></script>
        <script  src="View/js/slider.js"></script>
        <script src="View/js/jquery.nice-select.min.js"></script>
        <script src="View/js/fastclick.js"></script>
        <script src="View/js/prism.js"></script>

        <script type="text/javascript" src="View/js/jquery.js"></script>
        <script type="text/javascript" src="View/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="View/js/superfish.js"></script>
        <script type="text/javascript" src="View/js/jquery.ui.totop.js"></script>
        <script>
                                $(document).ready(function () {
                                    $('select:not(.ignore)').niceSelect();
                                    FastClick.attach(document.body);
                                });
                                $(document).ready(function () {
                                    $('select:not(.ignore)').niceSelect();
                                    FastClick.attach(document.body);
                                });
        </script>

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-64633646-1', ' auto');
            ga('send', 'pageview');
        </script>
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title center">Tapantí</h4>
                </div>
                <div class="modal-body">
                    <div class = "center">
                        <img src="View/images/cr/item1.jpg" class="img-rounded" width="200" height="120"/>
                        <p>
                            <label class = "title-text" >Distancia desde tu punto de partida</label>
                        </p>
                        <p>5 km</p>
                        <p class = "title-text">
                            <label class = "title-text" >Tiempo estimado de llegada</label>
                        </p>
                        <p>20 minutos</p>
                        <p>
                            <label class = "title-text" >Reseña</label>
                        </p>
                        <p class = "text-modal">
                            El Parque nacional Tapantí es una reserva natural que se encuentra ubicada en el Área de Conservación La Amistad - Pacífico, en conjunto con el macizo de la Muerte, al noreste de la Cordillera de Talamanca, en el centro-sur de Costa Rica.
                        </p>
                        <p>
                            <label class = "title-text" >Puntuación</label>
                        </p>
                        <div class="star-rating">
                            <a href="#">&#9733;</a>
                            <a href="#">&#9733;</a>
                            <a href="#">&#9733;</a>
                            <a href="#">&#9733;</a>
                            <a href="#">&#9733;</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>