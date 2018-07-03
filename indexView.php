<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TurisTico</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your description">
        <meta name="keywords" content="Your keywords">
        <meta name="author" content="Your name">
        <link rel="icon" href="View/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="View/images/favicon.ico" type="image/x-icon" />

        <link rel="stylesheet" href="View/css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="View/css/bootstrap-responsive.css" type="text/css" media="screen">
        <link rel="stylesheet" href="View/css/camera.css" type="text/css" media="screen">
        <link rel="stylesheet" href="View/css/style.css" type="text/css" media="screen">

        <script type="text/javascript" src="View/js/jquery.js"></script>
        <script type="text/javascript" src="View/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="View/js/superfish.js"></script>

        <script type="text/javascript" src="View/js/jquery.ui.totop.js"></script>

        <script type="text/javascript" src="View/js/camera.js"></script>
        <script type="text/javascript" src="View/js/jquery.mobile.customized.min.js"></script>

        <script type="text/javascript" src="View/js/jquery.caroufredsel.js"></script>
        <script type="text/javascript" src="View/js/jquery.touchSwipe.min.js"></script>
        <script>
            $(document).ready(function () {
                // camera
                $('#camera_wrap').camera({
                    //thumbnails: true
                    autoAdvance: true,
                    mobileAutoAdvance: true,
                    //fx					: 'simpleFade',
                    height: '51%',
                    hover: false,
                    loader: 'none',
                    navigation: true,
                    navigationHover: false,
                    mobileNavHover: false,
                    playPause: false,
                    pauseOnClick: false,
                    pagination: true,
                    time: 7000,
                    transPeriod: 1000,
                    minHeight: '200px'
                });

                //	carouFredSel
                $('#slider3 .carousel.main ul').carouFredSel({
                    auto: {
                        timeoutDuration: 80000
                    },
                    responsive: true,
                    prev: '.prev3',
                    next: '.next3',
                    width: '100%',
                    scroll: {
                        items: 1,
                        duration: 1000,
                        easing: "easeOutExpo"
                    },
                    items: {
                        width: '350',
                        height: 'variable', //	optionally resize item-height
                        visible: {
                            min: 1,
                            max: 4
                        }
                    },
                    mousewheel: false,
                    swipe: {
                        onMouse: true,
                        onTouch: true
                    }
                });
                $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);
                function updateSizes_vat() {
                    $('#slider3 .carousel.main ul').trigger("updateSizes");
                }
                updateSizes_vat();

            }); //
            $(window).load(function () {
                //

            }); //
        </script>
        <!--[if lt IE 8]>
                        <div style='text-align:center'><a href="https://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
                <![endif]-->

        <!--[if lt IE 9]>
          <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
    </head>

    <body class="main">
        <div id="main">
            <div class="top1 clearfix">
                <header><div class="logo_wrapper log"><a href="index.html" class="logo"><img src="./View/images/cr/logo.png" alt=""></a></div></header>
                <div class="top2 clearfix">
                    <div class="search-form-wrapper clearfix">
                        <form id="search-form" action="search.php" method="GET" accept-charset="utf-8" class="navbar-form" >
                            <input type="text" name="s" value='Search' onBlur="if (this.value == '')
                                        this.value = 'Search'" onFocus="if (this.value == 'Search')
                                                    this.value = ''">
                            <a href="#" onClick="document.getElementById('search-form').submit()"></a>
                        </form>
                    </div>
                    <div class="menu_wrapper clearfix">
                        <div class="navbar navbar_">
                            <div class="navbar-inner navbar-inner_">
                                <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse nav-collapse_ collapse">
                                    <!-- Include the above in your HEAD tag -->
                                    <ul class="nav sf-menu clearfix">
                                        <li><a href="?inicio">Inicio</a></li>
                                        <li class="sub-menu sub-menu-1"><a href="?busqueda">Toures</a>
                                             <li class="sub-menu sub-menu-1"><a href="#">Catalogó Empresas</a>
                                            <ul>
                                                <li><a href="?agregaEmpresa">Agregar Empresa</a></li>
                                                <li><a href="?actualizaEmpresa">Actualizar Empresa</a></li>
                                                <li><a href="?eliminaEmpresa.php">Eliminar Empresa</a></li>
                                            </ul>
                                        </li>
                                        <li><a  href="#"></a></li>
                                        <li><a href="./Login.php" id="hola">Iniciar Sesión</a></li>                                    
                                        <li><a  href="#"></a></li>
                                        <li><a href="./RegistroUsuarios.php" id="hola">Registrarse</a></li>                                    
                                        <li><a  href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog"  class="tab-pane fade n active">
                <!-- Modal content-->
                <div class="modal-content">
                    <div  style="background-color:#1da5a6;"   class="modal-header">
                        <button type="submit" class="close" data-dismiss="modal">&times;</button>
                        <h4 style="color:white;" class="modal-title center">Registrarse</h4>
                    </div>

                    <form role="Form" method="POST" action="" accept-charset="UTF-8">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password2" placeholder="Verifica Contraseña..." class="form-control">
                        </div>
                        <div class="form-group">
                        </div>
                    </form>
                    <div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>

            </div>
            <div class="modal fade" id="myModalIncio" role="dialog"  class="tab-pane fade">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div  style="background-color:#1da5a6;"   class="modal-header">
                        <button type="submit" class="close" data-dismiss="modal">&times;</button>

                        <h4 style="color:white;" class="modal-title center">Iniciar Sessión</h4>
                    </div>
                    <form role="Form" method="POST" action="" accept-charset="UTF-8">
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Usuario" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                        </div>

                        <div class="form-group">
                        </div>
                    </form>
                    <div >
                        <button type="submit" class="btn btn-primary">Enviar</button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
            <div id="slider_wrapper">
                <div id="slider" class="clearfix">
                    <div id="camera_wrap">
                        <div data-src="View/images/cr/slider2.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="txt1">Su guía turisTICA</div>
                                <div class="txt2">
                                    vacaciones en Costa Rica
                                </div>
                            </div>
                        </div>
                        <div data-src="View/images/cr/slider1.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="txt1">Su guía turisTICA</div>
                                <div class="txt2">tours para toda la familia</div>
                            </div>
                        </div>

                        <div data-src="View/images/cr/slider3.jpg">
                            <div class="camera_caption fadeIn">
                                <div class="txt1">Su guía turisTICA</div>
                                <div class="txt2">fantasticos sitios</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slogan1">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="slogan1_inner">
                                <div class="txt1">Comience su viaje con nosotros</div>
                                <div class="txt2">Destinos populares y gran servicio al cliente</div>
                                <div class="txt3">Aseguramos presentarte los mejores sitios turisticos y sus mas grandes atractivos de acuerdo a tu perfil de turista</div>
                                <div class="txt4 clearfix"><a href="#" class="find1">Buscar Tour</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider3_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="span12">
                                <div id="slider3">
                                    <div class="slider3-title">Provincias</div>
                                    <a class="prev3" href="#"></a>
                                    <a class="next3" href="#"></a>
                                    <div class="carousel-box row">
                                        <div class="inner span12">
                                            <div class="carousel main">
                                                <ul>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/sj.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        San José
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/al.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Alajuela
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/c.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Cartago
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/he.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Heredia
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/gu.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Guanacaste
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/li.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Limón
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="thumb-carousel banner1">
                                                            <div class="thumbnail clearfix">
                                                                <a href="#">
                                                                    <figure>
                                                                        <img src="View/images/cr/pun.jpg" alt="">
                                                                        <em></em>
                                                                    </figure>
                                                                    <div class="caption">
                                                                        Puntarenas
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                            <div class="span3">
                                <div class="bot1_title">Creditos</div>
                                <div class="bot1_txt1">
                                    <span style="font-size: 14px;">
                                        Elaboración del sítio web:</span><br>
                                    Danny Zúñiga Barrantes,<br>
                                    Fabián Quirós Masís,<br>
                                    Lucrecia Zúñiga Sáenz,<br>
                                    Melvin Marín Navarro. <br>

                                    <span style="font-size: 14px;">
                                        Desarrollado para:</span><br>
                                    Universidad de Costa Rica<br>
                                    Sede del Atlántico<br>
                                    Recinto de Paraíso<br>    
                                    Sistemas Expertos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="View/js/bootstrap.js"></script>
    </body>
