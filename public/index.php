<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Source\App;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/', ['Controllers\HomeController', 'index']);
$router->post('/post', ['Controllers\PostController', 'all']);

(new App($router, ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]))->run();
