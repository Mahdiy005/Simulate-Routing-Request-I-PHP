<?php

declare(strict_types=1);

namespace App;

use App\Exception\PathNotFoundException;
use App\Exception\RouteNotFoundException;

class Routes
{
    protected array $routes = [];
    public function addRoute(string $method, string $url, callable $target): self
    {
        $this->routes[$method][$url] = $target;
        return $this;
    }

    public function matchRoute()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $methodType = $_SERVER['REQUEST_METHOD'];
        if(isset($this->routes[$methodType])) {
            foreach ($this->routes[$methodType] as $route => $target) {
                if($route === $requestUri) {
                    return call_user_func($target);
                }
            }
        }
        throw new \App\Exception\RouteNotFoundException();
    }
}
