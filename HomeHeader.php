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
                <header><div class="logo_wrapper log"><a href="index.html" class="logo"><img src="View/images/cr/logo.png" alt=""></a></div></header>
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
                                        <li><a href="index.html">Inicio</a></li>
                                        <li class="sub-menu sub-menu-1"><a href="index-3.html">Toures</a>
                                            <ul>
                                                <li><a href="index-3.html">San Jose</a></li>
                                                <li><a href="index-3.html">Alajuela</a></li>
                                                <li><a href="index-3.html">Cartago</a></li>
                                                <li><a href="index-3.html">Heredia</a></li>
                                                <li><a href="index-3.html">Guanacaste</a></li>
                                                <li><a href="index-3.html">Puntarenas</a></li>
                                                <li><a href="index-3.html">Limon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="AcercaDeTurisTico.php">Acerda de</a></li>

                                        <li><a data-placement="bottom" data-toggle="popover" data-title="Iniciar Sesión" data-container="body" type="button" data-html="true" href="#" id="login">Iniciar Sesión</a></li>
                                        <div id="popover-content" class="hide">
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email </label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                    <small id="emailHelp" class="form-text text-muted"></small>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>

                                        <li><a data-placement="bottom" data-toggle="popover" data-title="Registrarse" 
                                               data-container="body" type="button" data-html="true" 
                                               href="./RegistroUsuarios.php" id="hola">Registrarse</a></li>                                    
                                        <li><a  href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog"  class="tab-pane fade n active">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div  style="background-color:#1da5a6;"   class="modal-header">
                            <button type="submit" class="close" data-dismiss="modal">&times;</button>
                            <h4 style="color:white;" class="modal-title center">Registrarse</h4>
                        </div>
                        <div style="background-color:#2a2a2a;" class="modal-body">
                            <div class = "center">
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
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModalIncio" role="dialog"  class="tab-pane fade">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div  style="background-color:#1da5a6;"   class="modal-header">
                            <button type="submit" class="close" data-dismiss="modal">&times;</button>

                            <h4 style="color:white;" class="modal-title center">Iniciar Session</h4>
                        </div>
                        <div style="background-color:#2a2a2a;" class="modal-body">
                            <div class = "center">
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
                    </div>
                </div>
            </div>
