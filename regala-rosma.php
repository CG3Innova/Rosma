<!DOCTYPE html>
<html lang="es-ES">
    
<head>
    <meta charset="utf-8">
    <title>Rosma Belleza | Regala Rosma Belleza</title>
    <meta name="title" content="Rosma Belleza | Contacto Rosma Belleza en Vitoria-Gasteiz">
    <meta name="description" content="Contacta con Rosma Belleza en Vitoria-Gasteiz para más información sobre nuestros tratamientos de belleza y bienestar. ">
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="cookies/cookieconsent.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="css/color-themes/default-theme.css" rel="stylesheet">

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
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <?php 
        $page = "regala-rosma";
        include 'includes/menu.php';
    ?>

    <!-- Modal -->
    <div class="modal fade" id="horariosModal" tabindex="-1" role="dialog" aria-labelledby="horariosLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="horariosLabel">Horario</h4>
            </div>

            <div class="modal-body">
                <p><strong>Lunes, Miércoles y Jueves:</strong> de 9.00 a 13.30 y de 15.30 a 19.00</p>
                <p><strong>Martes:</strong> de 9.00 a 19.00</p>
                <p><strong>Viernes:</strong> de 9.00 a 15.00</p>
                <p><strong>Sábados y Domingos:</strong> Cerrado</p>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>

            </div>
        </div>
    </div>
    
 	<!--Page Title-->
    <section class="page-title">
        <video autoplay muted loop playsinline alt="Rosma Belleza" id="background-video"> 
            <source src="/images/header.mp4" type="video/mp4">
            Tu navegador no soporta el video.
        </video>
        <div class="bg-overlay"></div>
        <div class="auto-container">
        	<div class="inner-container clearfix">
	            <h1>Regala Rosma Belleza</h1>
	            <ul class="bread-crumb clearfix">
	                <li><a href="index.php">Inicio </a></li>
	                <li>Regala Rosma</li>
	            </ul>
        	</div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="form-section">
                <div class="row clearfix">
                    <!-- Form Column -->
                    <div class="form-column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-form-two">
                            <span class="title">Rosma Belleza</span>
                            <h3>Encarga aquí tu regalo</h3>
                            <div class="text"><strong>Regala un momento</strong> para detener el tiempo, regala bienestar, regala belleza.<br> 
                                Sorprende <strong>con nuestra carta regalo</strong>, es más que un detalle, <strong>es un “PIENSO EN TI”.</strong><br>
                                Elige el ritual de belleza que más te apetezca y convierte este regalo en una <strong>experiencia única</strong>:
                            </div>
                            <form method="post" action="/form/form.php" id="contact-form" class="contact-form-contact" enctype="multipart/form-data">

                                <div class="contact-form-success alert alert-success d-none">
                                    <strong>¡Perfecto!</strong> Hemos recibido tu mensaje. Te avisaremos cuando tengas tu regalo preparado.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none">
                                    <strong>Error!</strong> Se ha producido un error al enviar tu mensaje.
                                    <span class="mail-error-message text-1 d-block"></span>
                                </div>

                                <input name="form_type" type="hidden" value="Formulario de Regala Rosma"/>
                                <input id="website" name="website" style="display:none" type="text">
                                <input name="form_time" type="hidden" value="&lt;?php echo time(); ?&gt;"/>
                                <input id="recaptcha_token" name="g-recaptcha-response" type="hidden"/>

                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="nombre" placeholder="Nombre y apellidos *" type="text" class="form-control" required/>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="phone" placeholder="Teléfono *" type="text" class="form-control" required/>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="para_quien_es_el_regalo" placeholder="¿Para quién es el regalo? Dinos su nombre *" type="text" class="form-control" required/>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <input data-required="true" name="quien_lo_encarga" placeholder="¿Quién encarga el regalo?" type="text" class="form-control" required/>
                                    </div>

                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <label for="fecha-recogida" class="form-label">Fecha de recogida en nuestro centro: *</label>
                                        <input type="date" id="fecha-recogida" name="fecha_de_recogida" placeholder="Dedicatoria (opcional)" class="form-control" required>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <textarea style="height: 100px; margin-bottom: 0;" name="message" cols="40" rows="2" class="form-control" placeholder="Dedicatoria (opcional)"></textarea>
                                    </div>

                                    <!-- NUEVO: Selector de categoría -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                        <select name="categoria" id="categoria-servicio" class="form-control" required>
                                            <option value="">Selecciona una categoría *</option>
                                            <option value="con buena cara">Con buena cara</option>
                                            <option value="dame tu mano">Dame tu mano</option>
                                            <option value="pisa fuerte">Pisa fuerte</option>
                                            <option value="piel de seda">Piel de seda</option>
                                            <option value="fotodepilacion">Fotodepilación</option>
                                            <option value="para que estes mas guapa">Para que estes más guapa</option>
                                            <option value="formando curvas">Formando curvas</option>
                                            <option value="a toda velocidad">A toda velocidad</option>
                                            <option value="para tu mirada">Para tu mirada</option>
                                            <option value="escote provocador">Escote provocador</option>
                                            <option value="para mama">Para mamá</option>
                                            <option value="para que te mimes">Para que te mimes</option>
                                            <option value="para tu bienestar">Para tu bienestar</option>
                                            <option value="servicios medicos">Servicios médicos</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Con buena cara" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="con buena cara">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="limpieza de cutis">Limpieza de cutis</option>
                                            <option value="hidratantes">Hidratantes</option>
                                            <option value="oxigenantes">Oxigenantes</option>
                                            <option value="cicatrizantes">Cicatrizantes</option>
                                            <option value="renovadores">Renovadores</option>
                                            <option value="antiedad">Antiedad</option>
                                            <option value="reafirmantes">Reafirmantes</option>
                                            <option value="antiacne">Antiacné</option>
                                            <option value="pieles sensibles">Pieles sensibles</option>
                                            <option value="despigmentantes">Despigmentantes</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Dame tu mano" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="dame tu mano">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="manicura">Manicura</option>
                                            <option value="manicura spa">Manicura SPA</option>
                                            <option value="manicura semipermanente">Manicura Semipermanente</option>
                                            <option value="ibx manicura">IBX</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Pisa fuerte" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="pisa fuerte">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="pedicura">Pedicura</option>
                                            <option value="pedicura spa">Pedicura SPA</option>
                                            <option value="pedicura semipermanente">Pedicura semipermanente</option>
                                            <option value="ibx pedicura">IBX</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Piel de seda" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="piel de seda">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="cera caliente">Cera caliente</option>
                                            <option value="cera fria">Cera fria</option>
                                            <option value="electrica">Eléctrica</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Fotodepilacion" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="fotodepilacion">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="fotodepilacion">Fotodepilación</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Para que estés más guapa" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="para que estes mas guapa">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="maquillaje">Maquillaje</option>
                                            <option value="automaquillaje">Automaquillaje</option>
                                            <option value="visagismo de cejas">Visagismo de cejas</option>
                                            <option value="laminado de cejas">Laminado de cejas</option>
                                            <option value="lifting de pestanas">Lifting de pestañas</option>
                                            <option value="tinte de pestanas y cejas">Tinte de pestañas y cejas</option>
                                            <option value="henna para cejas">Henna para cejas</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Formando Curvas" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="formando curvas">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="anticelulitico">Anticelulítico</option>
                                            <option value="reafirmantes">Reafirmantes</option>
                                            <option value="reductores">Reductores</option>
                                            <option value="drenaje linfatico">Drenaje linfático</option>
                                            <option value="drenaje energetico">Drenaje energético</option>
                                            <option value="balneoterapia">Balneoterapia</option>
                                            <option value="envoltura">Envoltura</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "A toda velocidad" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="a toda velocidad">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="cavitacion">Cavitación</option>
                                            <option value="indiba">INDIBA</option>
                                            <option value="vacumterapia">Vacumterapia</option>
                                            <option value="oxigenoterapia">Oxigenoterapia</option>
                                            <option value="on body estetic">On body Estetic</option>
                                            <option value="on face myolifting facial">On face myolifting facial</option>
                                            <option value="presoterapia termopresoterapia">Presoterapia / Termopresoterapia</option>
                                            <option value="la capsula del tiempo">La cápsula del tiempo</option>
                                            <option value="vibromasaje">Vibromasaje</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Para tu mirada" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="para tu mirada">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="tratamiento de ojos">Tratamiento de ojos</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Escote provocador" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="escote_provocador">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="tratamiento cuello doble menton escote">Tratamiento cuello, doble mentón y escote</option>
                                            <option value="tratamiento senos">Tratamiento de senos</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Para mamá" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="para mama">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="antiestrias">Antiestrías</option>
                                            <option value="pesadez de piernas">Pesadez de piernas</option>
                                            <option value="preparto postparto">Preparto / Postparto</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Para que te mimes" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="para que te mimes">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="peeling corporal">Peeling corporal</option>
                                            <option value="piedras calientes">Piedras calientes</option>
                                            <option value="ritual sal del himalaya">Ritual sal del Himalaya</option>
                                            <option value="ritual secrets">Ritual secrets</option>
                                            <option value="ritual islas del pacifico">Ritual islas del Pacífico</option>
                                            <option value="ritual maravillas del artico">Ritual maravillas del Ártico</option>
                                            <option value="ritual mar de las indias">Ritual mar de las indias</option>
                                            <option value="ritual aceites esenciales">Ritual aceites esenciales</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Para tu bienestar" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="para tu bienestar">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="nutricion">Nutrición</option>
                                        </select>
                                    </div>

                                    <!-- NUEVO: Selector de servicio para categoría "Servicios médicos" -->
                                    <div class="col-md-6 col-sm-12 col-xs-12 form-group service-group d-none" data-category="servicios medicos">
                                        <select name="servicio" class="form-control" disabled>
                                            <option value="">Selecciona un servicio *</option>
                                            <option value="neuromoduladores">Neuromoduladores</option>
                                            <option value="acido hialuronico reticulado">Ácido hialurónico reticulado</option>
                                            <option value="vitaminas">Vitaminas</option>
                                            <option value="peeling quimicos">Peeling químicos</option>
                                            <option value="cuperosis telangiectasias">Cuperosis telangiectasias</option>
                                            <option value="verrugas puntos rubi">Verrugas puntos rubí</option>
                                            <option value="mesoterapia corporal">Mesoterapia corporal</option>
                                            <option value="esclerosis vascular">Esclerosis vascular</option>
                                            <option value="hiperhidrosis">Hiperhidrosis</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group" style="display: flex;">
                                        <div class="checkbox-wrapper-4 ">
                                            <input class="inp-cbx" data-required="true" id="morning" type="checkbox" required>
                                                <label class="cbx" for="morning">
                                                    <span>
                                                        <svg height="10px" width="12px">
                                                            <use xlink:href="#check-4"></use>
                                                        </svg>
                                                    </span>
                                                    <span>
                                                        He leído y acepto los
                                                        <a href="/politica-privacidad.php" target="_blank">
                                                            términos y condiciones
                                                        </a>
                                                        de este sitio web
                                                    </span>
                                                </label>
                                                <svg class="inline-svg" style="display: none;">
                                                    <symbol id="check-4" viewbox="0 0 12 10">
                                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                    </symbol>
                                                </svg>
                                            </input>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button type="submit" class="theme-btn btn-style-five">
                                            <i class="fa fa-angle-double-right"></i>
                                            <span> Enviar mensaje </span>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="row clearfix regala-rosma">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="image"><img style="margin-bottom:30px;" src="images/regala-rosma.webp" alt="Regala Rosma Belleza - Tarjeta regalo Rosma Belleza"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <div class="image"><img style="margin-bottom:30px;" src="images/regala-rosma-2.webp" alt="Regala Rosma Belleza - Tarjeta regalo Rosma Belleza"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->
    
    <?php 
        include 'includes/footer.php';
    ?>

