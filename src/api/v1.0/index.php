<?php
require_once 'includes/conexion.php';

$estado = $_SERVER["REQUEST_METHOD"];

$uri = $_SERVER['REQUEST_URI'];

$path = explode('v1.0/',parse_url($uri, PHP_URL_PATH))[1];

$parametrosPath = explode('/', $path);

$recurso = array_shift($parametrosPath);

include 'modelos/' . strtolower($estado) . '-' . $recurso . '.php';
