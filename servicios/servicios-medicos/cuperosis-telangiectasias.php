<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Servicios Médicos</title>

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
        $page = "servicios-medicos";
        $service = "cuperosis-telangiectasias";
        $sidebar = "medicos";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Cuperosis telangiectasias</h1>
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
                            <figure><img src="../../images/servicios/cuperosis-telangiectasias.jpg" alt="Cuperosis y telangiectasias - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Tratamientos de cuperosis y telangiectasias</h2>
                            <p>La cuperosis y las telangiectasias (pequeños capilares dilatados visibles en la superficie de la piel) son alteraciones vasculares que afectan principalmente al rostro, generando enrojecimiento persistente y un aspecto irregular de la piel.</p>
                            <p>En medicina estética, estos problemas se tratan eficazmente mediante tecnologías como el láser vascular o la luz pulsada intensa (IPL), que actúan cerrando selectivamente los vasos dilatados sin dañar la piel circundante.</p>
                            <p>El procedimiento es seguro, poco invasivo y mejora notablemente la apariencia del enrojecimiento facial, unificando el tono de la piel y devolviéndole su luminosidad.</p>
                            <p>Es ideal para personas con piel sensible o con tendencia a la rosácea que desean recuperar un rostro más uniforme y saludable.</p>
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