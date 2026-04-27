<?php

namespace core;

class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch($uri) {
        $method = $_SERVER['REQUEST_METHOD'];

        if (!isset($this->routes[$method][$uri])) {
            http_response_code(404);
            echo "Not Found";
            return;
        }

        [$class, $method] = $this->routes[$method][$uri];
        $controller = new $class;

        echo $controller->$method();
    }
}