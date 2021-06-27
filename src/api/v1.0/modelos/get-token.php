<?php
//include_once '../includes/conexion.php';
if (!isset($conn)) $conn = "";
if (!isset($_GET['token']))
    http_response_code(404);
$token = "'".$_GET['token']."'";
//$token = str_replace($token, "/", "");
//echo $token;
$sql = "SELECT idUsuario, token FROM  recuperar_contrasenya where token =". $token;

$result = mysqli_query($conn, $sql);
$salida = [];
//echo $result;
if (mysqli_num_rows($result) > 0)
    while ($fila = mysqli_fetch_assoc($result)) {
        array_push($salida, $fila);
    }
else
    http_response_code(404);


header('Content-type: application/json');

echo json_encode($salida);
