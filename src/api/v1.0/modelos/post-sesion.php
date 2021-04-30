<?php

$nombre = $_POST['nombre'];
$contrasenya = $_POST['contrasenya'];


include 'includes/conexion.php';
$sql = "SELECT `id`,`nombre`,`rol` FROM `usuario` WHERE `nombre` = '$nombre' AND `contrasenya` = '$contrasenya'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    
    while ($fila = mysqli_fetch_assoc($result)) {
	$respuesta = [];
        $respuesta['id'] = $fila['id'];
        $respuesta['nombre'] = $fila['nombre'];
        $respuesta['rol'] = $fila['rol'];

        $_SESSION['id'] = $fila['id'];
        $_SESSION['nombre'] = $fila['nombre'];
        $_SESSION['rol'] = $fila['rol'];
        header('Content-Type: application/json');
        echo json_encode($respuesta);
        http_response_code(200);
    }

} else {
    http_response_code(401);
    die();
//        echo "No existe el usuario";
}
