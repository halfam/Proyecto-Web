<?php
include_once '../includes/conexion.php';

$idSonda = $_GET["id"];

$tiempo = "1 MONTH";
if (isset($_GET["tiempo"]))
    switch ($_GET["tiempo"]) {
        case "1":
            $tiempo = "1 DAY";
            break;
        case "7":
            $tiempo = "1 WEEK";
            break;
        case "30":
            $tiempo = "1 MONTH";
            break;
        case "365":
            $tiempo = "1 YEAR";
            break;
    }

if (!isset($conn)) $conn = "";

$sql = "SELECT * FROM `mediciones` WHERE `idSonda` ='$idSonda' AND `fecha` < DATE(NOW() ) and `fecha` >=  DATE(NOW() - INTERVAL " . $tiempo . ")";
if (isset($_GET["ultima"])) {
    $sql = "SELECT temperatura,humedad,salinidad,luminosidad FROM `mediciones` WHERE mediciones.idSonda = '$idSonda' ORDER BY fecha DESC";
}


$result = mysqli_query($conn, $sql);
$salida = [];
if (mysqli_num_rows($result) > 0)
    while ($fila = mysqli_fetch_assoc($result)) {
        array_push($salida, $fila);
    }
else
    http_response_code(404);
header('Content-type: application/json');

echo json_encode($salida);
