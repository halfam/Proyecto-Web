<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <?php include_once 'header.php'?>
    <div class="header" style="height: 70px"></div>
    <section class="contacto-encabezado blur">

        <div class="contacto-textos">
            <h1>¿Cómo podemos ayudarte?</h1>
            <p>Estamos aquí para darte más información, contestar cualquier pregunta que puedas tener, y crear una solución eficiente para tus necesidades.</p>
        </div>

        <img src="img/img-contacto2.png" alt="" id="contacto-img">
    </section>

    <!-- formulario de contacto en html y css -->
    <section class="contacto-formulario blur">
        <div class="formulario">

            <form method="post" action="formulario.php">
                <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">

                <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email">

                <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="¿Cómo podemos ayudarte?"></textarea>

                <input type="submit" class="btn" name="enviar_formulario" value="ENVIAR">

            </form>

        </div>
    </section>


    <!--Footer -->
    <?php include 'footer.php' ?>
</body>

</html>
