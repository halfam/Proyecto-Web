<?php
//if ($_SESSION['recordar'])
//session_start([
//    'cookie_lifetime' => 86400,
//]);
session_start();


if (isset($_SESSION['rol']) && $_SESSION['rol'] !== ''){
    echo json_encode($_SESSION);
    http_response_code(200);
}else{

    http_response_code(401);
    setcookie( session_name(), "", time()-3600, "/" );
//    session_abort();
    session_destroy();
    die();
}
