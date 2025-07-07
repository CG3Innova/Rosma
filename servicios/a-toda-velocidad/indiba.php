<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - INDIBA</title>

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
        $service = "indiba";
        $sidebar = "a-toda-velocidad";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title">
        <video autoplay muted loop playsinline alt="Rosma Belleza" id="background-video"> 
            <source src="/images/header.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <div class="bg-overlay"></div>
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>INDIBA Deep Beauty</h1>
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
                            <figure><img src="../../images/servicios/indiba.jpg" alt="INDIBA - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>INDIBA Deep Beauty: Rejuvenece y revitaliza tu piel</h2>
                            <p>El exclusivo método INDIBA Deep Beauty es una solución innovadora y no invasiva que reequilibra el intercambio celular de iones, ayudando a las células a recuperar su función natural. Gracias a este proceso, la piel recupera su elasticidad, la grasa localizada se reduce, y el flujo de oxígeno entre las células mejora, logrando un rejuvenecimiento visible y duradero desde la primera sesión.</p>
                            <p>Este tratamiento indoloro se adapta a tus necesidades estéticas, proporcionando resultados sorprendentes de manera natural. Con el Sistema Proionic®, INDIBA ofrece tres niveles de tratamiento con múltiples beneficios:</p>
                            <ul style="margin-bottom: 30px;">
                                <li style="list-style: inside;">Subtérmico: Estimula el metabolismo celular, mejorando la nutrición y la circulación.</li>
                                <li style="list-style: inside;">Térmico: Aumenta la microcirculación y la oxigenación de los tejidos, favoreciendo una piel más saludable.</li>
                                <li style="list-style: inside;">Hipertérmico: Facilita la eliminación de grasas y la recuperación del tejido, depurando y reafirmando la piel.</li>
                            </ul>
                            <p>INDIBA Deep Beauty es el tratamiento ideal para quienes desean una piel rejuvenecida, revitalizada y libre de imperfecciones, sin dolor ni procedimientos invasivos.</p>
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