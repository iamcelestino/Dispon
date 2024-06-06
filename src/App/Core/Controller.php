<?php 

declare(strict_types=1);

// src/App/Core/Controller.php
namespace App\Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }
}
