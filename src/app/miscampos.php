<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis campos</title>
<!--    <link rel="stylesheet" href="../css/miscampos.css">-->
    <link rel="stylesheet" href="../css/estilo-header_footer.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="../js/restringir-acceso.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">

    <!--aquí va la apikey en las 3 rayas src="https://maps.googleapis.com/maps/api/js?key=___&callback=initMap"-->
</head>
<body>

<?php
$path = "../";
include_once $path.'header.php';?>
<section id="mis-campos">

    <input type="search" list="parcela" placeholder=" Buscar..." id="buscar" onChange="hemosclicado(this)">
    <datalist id="parcela" name="parcela" list="parcelas">
    </datalist>
    <div id="map">

    </div>


</section>
<?php include_once $path.'footer.php' ?>

<script
        src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer>
</script>

<script src="../js/controlMapa.js"></script>
</body>
</html>