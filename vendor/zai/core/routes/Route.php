<?php

namespace Zai\Routes;

use Zai\App;

class Route
{
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($routes)
    {
        $route  = new static;
        require $routes;
        return $route;
    }

    protected function setRoute($requestType, $uri, $action)
    {
        $this->routes[$requestType][$uri] =$action;
    }

    public function get($uri, $action)
    {
        $this->setRoute('GET', $uri, $action);
    }

    public function post($uri, $action)
    {
         $this->setRoute('POST', $uri, $action);
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }
        throw new \Exception('Route not found');
    }

    protected function callAction($controller, $method)
    {
        $controller ="\App\Controllers\\{$controller}";
        $controller = new $controller;
        if (method_exists($controller, $method)) {
            return $controller->$method();
        }

        throw new \Exception(
            "{$controller} does not respond to the {$action} action."
        );
    }
}
