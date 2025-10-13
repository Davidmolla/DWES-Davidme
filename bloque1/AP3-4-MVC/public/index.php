<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Router;
use App\Core\Request;

$request = new Request();
$router = new Router();
$router->handle($request);
?>
