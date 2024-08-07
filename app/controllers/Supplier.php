<?php

namespace App\Controllers;
use App\Model\Auth;
use Core\Controller;

class Supplier extends Controller
{
    public function index()
    {
        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $user = $this->load_model('User');

        $data = $user->where('role', 'supplier');

        $this->view('suppliers', ['rows' => $data]);
    }
}

