<?php

namespace App\Controllers;
use Core\Controller;

class Profile extends Controller
{
    public function index()
    {
        $this->view('profile');
    }
}