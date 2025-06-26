<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Dame tu mano</title>

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
        $service = "servicio";
        $sidebar = "dame-tu-mano";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Dame tu mano</h1>
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
                            <figure><img src="../../images/servicios/dame-tu-mano.jpg" alt="Dame tu mano - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Dame tu mano</h2>
                            <p>En Rosma Belleza, cuidamos de tus manos con tratamientos exclusivos diseñados para resaltar su belleza y mantenerlas saludables. Nuestro centro ofrece una amplia gama de servicios especializados, desde manicuras clásicas y semipermanentes hasta innovadores tratamientos IBX, que fortalecen y reparan tus uñas desde el interior.</p>

                            <p>Confía en nuestras expertas en belleza, quienes te guiarán para elegir el tratamiento que mejor se adapte a tus necesidades. Ya sea que busques un acabado impecable y duradero o una solución para uñas debilitadas.</p>

                            <p><i><strong>“La elegancia es la única belleza que no se desvanece”</strong></i> - Audrey Hepburn.</p>

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