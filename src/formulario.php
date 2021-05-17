<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$mensajeFormateado = $nombre. " con correo electronico: ".$email. " envia el siguiente mensaje: ".$mensaje;

echo $mensajeFormateado;

if(@mail('gtigrupo04@gmail.com', 'Contáctanos', $mensajeFormateado)){
    echo " mail enviado";
}else{
    echo " mail no enviado";
}


header("Location: contacto.php");

?>