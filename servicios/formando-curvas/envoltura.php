<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
    <title>Rosma Belleza | Envoltura</title>
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
        $service = "envoltura";
        $sidebar = "formando-curvas";
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
	            <h1>Envoltura</h1>
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
                            <figure><img src="../../images/servicios/envoltura.jpg" alt="Envoltura - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Envoltura</h2>
                            <p>Las algas y los barros marinos son reconocidos por sus múltiples propiedades beneficiosas que impactan de manera integral en la salud del organismo. Estas sustancias naturales destacan por sus efectos antiinflamatorios y desintoxicantes. Además, su capacidad hidratante proporciona una profunda humectación a la piel, mientras que sus propiedades nutritivas aportan una rica variedad de minerales y vitaminas esenciales.</p>
                            <p>Asimismo, los barros marinos favorecen la circulación sanguínea y poseen un efecto reafirmante que contribuye a la tonicidad de la piel. No menos importante es su acción relajante, que ayuda a disminuir el estrés y la tensión muscular. Para maximizar sus beneficios, se recomienda combinar estos tratamientos con otras técnicas en un enfoque personalizado, garantizando así resultados óptimos y duraderos.</p>
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