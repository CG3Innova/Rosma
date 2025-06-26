<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Manicura Permanente</title>

<!-- Stylesheets -->
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="../../css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
<link rel="icon" href="../../images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="../../js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php 
        $page = "servicios-2";
        $service = "manicura-permanente";
        $sidebar = "dame-tu-mano";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Manicura Semipermanente</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index.html">Inicio</a></li>
	                <li>Servicios</li>
	            </ul>
        	</div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Service Detail -->
    <div class="service-detail-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side pull-right col-md-9 col-sm-12 col-xs-12">
                    <div class="service-detail">
                        <div class="image-box">
                            <figure><img src="../../images/servicios/manicura-permanente.jpg" alt="Manicura permanente - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Manicura Semipermanente: Belleza duradera con esmaltado Shellac</h2>
                            <p>Nuestro servicio de manicura semipermanente con esmaltado Shellac ofrece una solución ideal para quienes buscan una manicura de larga duración y sin preocupaciones. Este esmalte semipermanente, además de ser vegano y Cruelty Free, garantiza una alta resistencia y una fijación eficiente a la uña, permitiendo que el color se mantenga impecable por mucho más tiempo sin astillarse.</p>
                            <p>Con una amplia gama de colores disponibles, podrás elegir el tono que mejor se adapte a tu estilo y ocasión, desde tonos sutiles y elegantes hasta colores vibrantes y atrevidos. El esmaltado Shellac no solo proporciona un acabado brillante y profesional, sino que también cuida de tus uñas, evitando los daños y proporcionando una manicura que luce perfecta durante más tiempo. Atrévete a descubrir la belleza duradera y responsable que tu estilo merece.</p>
                        </div>

                    </div><!-- Service Detail -->
                </div>

                <?php 
                    include '../../includes/sidebar.php';
                ?>

            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->
    
    <?php 
        include '../../includes/servicios.php';
        include '../../includes/footer.php';
    ?>

</div>    
<!--End pagewrapper-->



<script src="../../js/jquery.js"></script> 
<script src="../../js/bootstrap.min.js"></script>
<!--End Revolution Slider-->
<script src="../../js/jquery-ui.js"></script> 
<script src="../../js/jquery.fancybox.js"></script>
<script src="../../js/owl.js"></script>
<script src="../../js/appear.js"></script>
<script src="../../js/wow.js"></script>
<script src="../../js/mixitup.js"></script>
<script src="../../js/script.js"></script>


</body>
</html>