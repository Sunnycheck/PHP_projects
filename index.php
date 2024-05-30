<?php
//echo 'ls';


require_once "Request.php";
require_once "Router.php";
require_once "Response.php";
require_once "Methods.php";
define('APP_DIR', __DIR__ . 'OOP/Task20/');
define('CONTROLLER_DIR', __DIR__ . 'OOP/Task20/');

$router = new Router();

$router->addRoute('/', [
    'get' => 'Methods/greet',


]);
$router->addRoute('/sum', [
    'post' => 'Methods/sum',


]);
$router->addRoute('/result', [
    'post' => 'Methods/result',


]);





$router->processRoute(Request::getURL(), Request::getMethod());







