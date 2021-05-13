<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mi Perfil</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="../css/estilo-header_footer.css">
    <link rel="stylesheet" href="../css/MiPerfil.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">

</head>

<body>
<?php
$path = '../';
include_once $path.'header.php';?>

<section class=" blur seccion-perfil-usuario">
    <div class="perfil-usuario-header">
        <div class="perfil-usuario-portada">
            <div class="perfil-usuario-avatar">
                <img src="../img/perfil.png" alt="img-avatar" id="foto">
<!--                <button type="button" class="boton-avatar" onclick="cargarImg()">-->
<!--                    <input type="file" name="foto" id="cargarImagen" hidden onchange="changeIMG(this.files[0])"/>-->
<!--                    <i class="far fa-image"></i>-->
<!--                </button>-->
            </div>

        </div>
    </div>
    <div class="perfil-usuario-body">
        <div class="perfil-usuario-bio">
            <h3 class="titulo">Pepe Fernández</h3>
<!--            <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, incidunt labore minima molestiae mollitia pariatur quia quo quod! Labore libero </p>-->
        </div>

        <div class="perfil-usuario-footer">
            <h3 class="datospersonales">Datos Personales</h3>
            <ul class="lista-datos">
                <li><i class="icono fas fa-user"></i>Nombre y apellidos:</li>
                <li><i class="icono fas fa-phone-alt"></i>Teléfono:</li>
                <li><i class="icono fas fa-envelope"></i>Correo:</li>
                <li><i class="icono fas fa-map-marker-alt"></i>Dirección:</li>
            </ul>
            <ul class="lista-datos">
                <li><i class="icono fas fa-calendar-alt"></i>Inicio de los servicios:</li>
                <li><i class="icono fas fa-tree"></i>Nº de parcerlas:</li>
            </ul>
        </div>
    </div>
</section>

<!--Footer -->
<?php include $path.'footer.php' ?>
</body>
</html>
