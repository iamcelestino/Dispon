<?php 

declare(strict_types=1);


namespace Core;

class Controller {
    public function view($view, $data = []):void {

        extract($data);
        
        if(file_exists('../app/views/' . $view . '.php')) {
            
            require_once ('../app/views/' . $view . '.php');
        }
        else {
            require_once ('../app/views/404.php');
        }
    }

    public function load_model($model)
    {
        if(file_exists("./app/model/".ucfirst($model)."php"))
        {
            require("./app/model/".ucfirst($model)."php");
            return $model = new $model();
        }
        return false;
    }
}


