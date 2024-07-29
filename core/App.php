<?php

namespace Core;

class App {
    
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $URL = $this->parseUrl();
        
        if(file_exists("../app/controllers/".$URL[0].".php"))
        {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }

        $controllerClass = "App\\Controllers\\" . $this->controller;
        $this->controller = new $controllerClass();

        if(isset($URL[1]))
        {
            if(method_exists($this->controller, $URL[1]))
            {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }

        $URL = array_values($URL);
        $this->params = $URL;
        call_user_func_array([$this->controller,$this->method], $this->params);

    }

    private function parseUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
    }

}
