<?php if ($sidebar == "con-buena-cara") { ?>

    <!--Sidebar Con buena Cara-->
    <div class="sidebar-side col-md-3 col-sm-12 col-xs-12">
        <aside class="sidebar service-sidebar">

            <!-- Services Cat List -->
            <div class="sidebar-widget categories">
                <ul class="service-cat-list">
                    <li><a href="servicio.php">Limpieza de cutis</a></li>
                    <li><a href="servicio.php">Hidratación</a></li>
                    <li class="<?php if ($service == "servicio") { echo 'active'; }?>"><a href="servicio.php">Acné</a></li>
                    <li><a href="servicio.php">Manchas</a></li>
                    <li><a href="servicio.php">Anti-edad</a></li>
                    <li><a href="servicio.php">Flacidez</a></li>
                </ul>
            </div>

            <!-- Download Links -->
            <div class="sidebar-widget download-links">
                <h3>Our Brochures</h3>
                <div class="link-box">
                    <span class="icon fa fa-file-pdf-o"></span>
                    <h5>Procedures Catalog</h5>
                    <a href="#">Download.pdf</a>
                </div>
                <div class="link-box">
                    <span class="icon fa fa-file-excel-o"></span>
                    <h5>Daily Spanz Amenities</h5>
                    <a href="#">Download.txt</a>
                </div>
            </div>

            <!-- Free Consultation -->
            <div class="sidebar-widget consultation">
                <div class="consult-box" style="background-image: url(../images/resource/consult-bg.jpg);">
                    <span>Quick Contact</span>
                    <h4>Get Solution</h4>
                    <p>Contact us at the SpaLand office nearest to you or submit a spa inquiry online.</p>
                    <a href="services.html" class="theme-btn">Contact</a>
                </div>
            </div>  
        </aside>
    </div>

<?php } elseif ($sidebar == "con-buena-cara") { ?>

<?php } ?>