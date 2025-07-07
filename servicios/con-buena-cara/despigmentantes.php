<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Despigmentantes</title>

<!-- Stylesheets -->
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="../../css/color-themes/default-theme.css" rel="stylesheet">

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
<!--[if lt IE 9]><script src="../../js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php 
        $page = "servicios-2";
        $service = "despigmentantes";
        $sidebar = "con-buena-cara";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title">
        <video autoplay muted loop playsinline alt="Rosma Belleza" id="background-video"> 
            <source src="/images/header.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Despigmentantes</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index.html">Inicio </a></li>
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
                            <figure><img src="../../images/servicios/despigmentantes.jpg" alt="Tratamientos despigmentantes - Rosma Belleza "></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Tratamientos despigmentantes</h2>
                            <p>Las manchas son alteraciones de la pigmentación que se originan por la acumulación excesiva de melanina, pigmento que da color a la piel, cabello y ojos. Existen diferentes causas por las que se originan las manchas: la exposición solar, el envejecimiento, el embarazo, lesiones dérmicas y algunos medicamentos desencadenan una anomalía en el melanocito, célula que fabrica la melanina, provocando un tono irregular, mate y apagado.</p>
                            <p>Dependiendo del tipo de mancha y profundidad de la misma existe un tratamiento específico para tratarla. </p>
                            <p>El peeling químico y la micro-punción son alternativas eficaces para tratar las manchas.</p>
                            <p>Lo que hace único a cada uno de nuestros peelings son sus principios activos específicos, el porcentaje de concentración de estos ingredientes y el pH de las soluciones. Para asegurar un resultado óptimo, es fundamental realizar un diagnóstico preciso que nos permita elegir el tratamiento más adecuado, maximizando así los beneficios y garantizando una piel más uniforme y luminosa.</p>
                            <p>Tan importante como el tratamiento profesional son los productos que utilices en casa.”</p>
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