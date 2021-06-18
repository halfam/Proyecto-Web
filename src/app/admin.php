<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel de Control</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="../css/estilo-header_footer.css">
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600;800&family=Varela+Round&display=swap" rel="stylesheet">
    <script src="../js/restringir-acceso.js"></script>

</head>

<body>
<?php
$path = '../';
include_once $path.'header.php';?>
<div class="header"></div>

<!-----------------------------------------------INICIO SECCION PERFIL------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<section class=" blur seccion-perfil-usuario">
    <!---------------------------------------------------------->
    <!--PARTE SUPERIOR, FOTO PERFIL Y VOLVER-->
    <div class="perfil-usuario-header">
        <div class="perfil-usuario-portada">
            <a href="<?php echo $path?>index.php" onclick="history.go(-1);return false;"><img class="volver" src="../img/volvermiperfil.png" alt="Volver"></a>
            <div class="perfil-usuario-avatar">
                <img src="../img/perfil.png" alt="img-avatar" id="foto">
            </div>
        </div>
    </div>
    <!---------------------------------------------------------->

    <!---------------------------------------------------------->
    <!--PARTE MEDIA E INFERIOR INFORMACIÓN USUARIO-->
    <div class="perfil-usuario-body">

        <div class="perfil-usuario-bio">
            <table class="tabla" id="tablaUsuarios">
                <caption class="caption">Panel de Control</caption>
                <thead>
                 <tr id="titulos">
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Apodo</th>
                        <th>Contraseña</th>
                        <th>Correo</th>
                        <th>Acción</th>
                </tr>
                </thead>

                <tbody id="tablaBody">
<!--                <tr>-->
<!--                        <td data-titulo="Nombre:"></td>-->
<!--                        <td data-titulo="Rol:">Usuario</td>-->
<!--                        <td data-titulo="Apodo:">Federico</td>-->
<!--                        <td data-titulo="Contraseña:">XXXXXXX</td>-->
<!--                        <td data-titulo="Correo:">federico@gmail.com</td>-->
<!--                        <td class="modificaciones">-->
<!--                            <a href="#">Editar</a> /-->
<!--                            <a href="#">Eliminar</a>-->
<!--                        </td>-->
<!--                </tr>-->
<!---->
<!--                <tr>-->
<!--                        <td data-titulo="Nombre:" id="nombre_usuario"></td>-->
<!--                        <td data-titulo="Rol:">Usuario</td>-->
<!--                        <td data-titulo="Apodo:">Antoini</td>-->
<!--                        <td data-titulo="Contraseña:">XXXXXXX</td>-->
<!--                        <td data-titulo="Correo:">anotni@gmail.com</td>-->
<!--                        <td class="modificaciones">-->
<!--                            <a href="#">Editar</a> /-->
<!--                            <a href="#">Eliminar</a>-->
<!--                        </td>-->
<!--                </tr>-->
                </tbody>
            </table>
            <button onclick="crearUsuario()" class="crearusuarioadmin">Crear usuario</button>
        </div>
    <!---------------------------------------------------------->
        </div>
        <!---------------------------------------------------------->

</section>
<!--------------------------------------------------FIN SECCION PERFIL------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------------->
<!--Footer -->
<?php include_once $path.'footer.php' ?>
<script src="../js/miperfil.js"></script>
<script>getUserInfo()</script>
</body>
</html>
