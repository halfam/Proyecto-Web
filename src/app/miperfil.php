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
    <script src="../js/restringir-acceso.js"></script>

</head>

<body>
<?php
$path = '../';
include_once $path.'header.php';?>
<div class="header" style="height: 50px"></div>

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
            <h3 class="titulo" id="nombre_usuario"></h3>

        </div>

        <div class="perfil-usuario-footer">
           <h3 class="datospersonales">Datos Personales <!-- <a class="lapiz" href="edicion.php"><img src="../img/editar.png"></a>--></h3>

            <div class="lista-datos">
                <!--***********************Telefono*************************+-->
                <li class="apartado tlf"><i class="icono fas fa-phone-alt"></i>Teléfono:</li>
                    <li class="tabla_item" id="telefono_usuario"></li>
                <br>

                <!--***********************Correo*****************************-->
                <li class="apartado crreo"><i class="icono fas fa-envelope"></i>Correo:</li>
                <li class="tabla_item" id="correo_usuario"></li>
                <br>

                <!--***********************Direccion*************************+-->
                <li class="apartado direcc"><i class="icono fas fa-map-marker-alt"></i>Dirección:</li>
                <li class="tabla_item" id="direccion_usuario"></li>
                <br>

                <!--***********************Servicios*************************+-->
                <li class="apartado servs"><i class="icono fas fa-calendar-alt"></i>Inicio de los servicios:</li>
                <li class="tabla_item apartados" id="servicios_usuario"></li>

            </div>
    </div>
</section>

<!--Footer -->
<?php include_once $path.'footer.php' ?>
<script src="../js/miperfil.js"></script>
<script>getUserInfo()</script>
</body>
</html>
