<?php

$idSonda = "'".$_POST['idSonda']."'";
$idPosicion = "'".$_POST['idPosicion']."'";
$fecha = "'".date("Y-m-d")."'";
$temperatura = "'".$_POST['temperatura']."'";
$humedad = "'".$_POST['humedad']."'";
$salinidad = "'".$_POST['salinidad']."'";
$luminosidad = "'".$_POST['luminosidad']."'";

$campos = '( `idSonda`,`idPosicion`,`fecha`,`temperatura`,`humedad`,`salinidad`,`luminosidad`)';
$sql = 'INSERT INTO `mediciones` '.$campos.' VALUES ('.$idSonda. ','.$idPosicion. ','.$fecha. ','.$temperatura.','. $humedad . ','.$salinidad.','.$luminosidad.')';

if ((int)$_POST['temperatura']> 30){
    $sqlnotif = "UPDATE `sonda` SET `notificacion`= 'temperatura' WHERE `id` = $idSonda";
    $result = mysqli_query($conn, $sqlnotif);
}
$result = mysqli_query($conn, $sql);
if ($result) {
    $salida['href']='/mediciones'.mysqli_insert_id($conn);

} else {
    http_response_code(422);
    die();
//        echo "No existe el usuario";
}