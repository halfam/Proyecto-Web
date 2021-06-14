<?php

$nombre = "'".$_POST['nombre']."'";
$contrasenya = "'".$_POST['contrasenya']."'";
$correo = "'".$_POST['correo']."'";
$rol = "'".$_POST['rol']."'";
$fechaAlta = date("Y-m-d");
$Apodo = "'".$_POST['Apodo']."'";

$fotoPerfil = "''";
if (isset($_POST['fotoPerfil'])) $fotoPerfil = "'". $_POST['fotoPerfil'] ."'";

$telefono = "''";
if (isset($_POST['telefono'])) $telefono = "'". $_POST['telefono'] ."'";

$Direccion = "''";
if (isset($_POST['Direccion'])) $Direccion = "'". $_POST['Direccion'] ."'";

$campos = '( `nombre`,`contrasenya`,`correo`,`rol`,`fechaAlta`,`fotoPerfil`,`telefono`,`Apodo`,`Direccion`)';

include 'includes/conexion.php';
$sql = 'INSERT INTO `usuario` '.$campos.' VALUES ('.$nombre. ','.$contrasenya. ','.$correo. ','.$rol.','.' "2021-05-06" '. ','.$fotoPerfil.','.$telefono. ','.$Apodo. ','.$Direccion. ')';

$result = mysqli_query($conn, $sql);
if ($result) {
    $salida['href']='/vendedores'.mysqli_insert_id($conn);

} else {
    http_response_code(422);
    die();
//        echo "No existe el usuario";
}
