<?php
session_start();
unset($_SESSION['rol']);
setcookie('PHPSESSID', '', time() - 86400, '/folder/');
session_destroy();
http_response_code(200);
