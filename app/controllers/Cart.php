<?php

namespace App\Controllers;
use Core\Controller;
use App\Model\{Auth, Cart as CartModel, CartItem};

class Cart extends Controller {
    
    public function index()
    {
       
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }
    }

    public function add()
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }

        $data = [
            'cart_id' => 1,
            'product_id' => $_POST['product_id'] ?? null,
            'quantity' => $_POST['quantity'] ?? 1
        ];

        $cartItem = new CartItem();
        $cartItem->insert($data);

        $this->view('cart');
    }


}