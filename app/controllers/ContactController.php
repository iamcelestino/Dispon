<?php 

declare(strict_types=1);

namespace App\Controllers;
use Core\Controller;

class ContactController extends Controller 
{
    public function index() {
        $this->view('contact', []);
    }

    public function error() {
        echo "Error: The page you are looking for does not exist.";
    }
}