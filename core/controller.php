<?php 

declare(strict_types=1);


namespace Core;

class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }
}


