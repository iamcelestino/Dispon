<?php

namespace App\Controllers;

use App\Model\Auth;
use Core\Controller;

class Home extends Controller 
{
    public function index()
    {

        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $user = $this->load_model('User');
        $data = $user->findAll();
        
        $product = $this->load_model('Product');
        $productData = $product->findAll();

        $this->view('home', [
            'title' => 'DISPON',
            'rows' => $data,
            'products' => $productData
        ]);
    }
}