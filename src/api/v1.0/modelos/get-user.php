<?php
if (!isset($conn)) $conn = "";
$sql = "SELECT `id`, `nombre`, `rol` FROM  `usuarios`";
$result = mysqli_query($conn, $sql);

$salida = [];

while ($fila = mysqli_fetch_assoc($result)){
    array_push($salida,$fila);
}


header('Content-type: application/json');
echo json_encode($salida);
