<?php
if (!isset($conn)) $conn = "";

$id = $parametrosPath[0];

$parametrosBody = json_decode(file_get_contents('php://input'), true);

$campos =[];
foreach ($parametrosBody as $key => $value) {
    $str = "`$key`='$value'";//en key son acentos y en value son comillas
    array_push($campos,$str);
}
$strCampos= join(",", $campos);

$sql = "UPDATE `usuario` SET $strCampos WHERE `id`=$id";

$result = mysqli_query($conn,$sql);
if (!$result){
    http_response_code(404);
    die();
}