<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Cavitación</title>

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
        $service = "cavitacion";
        $sidebar = "a-toda-velocidad";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Cavitación</h1>
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
                            <figure><img src="../../images/servicios/cavitacion.jpg" alt="Cavitación - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Cavitación: reducción de grasa no invasiva</h2>
                            <p>La cavitación estable es un fenómeno físico no invasivo que consiste en la generación controlada y repetida de micro-burbujas de vacío en el interior de un líquido, fluido o material fisiológico, seguido de su propia implosión. Este principio de la física se utiliza en medicina estética con el fin de provocar la transformación de la grasa del manipuló adiposo en una sustancia líquida (diglicérido) que se elimina a través del sistema linfático y las vías urinarias.</p>
                            <p>Este procedimiento es ideal para quienes desean reducir grasa en áreas específicas del cuerpo sin recurrir a métodos invasivos o cirugías. Es un tratamiento seguro y eficaz que ofrece resultados visibles en la reducción de volumen, ayudando a moldear y definir la figura. La cavitación es un método indoloro y altamente efectivo, que combina ciencia y estética para brindarte una solución innovadora en la lucha contra la grasa localizada.</p>
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