<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recuperar Contraseña</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
<!--    <link rel="stylesheet" href="css/nosotros.css">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
<?php include_once 'header.php'?>
<div class="header"></div>
<section class="forgotPassword">
<h1 class="titulo-recuperarContra">Recuperar contraseña</h1>
    <p class="texto-descriptivo1">Si ha olvidado su contraseña deberá rellenar el siguiente formulario para poder reestablecerla.</p>
        <div class="formulario-correo-contra">
        <form method="post" onsubmit="recuperar()" >
            <p class="text-correo-electro">Correo electrónico:</p>
            <input type="email" name="correo" placeholder="correo electrónico" required id="Recuperar_correo">
<!--            <div class="send-button">-->
            <br>
            <input type="submit" name="forgotSubmit" value="Enviar" class="boton-enviar-correo">
        </div>
        </form>
        <p class="texto-descriptivo2">Recibirá inmediatamente un correo  con un enlace para restablecer la contraseña de su cuenta.</p>
    <img class="img-relleno" src="img/Forgot%20password-bro.svg" alt="Olvidar contraseña">
</section>
<script src="js/recuperar.js"></script>
<!--FOOTER -->
<?php include 'footer.php' ?>
</body>
</html>
