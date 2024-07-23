<?php

namespace App\Controllers;
use Core\Controller;

class Signup extends Controller {

    public function index() 
    {
        $this->view('signup', []);
    }

}