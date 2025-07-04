<!DOCTYPE html>
<html lang="es-ES">
    
<head>
    <meta charset="utf-8">
    <title>Rosma Belleza - Contacto</title>

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
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/9.jpg);">
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
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="username" placeholder="Nombre y apellidos" required="">
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                        <input type="text" name="phone" placeholder="Teléfono" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea name="message" placeholder="Mensaje"></textarea>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button class="theme-btn btn-style-five" type="submit" name="Submit Now">Enviar mensaje <i class="fa fa-angle-double-right"></i></button>
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