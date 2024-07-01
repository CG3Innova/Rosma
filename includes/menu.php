<?php if ($page == "servicios") { ?>

<!-- Main Header-->
    <header class="main-header">
    	
        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><a href="tel:945230447"><i class="fa fa-volume-control-phone"></i> 945 23 04 47</a></li>
                            <li><a href="mailto:rosma@rosmabelleza.com"><i class="fa fa-envelope-o"></i> rosma@rosmabelleza.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                            <li><a href="https://www.facebook.com/rosmabelleza" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/rosmabelleza" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/rosmabelleza" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="../images/logo-rosma.png" alt="Logo Rosma Belleza"></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="<?php if ($page == "index") { echo 'current'; }?>"><a href="../index.php">Inicio</a>
                                    </li>
                                    <li class="<?php if ($page == "quienes-somos") { echo 'current'; }?>"><a href="../quienes-somos.php">Quienes somos</a>
                                        <ul>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="appointment.php">Appointment</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="gallery-detail.php">Gallery Detail</a></li> 
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "servicios") { echo 'current'; }?> dropdown" class="dropdown"><a href="index.php">Servicios</a>
                                        <ul>
                                        <li><a href="servicio.php">Message Therapy</a></li>
                                        <li><a href="servicio.php">Facial Treatment</a></li>
                                        <li><a href="servicio.php">Pedicure & Menicure</a></li>
                                        <li><a href="servicio.php">Salt and Oil Bath</a></li>
                                        <li><a href="servicio.php">Hair Treatments</a></li> 
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "blog") { echo 'current'; }?>"><a href="../blog.php">Nuestro Blog</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.php">Products</a></li>
                                            <li><a href="shop-single.php">Products Detail</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="cart.php">Shopping Cart</a></li>
                                            <li><a href="login.php">Registration</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "contacto") { echo 'current'; }?>"><a href="../contacto.php">Contacto</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
                    
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if ($page == "index") { echo 'current'; }?>"><a href="index.php">Inicio</a>
                                </li>
                                <li class="<?php if ($page == "quienes-somos") { echo 'current'; }?>"><a href="quienes-somos.php">Quienes somos</a>
                                </li>
                                <li class="<?php if ($page == "servicios") { echo 'current'; }?> dropdown"><a href="servicios/index.php">Servicios</a>
                                    <ul>
                                        <li><a href="servicios/servicio.php">Message Therapy</a></li>
                                        <li><a href="servicios/servicio.php">Facial Treatment</a></li>
                                        <li><a href="servicios/servicio.php">Pedicure & Menicure</a></li>
                                        <li><a href="servicios/servicio.php">Salt and Oil Bath</a></li>
                                        <li><a href="servicios/servicio.php">Hair Treatments</a></li> 
                                    </ul>
                                </li>
                                <li class="<?php if ($page == "blog") { echo 'current'; }?>"><a href="blog.php">Nuestro Blog</a>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.php">Products</a></li>
                                        <li><a href="shop-single.php">Products Detail</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="cart.php">Shopping Cart</a></li>
                                        <li><a href="login.php">Registration</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == "contacto") { echo 'current'; }?>"><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
<!--End Main Header -->

<?php } else { ?>

<!-- Main Header-->
    <header class="main-header">
    	
        <!--Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><a href="tel:945230447"><i class="fa fa-volume-control-phone"></i> 945 23 04 47</a></li>
                            <li><a href="mailto:rosma@rosmabelleza.com"><i class="fa fa-envelope-o"></i> rosma@rosmabelleza.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one">
                            <li><a href="https://www.facebook.com/rosmabelleza" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/rosmabelleza" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/rosmabelleza" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">
               <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="images/logo-rosma.png" alt="Logo Rosma Belleza"></a></div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="<?php if ($page == "index") { echo 'current'; }?>"><a href="index.php">Inicio</a>
                                    </li>
                                    <li class="<?php if ($page == "quienes-somos") { echo 'current'; }?>"><a href="quienes-somos.php">Quienes somos</a>
                                        <ul>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="appointment.php">Appointment</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="gallery-detail.php">Gallery Detail</a></li> 
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "servicios") { echo 'current'; }?>" class="dropdown"><a href="servicios.php">Servicios</a>
                                        <ul>
                                        <li><a href="servicio.php">Message Therapy</a></li>
                                        <li><a href="servicio.php">Facial Treatment</a></li>
                                        <li><a href="servicio.php">Pedicure & Menicure</a></li>
                                        <li><a href="servicio.php">Salt and Oil Bath</a></li>
                                        <li><a href="servicio.php">Hair Treatments</a></li> 
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "blog") { echo 'current'; }?>"><a href="blog.php">Nuestro Blog</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.php">Products</a></li>
                                            <li><a href="shop-single.php">Products Detail</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="cart.php">Shopping Cart</a></li>
                                            <li><a href="login.php">Registration</a></li>
                                        </ul>
                                    </li>
                                    <li class="<?php if ($page == "contacto") { echo 'current'; }?>"><a href="contacto.php">Contacto</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
                <!--Logo-->
                    
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="<?php if ($page == "index") { echo 'current'; }?>"><a href="index.php">Inicio</a>
                                </li>
                                <li class="<?php if ($page == "quienes-somos") { echo 'current'; }?>"><a href="quienes-somos.php">Quienes somos</a>
                                </li>
                                <li class="<?php if ($page == "servicios") { echo 'current'; }?>" class="dropdown"><a href="servicios.php">Servicios</a>
                                    <ul>
                                        <li><a href="servicio.php">Message Therapy</a></li>
                                        <li><a href="servicio.php">Facial Treatment</a></li>
                                        <li><a href="servicio.php">Pedicure & Menicure</a></li>
                                        <li><a href="servicio.php">Salt and Oil Bath</a></li>
                                        <li><a href="servicio.php">Hair Treatments</a></li> 
                                    </ul>
                                </li>
                                <li class="<?php if ($page == "blog") { echo 'current'; }?>"><a href="blog.php">Nuestro Blog</a>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.php">Products</a></li>
                                        <li><a href="shop-single.php">Products Detail</a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                        <li><a href="cart.php">Shopping Cart</a></li>
                                        <li><a href="login.php">Registration</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if ($page == "contacto") { echo 'current'; }?>"><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
<!--End Main Header -->
<?php } ?>