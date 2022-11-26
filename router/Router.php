<?php

namespace Router;

use Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;

    public function register($path, $action, $HTTPverb): void
    {
        $this->routes[$HTTPverb][$path] = $action;
    }

    public function get($path, $action)
    {
        $this->register($path, $action, 'GET');
    }

    public function post($path, $action)
    {
        $this->register($path, $action, 'POST');
    }

    public function resolve($uri, $HTTPverb)
    {
        $path  = explode('?', $uri)[0];
        $action = $this->routes[$HTTPverb][$path];

        if (is_callable($action)) {
            return $action();
        }

        if (is_array($action)) {
            [$className, $method] = $action;
            if (class_exists($className) && method_exists($className, $method)) {
                $class = new $className();
                return call_user_func_array([$class, $method], []);
            }
        }
        throw new RouteNotFoundException();
    }
}
