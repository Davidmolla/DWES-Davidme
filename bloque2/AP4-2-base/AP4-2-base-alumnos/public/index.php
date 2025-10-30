<?php
require_once __DIR__ . '/../vendor/autoload.php';

use AP42\Controllers\MainController;
use AP42\Controllers\UserController;
use AP42\Controllers\OperationController;

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
    case '/main':
        (new MainController())->index();
        break;
    case '/usuarios':
        (new UserController())->list();
        break;
    case '/operaciones':
        (new OperationController())->list();
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
}
