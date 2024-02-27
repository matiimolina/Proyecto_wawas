<?php

require_once 'app/controllers/productos.controller.php';
require_once 'app/controllers/login.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}
$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new productosController();
        $controller->showProductos();
        break;
    case 'login':
        $controller = new loginController();
        $controller->showLogin();
        break;
    case 'autenticar':
        $controller = new loginController();
        $controller->autenticar();
        break;
    case 'logout':
        $controller = new loginController();
        $controller->logout();
        break;
}