<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Para mamá</title>

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
        $sidebar = "para-mama";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Para mamá</h1>
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
                            <figure><img src="../../images/servicios/para-mama.jpg" alt="Tratamientos Para Mamá - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Para mamá</h2>
                            <p>En Rosma Belleza, sabemos que ser mamá es una experiencia maravillosa, pero también entendemos los cambios que tu cuerpo puede experimentar durante el embarazo y después de él. Por eso, hemos diseñado tratamientos especiales para que las mamás se sientan cómodas, cuidadas y radiantes en cada etapa de esta hermosa aventura.</p>
                            <p>Nuestros servicios incluyen tratamientos antiestrías que ayudan a mejorar la elasticidad de la piel, terapias para aliviar la pesadez de piernas y un cuidado especial preparto y postparto, adaptado a tus necesidades y pensado para brindarte relajación y bienestar.</p>
                            <!--<p>Déjate mimar por nuestras expertas, que te acompañarán con soluciones seguras y efectivas diseñadas exclusivamente para ti. En Rosma Belleza, cuidamos de ti mientras tú cuidas de lo más importante. ¡Visítanos y disfruta de un momento único dedicado a tu belleza y bienestar!</p>-->
                            <p>Te ofrecemos soluciones seguras y efectivas diseñadas exclusivamente para ti.</p>
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