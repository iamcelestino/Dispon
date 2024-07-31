<?php 

namespace Core;

class Controller {


    public function view( $view, $data = []) {

        extract($data);
        
        if(file_exists('../app/views/' . $view . '.php')) 
        {
            require_once ('../app/views/' . $view . '.php');
        }
        else {
            require_once ('../app/views/404.php');
        }
    }

    public function load_model($model) {

        $modelPath = "App\\Model\\" . $model;

        if (class_exists($modelPath)) {

            return new $modelPath();
            
        } else {
            
            throw new \Exception("Model class $modelPath not found");
        }
    }

    public function redirect($link)
    {
        header("Location". BASE_URL . "/".trim($link, "/"));
        die;
    }
}


