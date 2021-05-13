<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbNombre = "proyc";

//$serverName = "localhost";
//$userName = "jaltbri_proyecto_web04";
//$password = "Proyecto_webgrupo04";
//$dbNombre = "jaltbri_proyecto_web04";

$conn = mysqli_connect($serverName, $userName, $password, $dbNombre);
if (!$conn) {
    http_response_code(500);
    die("Error: " . mysqli_connect_error());
}
