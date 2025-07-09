<!DOCTYPE html>
<html lang="es-ES">
    
<head>
    <meta charset="utf-8">
    <title>Rosma Belleza | Contacto</title>
    <meta name="title" content="Rosma Belleza | Tratamientos de belleza y bienestar">
    <meta name="description" content="En Rosma Belleza, ofrecemos una amplia gama de tratamientos de belleza y bienestar para ayudarte a sentirte y lucir mejor. ¡Contáctanos!">
    <meta name="author" content="Rosma Belleza">

    <!-- Canonical -->
    <link rel="canonical" href="https://rosmabelleza.com/">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://rosmabelleza.com/">
    <meta property="og:title" content="Rosma Belleza | Tratamientos de belleza y bienestar">
    <meta property="og:description" content="En Rosma Belleza, ofrecemos una amplia gama de tratamientos de belleza y bienestar para ayudarte a sentirte y lucir mejor. ¡Contáctanos!">
    <meta property="og:image" content="https://rosmabelleza.com/images/logo-rosma.png">
    <meta property="og:site_name" content="Rosma Belleza">
    <meta property="og:locale" content="es_ES">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rosma Belleza | Tratamientos de belleza y bienestar">
    <meta name="twitter:description" content="En Rosma Belleza, ofrecemos una amplia gama de tratamientos de belleza y bienestar para ayudarte a sentirte y lucir mejor. ¡Contáctanos!">
    <meta name="twitter:image" content="https://rosmabelleza.com/images/logo-rosma.png">

    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Rosma" />
    <link rel="manifest" href="/images/favicon/site.webmanifest" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php 
        $page = "contacto";
        include 'includes/menu.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="horariosModal" tabindex="-1" role="dialog" aria-labelledby="horariosLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="horariosLabel">Horarios</h4>
            </div>

            <div class="modal-body">
                <p><strong>Lunes, Miércoles y Jueves:</strong> de 9.00 a 13.30 y de 15.30 a 20.00</p>
                <p><strong>Martes y Viernes:</strong> de 9.00 a 20.00</p>
                <p><strong>Sábados y Domingos:</strong> Cerrado</p>
                <hr>
                <p><strong>HORARIO ESPECIAL VERANO</strong></p>
                <p><strong>Lunes, Miércoles y Jueves:</strong> de 9.00 a 13.30 y de 15.30 a 20.00</p>
                <p><strong>Martes:</strong> de 9.00 a 20.00</p>
                <p><strong>Viernes:</strong> de 9.00 a 17.00</p>
                <p><strong>Sábados y Domingos:</strong> Cerrado</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>

            </div>
        </div>
    </div>
    
 	<!--Page Title-->
    <section class="page-title">
        <video autoplay muted loop playsinline alt="Rosma Belleza" id="background-video"> 
            <source src="/images/header.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <div class="bg-overlay"></div>
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Contacta con Rosma Belleza</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index.php">Inicio </a></li>
	                <li>Contacto</li>
	            </ul>
        	</div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="form-section">
                <div class="row clearfix">
                    <!-- Form Column -->
                    <div class="form-column col-lg-9 col-md-8 col-sm-12 col-xs-12">
                        <div class="contact-form-two">
                            <span class="title">Rosma Belleza</span>
                            <h3>Contacta con nosotros</h3>
                            <div class="text">Si necesitas más información acerca de nuestros servicios o productos, ponte en contacto con nosotros:</div>
                            <form method="post" action="sendemail.php" id="contact-form-contact">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="nombre" placeholder="Nombre y apellidos *" type="text" class="form-control" required/>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="email" placeholder="Email *" type="email" class="form-control" required/>
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                       <input data-required="true" name="phone" placeholder="Teléfono *" type="text" class="form-control" required/>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea data-required="true" name="message" cols="40" rows="5" class="form-control" placeholder="Mensaje" required></textarea>
                                    </div>

                                    <div class="col-md-12" style="margin-bottom: 25px;">
                                        <div class="checkbox-wrapper-4 ">
                                            <input class="inp-cbx" data-required="true" id="morning" type="checkbox" required>
                                            <label class="cbx" for="morning">
                                            <span>
                                            <svg height="10px" width="12px">
                                            <use xlink:href="#check-4">
                                            </use>
                                            </svg>
                                            </span>
                                            <span>
                                            He leído y acepto los
                                            <a href="/politica-privacidad.php" target="_blank">
                                            términos y condiciones
                                            </a>
                                            de este sitio web
                                            </span>
                                            </label>
                                            <svg class="inline-svg" style="display: none;">
                                            <symbol id="check-4" viewbox="0 0 12 10">
                                            <polyline points="1.5 6 4.5 9 10.5 1">
                                            </polyline>
                                            </symbol>
                                            </svg>
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button type="submit" class="theme-btn btn-style-five">
                                            <i class="fa fa-angle-double-right"></i>
                                            <span> Enviar mensaje </span>
                                        </button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="contact-column col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <ul class="contact-info">
                                <li>
                                    <span class="icon fa fa-mobile"></span> 
                                    <strong>Teléfono:</strong>
                                    <p>945 23 04 47</p>
                                </li>

                                <li>
                                    <span class="icon fa fa-envelope-o"></span> 
                                    <strong>Email:</strong>
                                    <p>rosma@rosmabelleza.com</p>
                                </li>

                                <li>
                                    <span class="icon fa fa-paper-plane-o"></span> 
                                    <strong>Dirección:</strong>
                                    <p>C/ Madre Vedruna, 12. 01008, Vitoria-Gasteiz</p>
                                </li>

                                <li>
                                    <span class="icon fa fa-clock-o"></span> 
                                    <strong>Horario:</strong>
                                    <p> Lunes, Miércoles y Jueves:<br> 9:00 a 13:30 y 15:30 a 20:00<br>

                                        Martes y Viernes:<br> 9:00 a 20:00<br>

                                        Sábados y Domingos:<br> Cerrado
                                    </p>
                                </li>
                            </ul>
                            <div class="social-links">
                                <h5>Síguenos:</h5>
                                <ul class="social-icon-one">
                                    <li><a href="https://www.facebook.com/rosmabelleza" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/rosmabelleza" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/rosmabelleza" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Map-->
            <div class="map-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11701.06809948571!2d-2.6809352!3d42.8460946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe66ffa6aaa671e1e!2s%22Rosma+Belleza%22!5e0!3m2!1ses!2ses!4v1522255433453" width="100%" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
    
    <?php 
        include 'includes/footer.php';
    ?>

</div>    
<!--End pagewrapper-->

<script src="https://www.google.com/recaptcha/api.js?render=6Lf1_mIrAAAAAHWra7vhT1DrvbXnSQso7U9Q0xXS"></script>
<script src="js/formValidator.js"></script>
<script defer src="cookies/cookieconsent.js"></script>
<script defer src="cookies/cookieconsent-init.js"></script>
<script src="js/jquery.js"></script> 

<!--End Revolution Slider-->
<script src="js/jquery-ui.js"></script> 
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>