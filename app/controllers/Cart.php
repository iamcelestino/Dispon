<?php

namespace App\Controllers;
use Core\Controller;
use App\Model\{Auth, Cart as CartModel};

class Cart extends Controller {
    
    public function index()
    {
        
        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }

        $data = [
            'user_id' => Auth::getId(),
        ];

        $cartModel = new CartModel();
        $cart = $cartModel->insert($data);

        $this->view('cart');
    }

    public function add()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }

}