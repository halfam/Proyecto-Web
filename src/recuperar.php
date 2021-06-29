<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reestablecer contraseña | GTI</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
    <!--    <link rel="stylesheet" href="css/nosotros.css">-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
<?php
$path = './';
include_once $path . 'header.php';?>
<div class="header"></div>
<section class="forgotPassword">
<h2 class="titulo-recuperarContra">Recuperar contraseña</h2>
<p class="texto-descriptivo3">Rellene el siguiente formulario si desea reestablecer una nueva conrtaseña para su cuenta.</p>
<div class="contenedor-recuperar">
    <div class="regisFrm">
        <form method="post" onsubmit="cambiarContrasenya()">
            <p class="texto-contra">Contraseña:</p>
            <input class="contraseña-recuperar" type="password" name="contraseña" placeholder="Contraseña" required id="Contrasenya1">
            <p class="texto-contra">Confirmar contraseña:</p>
            <input class="contraseña-recuperar" type="password" name="confirmar_contraseña" placeholder=" Confirmar contraseña" required id="Contrasenya2">
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="Reestablecer" class="boton-enviar-correo">
            </div>
        </form>
    </div>
</div>
<p class="texto-descriptivo4">Al pulsar el botón de reestablecer, se guardará automáticamente como nueva contraseña de la cuenta.</p>
</section>
<script src="js/recuperar.js"></script>
<!--FOOTER -->
<?php include 'footer.php' ?>
</body>
</html>

