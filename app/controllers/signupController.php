<?php

namespace App\Controllers;
use Core\Controller;

class signupController extends Controller {

    public function index() 
    {
        $this->view('signup', []);
    }

    public function error() 
    {
        echo "this page doesn't exist";
    }
}