</html>

<script type="text/javascript">
                                $(function () {
                                    $('.js-tooltip-trigger').each(function (ind, ele) {
                                        var $ele = $(ele),
                                                $ttSpan = $ele.next('.js-tooltip'),
                                                ttHtml = $ttSpan.html(),
                                                rndID = 'ttid' + String(Math.random()).substr(2);

                                        $ttSpan.attr('id', rndID).removeAttr('style').html('');

                                        $ele.popover({
                                            html: true,
                                            trigger: 'focus',
                                            placement: 'bottom',
                                            container: '#' + rndID,
                                            content: ttHtml
                                        });
                                    });
                                });
                                $("[id=login]").popover({
                                    html: true,
                                    content: function () {
                                        return $('#popover-content').html();
                                    }
                                });

                                $("[id=hola]").popover({
                                    html: true,
                                    content: function () {
                                        return $('#hola-mundo').html();
                                    }
                                });
                                function login() {

                                    correo = document.getElementById('exampleInputEmail1').value;
                                    pass = document.getElementById('exampleInputPassword1').value;

                                    var parametros =
                                            {
                                                "correo": correo,
                                                "pass": pass
                                            };
                                    var existeLogin;
                                    $.ajax({
                                        url: './Controller/LoginController.php',
                                        type: 'POST',
                                        dataType: 'text',
                                        data: parametros
                                    }).done(function (resp) {
                                        existeLogin = resp;
                                        alert(existeLogin);
                                    }).fail(function (error, textStatus, errorThrown) {
                                        console.log(error.status); //Check console for output
                                        //$("#loadIMg").hide();//#datos es un div
                                    });

                                    window.location = "indexLogin.php";
                                }
</script>
