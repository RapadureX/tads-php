<?php
require __DIR__ . "\..\autoload.php";

$path = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($path, $routes)) {
    http_response_code(404);
    exit();
}

$controller = new $routes[$path]();
$controller->request();
