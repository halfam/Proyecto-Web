<?php

if (!isset($conn)) $conn = "";

$sql = "SELECT sonda.id, posiciones.latitud, posiciones.longitud FROM  `parcela`, `posiciones`, `sonda`, `sondas_posiciones` WHERE posiciones.idParcela = '$parametrosPath[0]' AND posiciones.id = sondas_posiciones.idPosicion AND sondas_posiciones.idSonda = sonda.id GROUP BY sonda.id" ;

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
