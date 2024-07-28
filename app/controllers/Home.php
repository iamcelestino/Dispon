<?php

namespace App\Controllers;
use Core\Controller;

class Home extends Controller 
{

    public function index()
    {
        $user = $this->load_model('User');
        $data = $user->findAll();

        $this->view('home', ['rows' => $data]);
    }
}