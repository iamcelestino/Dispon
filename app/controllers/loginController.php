<?php

namespace App\Controllers;
use Core\Controller;

class loginController extends Controller
{
    public function index() 
    {
        $this->view('login');
    }
}