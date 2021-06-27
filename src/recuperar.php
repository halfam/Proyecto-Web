<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo-header_footer.css">
</head>
<body>
<?php
$path = './';
include_once $path . 'header.php';?>
<div class="header"></div>
<h2>Recuperar contraseña</h2>
<div class="container">
    <div class="regisFrm">
        <form method="post" onsubmit="cambiarContrasenya()">
            <input type="password" name="contraseña" placeholder="Contraseña" required id="Contrasenya1">
            <input type="password" name="confirmar_contraseña" placeholder=" Confirmar contraseña" required id="Contrasenya2">
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="CONTINUE" >
            </div>
        </form>
    </div>
</div>
<script src="js/recuperar.js"></script>

</body>
</html>

