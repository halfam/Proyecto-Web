<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contáctanos</title>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/estilo-header_footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
    <?php include_once 'header.php'?>
    <div class="header" ></div>

    <!-- Para que el fondo se vea borroso al iniciar sesión -->
    <div class="blur">
        <div class="contacto_princ">
            <div class="dentro">
                <h1>¿Cómo podemos ayudarte?</h1>
            </div>
            <img src="img/contacto-img-encabezado.png" alt="img-contacto" id="contacto-img-princ">
            <img src="img/contacto-img-encabezado2.png" alt="img-contacto" id="contacto-img-princ2">
        </div>

        <!-- ------------------------------------------------------------------------------------------------------------------------ -->
        <!-- formulario de contacto en html y css -->
        <section class="contacto-formulario">
            <div class="contenedor-flex">
                <div class="texto-pc">
                    <h1>¿Quieres un producto personalizado?</h1>
                    <br>
                    Nosotros queremos adaptarnos a las necesidades de cada cliente, así que si tienes cualquier duda o necesidad no dudes en contactar con nosotros y explicárnosla. Le hablaremos de vuelta y concertaremos una cita para atenderle personalmente si fuera necesario.
                    <br>
                    <br>
                    <br>
                    <br>
                    *Quizás le interese ver las <a href="FAQ.php">preguntas frecuentes</a> antes de contactar con nosotros.
                </div>
                <div class="verticalLine"></div>
                <div class="formulario">
                    <div class="contacto-textos">
                        <h1>¿Cómo podemos ayudarte?</h1>
                        <p>Estamos aquí para darte más información, contestar cualquier pregunta que puedas tener, y crear una solución eficiente para tus necesidades.</p>
                    </div>

                    <form id="formulario_txt" method="post" action="enviarcorreo.php">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">

                        <label>Email:</label>
                        <input type="email" name="email" id="email" required="obligatorio" placeholder="Escribe tu Email" >

                        <label>Mensaje:</label>
                        <textarea name="mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="¿Cómo podemos ayudarte?"></textarea>

                        <input type="submit" class="btn txt" name="enviar_formulario" value="Enviar">

                    </form>
                    <script>
                        function f() {
                            document.getElementById("formulario_txt").reset()
                        }
                        f()

                    </script>
                </div>

            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------------ -->

        <!-- ------------------------------------------------------------------------------------------------------------------------ -->
        <!-- Imagen elipse después de formulario -->
        <img src="img/img-contacto-elispse.png" alt="" id="contacto-elipse">

        <!-- Segunda parte de la página -->
        <section class="contacto-encabezado">
            <div class="contacto-textos-2">
                <p>Nos pondremos en contacto con usted en menos de 48 horas laborales.</p>
            </div>
            <img src="img/img-contacto.png" alt="" id="contacto-img">
        </section>
        <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    </div>
    <!--Footer -->
    <?php include 'footer.php' ?>
</body>

</html>
