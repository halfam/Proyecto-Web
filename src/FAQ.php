<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Preguntas Frecuentes</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
<!--    <link rel="stylesheet" href="css/FAQ.css">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
<?php include_once 'header.php'?>
<div class="header"></div>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- Sección imagen y titulo Nosotros -->
<section class="FAQ-encabezado blur">

    <div class="FAQ-principal">
        <div class="dentroFAQ"><h1>Preguntas Frecuentes</h1></div>
        <img src="img/FAQ.jpg" alt="Imagen FAQ" id="FAQ-img">
        <img src="img/preguntaspc.png" alt="Imagen FAQ" id="FAQ-imgpc">

    </div>
</section>
<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- Inicio sección de las preguntas -->
<section class="FAQ-informacion blur">

    <div class="preguntas-acordeon">

        <!-- Pregunta 1 -->
        <div class="preguntas-respuestas">
            <div class="preguntas">

                <!--  Pregunta   -->
                <h2 class="titulopreguntas">¿Qué productos vendemos?</h2>
                <img src="img/icon-arrow-down.svg" class="flechaFAQ">
            </div>

            <!--  Respuesta   -->
            <div class="respuestas">
                Como empresa, hemos planteado un nuevo método de venta para el sector agrícola, y por eso que hemos decidido no vender
                productos como tal, sino un servicio completo. Esto significa que lo que vendemos es el proceso completo desde
                que una persona se pone en contacto con nosotros hasta que ya hemos resuelto todo.
            </div>
        </div>

<!--------------------------------------------------------------------------------------------------------------------------->

        <!-- Pregunta 2 -->
        <div class="preguntas-respuestas">
            <div class="preguntas">

                <!--  Pregunta   -->
                <h2 class="titulopreguntas">¿Qué abarca nuestro servicio?</h2>
                <img src="img/icon-arrow-down.svg" class="flechaFAQ">
            </div>

            <!--  Respuesta   -->
            <div class="respuestas">
                Nuestra intención con este nuevo método de venta es que el cliente esté tranquilo en todo momento a la hora de
                ver los datos de su campo, por lo que el servicio que ofrecemos se puede resumir en tres simples pasos.
                <br>
                <br>
                1-. Nos desplazamos hasta el terreno que se desea monitorizar para revisarlo y ver los sensores que son necesarios
                utilizar.
                <br>
                <br>
                2-. Instalamos los sensores acordados en las posiciones óptimas del terreno.
                <br>
                <br>
                3-. Le entregamos las credenciales para acceder a nuestra apliación web y poder ver los datos de su terreno en
                tiempo real.
            </div>
        </div>


<!--------------------------------------------------------------------------------------------------------------------------->

        <!-- Pregunta 3 -->
        <div class="preguntas-respuestas">
            <div class="preguntas">

                <!--  Pregunta   -->
                <h2 class="titulopreguntas">¿Qué datos son capaces de ofrecer las sondas?</h2>
                <img src="img/icon-arrow-down.svg" class="flechaFAQ">
            </div>

            <!--  Respuesta   -->
            <div class="respuestas">
                Hemos desarrollado una sonda capaz de medir cuatro tipos de datos distintos al mismo tiempo, siendo una de las
                sondas más completas del mercado. Podemos obtener datos del porcentaje de humedad del ambiente, de la cantidad de
                luz que recibe el terreno, su temperatura y, por último, la cantidad de sal presente de los fluidos como el agua.
            </div>
        </div>

<!--------------------------------------------------------------------------------------------------------------------------->

        <!-- Pregunta 4 -->
        <div class="preguntas-respuestas">
            <div class="preguntas">

                <!--  Pregunta   -->
                <h2 class="titulopreguntas">¿Qué datos podemos visualizar en la web?</h2>
                <img src="img/icon-arrow-down.svg" class="flechaFAQ">
            </div>

            <!--  Respuesta   -->
            <div class="respuestas">
                Una vez recibidas las credenciales, en la aplicaión web podrás visualizar un mapa donde se mostrarán todas
                las parcelas con sus respectivas sondas, gráficos de datos y páginas de personalización entre otras.
            </div>
        </div>
<!--------------------------------------------------------------------------------------------------------------------------->


    <div class="preguntafinal">
        <h2>¿Tu pregunta no aparece aquí?</h2>
        <p>
            No te preocupes, puedes hacernos tu pregunta a través de nuestro <a class="ccto" href="contacto.php">Formulario de Contacto</a>
            y te responderemos lo antes posible.
        </p>
    </div>

    </div>
</section>

<script src="js/FAQarrow.js"></script>
<!--Footer -->
<?php include 'footer.php' ?>
</body>
</html>