</div>    
<!--End pagewrapper-->

<script src="js/formValidator.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcO39cpAAAAALwkp84G3PcFgVa8OqDUN2La-fDN"></script>

<script defer src="cookies/cookieconsent.js"></script>
<script defer src="cookies/cookieconsent-init.js"></script>
<script src="js/jquery.js"></script> 
<script>
document.addEventListener('DOMContentLoaded', function () {
    var categoriaSelect = document.getElementById('categoria-servicio');
    var serviceGroups = document.querySelectorAll('.service-group');

    function actualizarServicios() {
        var categoria = categoriaSelect.value;

        serviceGroups.forEach(function (group) {
            var select = group.querySelector('select');

            if (group.getAttribute('data-category') === categoria) {
                group.classList.remove('d-none');  // Mostrar
                select.disabled = false;          // Habilitar para que se envíe
                select.required = true;           // Hacerlo obligatorio
            } else {
                group.classList.add('d-none');    // Ocultar
                select.disabled = true;           // Deshabilitar para que NO se envíe
                select.required = false;          // Quitar required para evitar errores
                select.selectedIndex = 0;         // Volver a la opción por defecto
            }
        });
    }

    categoriaSelect.addEventListener('change', actualizarServicios);

    // Por si el navegador rellena algo automático
    actualizarServicios();
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var fechaInput = document.getElementById('fecha-recogida');

        var hoy = new Date();
        hoy.setDate(hoy.getDate() + 1); // sumamos 1 día → mañana

        var manana = hoy.toISOString().split('T')[0];
        fechaInput.setAttribute('min', manana);
    });
</script>


<!--End Revolution Slider-->
<script src="js/jquery-ui.js"></script> 
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.min.js"></script>



</body>
</html>