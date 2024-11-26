<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Fotodepilación</title>

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
        $service = "fotodepilacion";
        $sidebar = "fotodepilacion";
        include '../../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Fotodepilación</h1>
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
                            <figure><img src="../../images/servicios/fotodepilacion.jpg" alt="Fotodepilacion - Rosma Belleza"></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Fotodepilación: Eliminación eficaz del vello mediante luz</h2>
                            <p>La fotodepilación es un tratamiento avanzado que utiliza la luz para eliminar el vello de manera efectiva y duradera, basado en el principio de fototermólisis selectiva. Durante el proceso, la luz se convierte en calor y destruye las células germinativas del folículo piloso de forma selectiva, sin dañar la piel circundante. La melanina absorbe la luz, la transporta al folículo piloso y, al transformarse en calor, quema las células germinativas, impidiendo el crecimiento del vello.</p>
                            <p>Este tratamiento es apto para trabajar sobre distintos tipos de vello, incluidos aquellos con poca melanina, como el vello amelánico, rubio o pelirrojo, y se lleva a cabo bajo la supervisión de especialistas para garantizar su seguridad y efectividad.</p>
                            <ul style="margin-bottom: 30px;">
                                <li style="list-style: inside;">Láser Nd (YAG) (1064 nm): Ideal para pieles más oscuras y vello grueso.</li>
                                <li style="list-style: inside;">Luz Intensa Pulsada (IPL) (625-1200 nm): Versátil para diferentes tipos de piel y vello.</li>
                                <li style="list-style: inside;">Láser Diodo (800-810 nm): Proporciona una depilación rápida y eficaz en modo barrido.</li>
                            </ul>
                            <p>Este tratamiento ofrece resultados duraderos, cuidando la salud de tu piel mientras elimina el vello no deseado.</p>
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