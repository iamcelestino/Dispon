<?php 

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

class Product extends Controller 
{
    public function index() {
        $this->view('contact', []);
    }
}