<?php
if (!isset($conn)) $conn = "";
//echo $conn;

$sql = "SELECT `latitud`, `longitud`,parcela.nombre, parcela.color, parcela.id FROM `vertices`, `parcela`, `parcelas_usuarios` WHERE vertices.idParcela = parcela.id AND parcela.id = parcelas_usuarios.idParcela AND parcelas_usuarios.idUsuario ='$parametrosPath[0]'" ;

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
