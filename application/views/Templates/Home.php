<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Find Job R.D. </title>
        <meta name="description" content="website developed by Time Warriors">
        <meta name="author" content="Fausto, Franklin, Milka">
        <meta name="keyword" content="php, html, css, bootstrap, javascript, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
        <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8 col-xs-8">
                        <div class="header-half header-call">
                            <p>
                                <span><i class="fa fa-phone"></i>+1-809-555-5555</span>
                                <span><i class="icon-mail"></i>findjobRD@gmail.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-3  col-xs-offset-1">
                        <div class="header-half header-social">
                            <ul class="list-inline">
                                <li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="assets/img/findjobRDLogo.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
                  <button class="navbar-btn nav-button wow bounceInRight login" data-wow-delay="0.8s">Iniciar Sesión</button>
                  <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.6s">Registrarse</button>
              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0s"><a class="active" href="#">Inicio</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="#">Empleos</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a href="#">Currículums</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#">Servicios</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="#">Contacto</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                  <div class="item"><img src="assets/img/Slider3.jpg" alt="Mirror Edge"></div>
                  <div class="item"><img src="assets/img/Slider2.jpg" alt="The Last of us"></div>
                  <div class="item"><img src="assets/img/Slider1.jpg" alt="GTA V"></div>

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Encuentra ya tu proximo Empleo</h2>
                        <p><font size=4><strong>Con un solo Click tendras acceso a centenares de empleos en toda la República Dominicana</strong></font></p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="" class=" form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Palabra Clave">
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option>Elige tu Ciudad</option>
                                        <option selected>Santo Domingo D.N.</option>
                                        <option>Samana</option>
                                        <option>Santiago</option>
                                        <option>Puerto Plata</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option>Empleos Por Categoría</option>
                                        <option selected>Programación</option>
                                        <option>Contabilidad</option>
                                        <option>Medicina</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn" value="Buscar">


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-area">
            <div class="container">
                <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
                    <h2>¿Cómo trabajamos?</h2>
                    <p>Find Job R.D.es un website diseñado para hacer más eficiente la busqueda de empleo, sirviendo como foco de contacto entre la empresa y el solicitante, de una manera facil y segura.</p>
                </div>
                <div class="row how-it-work text-center">
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                            <img src="assets/img/how-work3.png" alt="">
                            <h3>Encuentra el empleo adecuado</h3>
                            <p>Somos tu mejor aliado a la hora de buscar empleo,encuentra la oferta que más se adecue a tú perfil.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                            <img src="assets/img/how-work2.png" alt="">
                            <h3>Encuentra al Mejor Postulante</h3>
                            <p>¿Necesitas reforzar tú personal? Encuentra entre centenares de postulantes al que más adecuado.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                            <img src="assets/img/how-work1.png" alt="">
                            <h3>¿Necesitas Ayuda?</h3>
                            <p>Si tienes alguna duda puedes revisar en nuestra lista de preguntas frecuentes, quizas te sean de utilidad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
                    <h5>Empleos Recientes</h5>
                    <h2><span>54716</span> Ofertas Disponibles</h2>
                </div>
                <div class="row jobs">
                    <div class="col-md-9">
                        <div class="job-posts table-responsive">
                            <table class="table">
                                <tr class="odd wow fadeInUp" data-wow-delay="1s">
                                    <td class="tbl-logo"><img src="assets/img/job-logo1.png" alt=""></td>
                                    <td class="tbl-title"><h4>Web Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>dribbble community</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="even wow fadeInUp" data-wow-delay="1.1s">
                                    <td class="tbl-logo"><img src="assets/img/job-logo2.png" alt=""></td>
                                    <td class="tbl-title"><h4>Front End Developer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Jolil corporation</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="odd wow fadeInUp" data-wow-delay="1.2s">
                                    <td class="tbl-logo"><img src="assets/img/job-logo3.png" alt=""></td>
                                    <td class="tbl-title"><h4>HR Manager <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Fanta bevarage</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="even wow fadeInUp" data-wow-delay="1.3s">
                                    <td class="tbl-logo"><img src="assets/img/job-logo4.png" alt=""></td>
                                    <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Google</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="odd wow fadeInUp" data-wow-delay="1.4s">
                                    <td class="tbl-logo"><img src="assets/img/job-logo5.png" alt=""></td>
                                    <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Microsoft</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="even hide-jobs">
                                    <td class="tbl-logo"><img src="assets/img/job-logo4.png" alt=""></td>
                                    <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Google</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="odd hide-jobs">
                                    <td class="tbl-logo"><img src="assets/img/job-logo5.png" alt=""></td>
                                    <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Microsoft</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="even hide-jobs">
                                    <td class="tbl-logo"><img src="assets/img/job-logo4.png" alt=""></td>
                                    <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Google</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                                <tr class="odd hide-jobs">
                                    <td class="tbl-logo"><img src="assets/img/job-logo5.png" alt=""></td>
                                    <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                                    <td><p>Microsoft</p></td>
                                    <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                                    <td><p>&dollar; 14000</p></td>
                                    <td class="tbl-apply"><a href="#">Apply now</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="more-jobs">
                            <a href=""> <i class="fa fa-refresh"></i>View more jobs</a>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="job-add wow fadeInRight" data-wow-delay="1.5s">
                            <h2>Seeking a job?</h2>
                            <a href="#">Create a Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container">
                <div class="row page-title text-center  wow bounce"  data-wow-delay=".7s">
                    <h5>TESTIMONIOS</h5>
                    <h2>Lo que opinan nuestros clientes</h2>
                </div>
                <div class="row testimonial">
                    <div class="col-md-12">
                        <div id="testimonial-slider">
                            <div class="item">
                                <div class="client-text">
                                    <p>Desde que nuestra empresa ha comenzado a utilizar los servicios de FindJobR.D. hemos ahorrado miles de
                                    dolares en procesos de selección de personal, estamos realmente complacidos con el servicio.</p>
                                    <h4><strong>Fausto Jesús De La Cruz Caminero, </strong><i>CEO D.C. FINANCIAL SOLUTIONS</i></h4>
                                </div>
                                <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                                    <img src="assets/img/Fausto.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">
                                    <p>Find Job R.D. se ha convertido en nuestra principal fuente de reclutamiento, hemos ahorrado
                                    tiempo y dinero, recomendamos con toda confianza los servicios de este portal. </p>
                                    <h4><strong>Franklin Sandoval, </strong><i>CEO FRASAGA TECH</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="assets/img/franklin.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">
                                    <p>Estoy totalmente maravillada con este sitio, puede encontrar empleo al instante, una plataforma
                                    fácil de usar, segura y con excelente oferta laboral.</p>
                                    <h4><strong>Milka Goris, </strong><i>Software Developer</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="assets/img/Milka.png" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-text">
                                    <p>Excelente plataforma, realmente cumplio todas mis expectativas, estoy plenamente
                                    complacido con este sitio.</p>
                                    <h4><strong>Amadis Suarez, </strong><i>Computer Engineer</i></h4>
                                </div>
                                <div class="client-face">
                                    <img src="assets/img/Amadis.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-area">
            <div class="container">
                <div class="row footer">
                    <div class="col-md-4">
                        <div class="single-footer">
                            <h4>Información</h4>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="">Nosotros</a></li>
                                    <li><a href="" class="active">Servicios</a></li>
                                    <li><a href="">Contactanos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row footer-copy">
                    <p><span>&copy; Time Warriors, All rights reserved</span> | Developed by  <span><a href="https://www.facebook.com/yohanselfaustojesus.delacruzcaminero">FAUSTO</a></span>  <span> <a href="https://www.facebook.com/milkac.goris">MILKA</a></span> <span> <a href="https://www.facebook.com/franklin0724">FRANKLIN</a></span></p>
                </div>
            </div>
        </div>





        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
