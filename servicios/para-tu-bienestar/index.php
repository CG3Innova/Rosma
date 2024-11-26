<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Para tu bienestar</title>

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
        $service = "nutricion";
        $sidebar = "para-tu-bienestar";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Para tu bienestar</h1>
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
                            <figure><img src="../../images/servicios/nutricion.jpg" alt="Nutrición - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Nutrición</h2>
                            <p>Lograr obtener la totalidad de los nutrientes necesarios para cada individuo, en las cantidades y proporciones adecuadas, debe ser el primer objetivo de nuestra alimentación. En este sentido, nuestra especialista en NUTRICIÓN HOLÍSTICA, Amalia Muñoz Márquez, llevará a cabo un exhaustivo estudio de los hábitos alimenticios, así como de las condiciones laborales que pueden influir en nuestra salud, como el sedentarismo y los horarios de trabajo. También se tendrán en cuenta las condiciones fisiológicas de cada persona, incluyendo peso, talla y otros factores relevantes.</p>
                            <p>Esta valoración es fundamental para diseñar un programa nutricional personalizado, cuyo objetivo es educar y corregir comportamientos erróneos en nuestra alimentación y estilo de vida. Reconocemos que estos hábitos inadecuados pueden afectar nuestra salud fisiológica, emocional, física y estética. Así, buscamos el equilibrio a través de la Dietoterapia, incrementando nuestra energía vital para lograr un mejor estado de salud y bienestar estético.</p>
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