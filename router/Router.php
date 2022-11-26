<?php

namespace Router;

use Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;

    public function register($path, $action)
    {
        $this->routes[$path] = $action;
    }

    public function resolve($uri)
    {
        $path  = explode('?', $uri)[0];
        $action = $this->routes[$path];

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
