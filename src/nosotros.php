<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nosotros</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
<?php include_once 'header.php'?>
<div class="header"></div>

<!------------------------------------------INICIO SECCION IMAGEN Y TITULO--------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<section class="nosotros-encabezado blur">
    <div class="nosotros-principal">
        <div class="dentro"><h1>Sobre Nosotros</h1></div>
        <img src="img/headermovil.png" alt="nosotros-img" id="nosotros-img">
        <img src="img/headertablet.png" alt="nosotros-img" id="nosotros-img-tablet">
        <img src="img/headermedio.png" alt="nosotros-img" id="nosotros-img-tabletpc">
        <img src="img/headerpc.png" alt="nosotros-img" id="nosotros-img-pc">
    </div>
</section>
<!---------------------------------------------FIN SECCION IMAGEN Y TITULO--------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->

<!----------------------------------------------INICIO SECCION PREGUNTAS----------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<section class="nosotros-informacion blur">

    <!---------------------------------------------------------->
    <!--QUIENES SOMOS-->
    <div class="quienes-somos">
    <h2>¿Quiénes Somos?</h2>
    <h4>
        Somos una empresa emergente de Ingeniería orientada al diseño y fabricación de soluciones de
        monitorización y control de datos de terrenos agrícolas.
        <br>
        <br>
        Estamos especializados en la creación de sensores con conexión a internet y ofrecemos
        la monitorización completa de datos como el nivel de salinidad del agua o la
        temperatura en el terreno, consiguiendo ser la empresa con la mayor proporción de datos
        en cuanto a la monitorización de campos.
    </h4>
    </div>
    <!---------------------------------------------------------->

    <!---------------------------------------------------------->
    <!--MODELO DE NEGOCIO-->
    <div class="negocio">
    <h2>Modelo De Negocio</h2>
    <h4>
        Como empresa, hemos definido nuestro modelo de negocio en tres simples pasos.
        <br>
        <br>
        1-. Como cliente, contactas con nosotros a través de un formulario
        con el fin concertar una cita para ver los terrenos que deseas monitorizar.
        <br>
        <br>
        2-. Avistamos todo el terreno, vemos la cantidad y posiciones de
        sensores óptimas y concertamos el valor total.
        <br>
        <br>
        3-. Al realizar el pago, colocamos los sensores acordados y ofrecemos
        las claves necesarias para el acceso a la página web donde se mostrarán todos los
        datos mostrados por los sensores.
    </h4>
        <img class="modelonegocio" src="img/modelonegocio.jpg" alt="modelo_de_negocio">
        <img class="modelonegociotablet" src="img/modelonegociotablet.png" alt="modelo_de_negocio">
        <img class="modelonegociopc" src="img/modelonegociopc.png" alt="modelo_de_negocio">
    </div>
    <!---------------------------------------------------------->

    <!---------------------------------------------------------->
    <!--UBICACION DE LAS OFICINAS-->
    <div class="ubicacion">
    <h2>¿Dónde Encontrarnos?</h2>
    <h4>Puedes encontrar nuestras oficinas en:
        <br>
        <br>
        C/ Paranimf, 1, Edificio F, 46730 Grau de Gandia, Valencia.
    </h4>
    </div>
    <!---------------------------------------------------------->

    <!---------------------------------------------------------->
    <!-- MAPA GOOGLE MAPS -->
    <div class="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.8242561283387!2d-0.1683236849134145!3d38.99650714870159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd61c2a3069621fd%3A0xdb8ad87b84df4b24!2sUPV%20-%20Escuela%20Polit%C3%A9cnica%20Superior%20de%20Gandia%20EPSG!5e0!3m2!1ses!2ses!4v1619303110914!5m2!1ses!2ses"
            width="90%" height="250" style="border:1;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!---------------------------------------------------------->

    <!----------------------------------------------FIN SECCION PREGUNTAS-------------------------------------------------->
    <!--------------------------------------------------------------------------------------------------------------------->
</section>

<!--FOOTER -->
<?php include 'footer.php' ?>
</body>
</html>


