<?php
session_start();
if (isset($_SESSION['rol']) && $_SESSION['rol'] !== ''){
    echo json_encode($_SESSION);
    http_response_code(200);
}else{
    http_response_code(401);
    session_destroy();
    die();
}
