<?php 

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

class Contact extends Controller 
{
    public function index() {
        $this->view('contact', []);
    }

}