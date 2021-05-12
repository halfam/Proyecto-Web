<?php

if (!isset($conn)) $conn = "";

$sql = "SELECT temperatura,humedad,salinidad,luminosidad FROM `mediciones`,`sonda` WHERE mediciones.idSonda = sonda.id AND sonda.id = '$parametrosPath[0]'" ;

$result = mysqli_query($conn, $sql);
$salida = [];
if (mysqli_num_rows($result) > 0)
    while ($fila = mysqli_fetch_assoc($result)){
        array_push($salida,$fila);
    }
else
    http_response_code(404);
header('Content-type: application/json');

echo json_encode($salida);
