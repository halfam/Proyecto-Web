<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GTI Tu Campo En Cualquier Sitio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
    <link rel="stylesheet" href="css/estilo-index_servicios.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap"
          rel="stylesheet">

</head>

<!-- --------------------------------------------------------------------------------------------------------------------- -->
<body>

<?php include_once 'header.php' ?>

<!-- Fin Botón scroll down-->
<div class="fondo blur">
    <!-- texto de reclamo-->
    <div class="texto-encabezado">
        <h1>Tu campo desde cualquier sitio</h1>
        <p class="texto_relleno">Consulta los datos de tu campo desde cualquier lugar de forma fácil y sencilla.</p>
    </div>

    <!-- --------------------------------------------------------------------------------------------------- -->

    <!-- Call To Action-->
    <div class="promocion">
        <h2 class="info">¡MANTENTE INFORMADO!</h2>
        <a href="contacto.php">
            <button type="button" class="boton_personalizado">CONTÁCTANOS</button>
        </a>
    </div>
</div>
<div class="finscroll" id="sensores"></div>
<!-- --------------------------------------------------------------------------------------------------------------------- -->

<!-- Botón scroll down Landing Page-->
<a class="desliz scroll-down blur" id="flecha" href="#sensores"></a>


<!-- --------------------------------------------------------------------------------------------------------------------- -->

<!-- Sección Servicios-->
<section class="servicios-encabezado blur servicios-principal" id="encabezado_servicios">
    <h1 class="dentro">Servicios</h1>
    <img src="img/servicios.jpg" alt="servicios-img" id="servicios-img">
    <img src="img/servicios1.jpg" alt="servicios-img" id="servicios-img1">
</section>

<!-- Sección sensores-->
<section class="sensores blur" id="sensores">
    <h2 class="titulo">Nuestros Sensores</h2>

    <!-- Humedad -->
    <div class="contenedor-sensores">
        <div class="display">
            <div class="divisiones">
                <img src="img/humedad.svg" alt="humedad" class="sens">
                <p class="text-sensores"><b>Humedad</b></p>
                <p>Muestra el porcentaje de humedad del ambiente.</p>
            </div>

            <!-- Temperatura -->
            <div class="divisiones">
                <img src="img/temperatura.svg" alt="temperatura" class="sens">
                <p class="text-sensores"><b>Temperatura</b></p>
                <p>Presenta la temperatura del ambiente en grados centígrados (ºC).</p>
            </div>
        </div>

        <div class="display">
            <!-- Salinidad -->
            <div class="divisiones">
                <img src="img/salinidad.svg" alt="salinidad" class="sens">
                <p class="text-sensores"><b>Salinidad</b></p>
                <p>Representa la concentración de sal en cualquier tipo de fluido.</p>
            </div>

            <!-- Luminosidad -->
            <div class="divisiones">
                <img src="img/luz.svg" alt="luz" class="sens">
                <p class="text-sensores"><b>Luminosidad</b></p>
                <p>Obtiene el porcentaje de luminosidad en cualquier momento del día.</p>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------------------------------------------------------------------------------- -->
</section>

<!-- Sección Adquirir Servicio -->
<section class="adquirir_servicios blur" id="adquirir_servicios">

    <h2 class="titulo">¿Cómo adquirir nuestro servicio?</h2>
    <!-- CONTÁCTANOS -->
    <div class="contenedor-nuestro">
        <div class="contenedor-servicios">
            <h4><b>1-. CONTÁCTANOS</b></h4>
            <img src="img/contacto.svg" alt="contacto" class="img-guia">
            <p class="text">Póngase en contacto con nosotros mediante el formulario de contacto.</p>
        </div>

        <!--ESPERA NUESTRA RESPUESTA-->
        <div class="contenedor-servicios">
            <h4><b>2-. ESPERA NUESTRA RESPUESTA</b></h4>
            <img src="img/email.svg" alt="espera" class="img-guia">
            <p class="text">Nos pondremos en contacto contigo en menos de 24/48h.</p>
        </div>

        <!--SELECCIONA LA FECHA DE REUNIÓN-->
        <div class="contenedor-servicios">
            <h4><b>3-. SELECCIONA LA FECHA DE REUNIÓN</b></h4>
            <img src="img/cita.svg" alt="cita" class="img-guia">
            <p class="text">Elegiremos una fecha que se adapte a tu horario para poder revisar tu terreno y
                elegir los sensores necesarios.</p>
        </div>


        <!--RECIBE LA INSTALACIÓN-->
        <div class="contenedor-servicios">
            <h4><b>4-. RECIBE LA INSTALACIÓN</b></h4>
            <img src="img/instalation.svg" alt="instalación" class="img-guia">
            <p class="text">Una vez acordados los sensores necesarios, uno de nuestros profesionales
                realizará la instalación.</p>
        </div>

        <!--ACCEDE A LA PÁGINA WEB-->
        <div class="contenedor-servicios">
            <h4><b>5-. ACCEDE A LA PÁGINA WEB</b></h4>
            <img src="img/password.svg" alt="credenciales" class="img-guia">
            <p class="text">Finalmente, te otorgaremos tus credenciales para poder consultar en la web todos los
                datos de tu terreno.</p>
        </div>
    </div>
    <h4 class="sencillo"><b>¡ASÍ DE SENCILLO!</b></h4>
</section>

<!--¡ASÍ DE SENCILLO!-->
<section class="masinfo blur">
    <p>Si deseas conocer más información o adquirir nuestro servicio, no dudes
        en contactarnos mediante nuestro:</p> <a href="contacto.php" class="a">Formulario
        de contacto</a>
</section>
</section>


<!-- --------------------------------------------------------------------------------------------------------------------- -->
<?php include_once 'footer.php'; ?>

</body>