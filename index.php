<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GTI Tu Campo En Cualquier Sitio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <link rel="stylesheet" href="css/estilo-header.css">
        <link rel="stylesheet" href="css/estilo-landingpage.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/iniciosesion.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="css/servicios.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php include_once 'header.php'?>

        <div class="fondo blur" id="fondo">
            <!-- texto de reclamo-->
            <div class="texto-encabezado">

                <h1>Tu campo desde cualquier sitio</h1>
                <p class="texto_relleno">Consulta los datos de tu campo desde cualquier lugar de forma fácil y sencilla.</p>
            </div>

            <!-- texto de reclamo-->
            <div class="promocion">
                <h2 class="info">¡MANTENTE INFORMADO!</h2>
                <a href="contacto.php"><button type="button" class="boton_personalizado">CONTÁCTANOS</button></a>
            </div>
        </div>
        <!-- inicio sección sensores-->

        <section class="sensores blur">
            <h2 class="titulo">Sensores</h2>
            <div class="display">
                <div class="divisiones">
                <img src="img/humedad.svg" alt="humedad" class="sens">
                <p class="text-sensores"><b>Humedad</b></p>
                    <p>Se trasmite la humedad en procetaje</p>
                </div>
                <div class="divisiones">
                <img src="img/temperatura.svg" alt="temperatura" class="sens">
                <p class="text-sensores"><b>Temperatura</b></p>
                    <p>La temperatura se muestra en grados centígrados</p>
                </div>
            </div>
            <div class="display">
                <div class="divisiones">
                    <img src="img/salinidad.svg" alt="salinidad" class="sens">
                    <p class="text-sensores"><b>Salinidad</b></p>
                    <p>Muestra el porcentaje de salinidad de cualquier fluido</p>
                </div>
                <div class="divisiones">
                    <img src="img/luz.svg" alt="luz" class="sens">
                    <p class="text-sensores"><b>Luminosidad</b></p>
                    <p>Muestra el porcentaje de luminosidad en cualquier momento del dia</p>
                </div>
            </div>
        </section>

        <section class="adquirir_servicios blur">
            <h2 class="titulo">¿Cómo adquirir nuestro servicio?</h2>
            <div class="contacto">
                <h4><b>CONTACTO</b></h4>
                <img src="img/contacto.svg" alt="contacto" class="img1">
                <p class="text">Usted debe de ponerse en contacto con la empresa mediante el formulario de contacto.</p>
            </div>
            <div class="espera">
                <h4><b>ESPERA</b></h4>
                <img src="img/email.svg" alt="espera" class="img2">
                <p class="text">Deberá esperar a que se pongan en contacto con usted.</p>
            </div>
            <div class="cita">
                <h4><b>CITA</b></h4>
                <img src="img/cita.svg" alt="cita" class="img3">
                <p class="text">Se concretará una cita, para concretar cuáles son los sensores necesarios para el campo en cuestión.</p>
            </div>
            <div class="instalacion">
                <h4><b>INSTALACIÓN</b></h4>
                <img src="img/instalation.svg" alt="instalación" class="img4">
                <p class="text">El profesional realizará la instalación de la sonda, con los sensores necesarios.</p>
            </div>
            <div class="credenciales">
                <h4><b>CREDENCIALES</b></h4>
                <img src="img/password.svg" alt="credenciales" class="img5">
                <p class="text">Finalmente, se le facilitará el usuario y la contraseña, para que pueda consultar los datos de su campo cuando sea necesario.</p>
            </div>
        </section>
            <?php include_once 'footer.php';?>
    </body>
</html>