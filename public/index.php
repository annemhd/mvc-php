<?php

use Exceptions\RouteNotFoundException;
use Router\Router;
use Source\App;

require '../vendor/autoload.php';
define('BASE_VIEW_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router($_SERVER['REQUEST_URI']);

$router->register('/', ['Controllers\HomeController', 'index']);

(new App($router, $_SERVER['REQUEST_URI']))->run();

// $router->register('/contact', function () {
//     return 'Contact';
// });
