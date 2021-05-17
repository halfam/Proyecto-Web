<?php
require_once '../includes/conexion.php';

$estado = $_SERVER["REQUEST_METHOD"];

$uri = $_SERVER['REQUEST_URI'];

$path = explode('v1.0/',parse_url($uri, PHP_URL_PATH))[1];

$parametrosPath = explode('/', $path);

$recurso = array_shift($parametrosPath);


$idSonda = $_GET["id"];

if (!isset($conn)) $conn = "";

$sql = "SELECT * FROM `mediciones` WHERE `idSonda` ='$idSonda' AND `fecha` < DATE(NOW() ) and `fecha` >=  DATE(NOW() - INTERVAL 1 MONTH)" ;
//CAST( GETDATE() AS Date )


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