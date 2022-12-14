<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Source\App;

require '../vendor/autoload.php';

define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/', ['Controllers\HomeController', 'index']);

$router->get('/user', ['Controllers\UserController', 'login']);
$router->get('/dashboard', ['Controllers\UserController', 'dashboard']);
$router->post('/dashboard', ['Controllers\UserController', 'dashboard']);

$router->post('/post', ['Controllers\PostController', 'index']);
$router->post('/insert', ['Controllers\PostController', 'insert']);
$router->post('/update', ['Controllers\PostController', 'update']);
$router->post('/delete', ['Controllers\PostController', 'delete']);

$router->post('/comment', ['Controllers\ComController', 'comment']);

(new App($router, ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']]))->run();
