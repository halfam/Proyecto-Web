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
<h2>Recuperar contraseña</h2>
<div class="container">
    <div class="regisFrm">
        <form method="post" onsubmit="recuperar()" >
            <input type="email" name="correo" placeholder="correo" required id="Recuperar_correo">
<!--            <div class="send-button">-->
            <br>
            <input type="submit" name="forgotSubmit" value="CONTINUE" >
<!--            </div>-->
        </form>
    </div>
</div>
<script src="js/recuperar.js"></script>
<!--FOOTER -->
<?php include 'footer.php' ?>
</body>
</html>
