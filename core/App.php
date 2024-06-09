<?php

namespace Core;

class App {
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if a controller exists for the first URL part
        if ($url && file_exists('../app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }

        $controllerClass = 'App\\Controllers\\' . $this->controller;
        if (class_exists($controllerClass)) {
            $this->controller = new $controllerClass;
        } else {
            // Handle error, controller not found
            $this->controller = new \App\Controllers\HomeController();
            $this->method = 'error';
        }

        // Check if a method exists for the second URL part
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                // Handle error, method not found
                $this->method = 'error';
            }
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
