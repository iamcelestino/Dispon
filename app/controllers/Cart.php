<?php

namespace App\Controllers;
use Core\Controller;

class Cart extends Controller {
    
    public function index()
    {
        $this->view('cart');
    }


}