<?php

namespace App\Controllers;
use Core\Controller;

class login extends Controller
{
    public function index() 
    {
        $this->view('login');
    }
}