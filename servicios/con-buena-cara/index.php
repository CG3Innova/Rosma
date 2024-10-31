<!DOCTYPE html>
<html lang="es-ES">
<head>
<meta charset="utf-8">
<title>Rosma Belleza - Servicio</title>

<!-- Stylesheets -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="../css/color-themes/default-theme.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
<link rel="icon" href="../images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="../js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php 
        $page = "servicios-2";
        $service = "servicio";
        include '../includes/menu.php';
    ?>
    
 	<!--Page Title-->
    <section class="page-title" style="background-image:url(../images/background/9.jpg);">
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Servicio ejemplo</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index.html">Inicio </a></li>
	                <li>Servicio ejemplo</li>
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
                            <figure><img src="../images/resource/service-detail.jpg" alt=""></figure>
                        </div> 
                        <div class="lower-content">
                            <h2>Facial Treatment</h2>
                            <p>A facial treatment works together to improve the appearance of your skin. Since skin types are not all the same, the procedures and products used in a facial may differ. A facial treatment is usually tailored to the needs of the client, but all facials have a basic routine that most skin care professionals use.</p>
                            <p>The massage used in a facial treatment encourages blood flow and brings nourishing blood to the skin’s cells. Facial treatments are relaxing, as well as therapeutic. Machines are used to treat skin, but this spa service can be performed manually.</p>
                            <h3>Aging Skin</h3>
                            <p>Aging skin is cleansed, steamed and massaged during a facial treatment. An exfoliation mask for aging skin is used to soften lines and wrinkles. If a mask is applied, it will be removed after the appropriate time, and a cream or lotion made to treat mature skin is applied. Facial massage also tones sagging skin, encourages the production of natural oils and leaves the skin with a healthy glow</p>
                            <!-- Two Column -->
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="info-column pull-right col-md-6 col-sm-12 col-xs-12">
                                        <h3>Benefits</h3>
                                        <p>Normal skin remains clear and radiant when regular facials are given. The steam and facial massage used on clients with dry skin, however, should make their skin more hydrated. Combination skin typically shows improvement from regular facial treatments as well. The products used on acne-plagued skin should greatly an acne condition over time if the client follows the skin care professional’s instructions on how to care for his skin at home</p>
                                    </div>
                                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                        <div class="image"><a href="../images/gallery/image-5.jpg" class="lightbox-image"><img src="../images/resource/feature-thumb-2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Procedure Section -->
                        <section class="procedure-section">
                            <div class="auto-container">
                                <div class="sec-title text-center">
                                    <span class="title">Where nature meets bliss</span>
                                    <h2>Popular Procedures</h2>
                                    <div class="separator"><span class="flaticon-flower"></span></div>
                                </div>

                                <div class="row clearfix">
                                    <!-- Procedure Block -->
                                    <div class="procedure-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-wellness"></span>
                                                <span class="percent">90%</span>
                                            </div>
                                            <h3><a href="#">Professionalcare</a></h3>
                                            <div class="text">Products from world manufacturers of professional cosmetics</div>
                                        </div>
                                    </div>

                                    <!-- Procedure Block -->
                                    <div class="procedure-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-mask"></span>
                                                <span class="percent">90%</span>
                                            </div>
                                            <h3><a href="#">Masters of all Trades</a></h3>
                                            <div class="text">Our every team member are specialized for salon </div>
                                        </div>
                                    </div>

                                    <!-- Procedure Block -->
                                    <div class="procedure-block col-md-4 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                                <span class="icon flaticon-flower-1"></span>
                                                <span class="percent">90%</span>
                                            </div>
                                            <h3><a href="#">Personal Stylist</a></h3>
                                            <div class="text">Visit to our salon you can seek advice our stylists</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--End Procedure Section -->

                    </div><!-- Service Detail -->
                </div>

                <?php 
                    include '../includes/sidebar.php';
                ?>

            </div>
        </div>
    </div>
    <!-- End Service Detail Section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section" style="background-image: url(../images/background/10.jpg);">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Book a Session Now</h2>
                        <ul class="contact-info">
                            <li>Call Us at : <a href="#">0785 6985 636</a> or</li>
                            <li>Send us an email : <a href="#">hey@spaland.com</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="subscribe-form">
                            <div class="text">If you Want to get updates on Spa & news?</div>
                            <form method="post" action="index.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                    <button type="submit" class="search-btn"><span class="fa fa-send"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section -->
    
    <?php 
        include '../includes/footer.php';
    ?>

</div>    
<!--End pagewrapper-->



<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.min.js"></script>
<!--End Revolution Slider-->
<script src="../js/jquery-ui.js"></script> 
<script src="../js/jquery.fancybox.js"></script>
<script src="../js/owl.js"></script>
<script src="../js/appear.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/mixitup.js"></script>
<script src="../js/script.js"></script>


</body>
</html>