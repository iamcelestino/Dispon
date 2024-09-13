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

        $cartProducts = new CartItem();
        $products = $cartProducts->query('SELECT a.id, a.name, a.description, a.price, b.username, c.quantity
                                            FROM products as a 
                                            INNER JOIN users as b on a.supplier_id = b.id
                                            INNER JOIN cartitems as c ON a.id = c.product_id'
                                        );                           
        $totalPrice = $this->totalPrice($products); 

        $this->view('cart', [
            'cartProducts' => $products,
            'totalPrice' => $totalPrice
        ]);
    }

    public function add()
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }

        $cart = new CartModel();
        $cart->insert($data = ['user_id' => Auth::getId()]);

        $data = [
            'cart_id' => 1,
            'product_id' => $_POST['product_id'] ?? null,
            'quantity' => $_POST['quantity'] ?? 1
        ];

        $cartItem = new CartItem();
        $cartItem->insert($data);

        $this->view('cart');
    }

    public function delete($id = null)
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }
        
        $cartItem = new CartItem();
        $cartItem->delete($id);

        
        $cartProducts = new CartItem();
        $products = $cartProducts->query('SELECT a.id, a.name, a.description, a.price, b.username, c.quantity
                                            FROM products as a 
                                            INNER JOIN users as b on a.supplier_id = b.id
                                            INNER JOIN cartitems as c ON a.id = c.product_id'
                                        );

        $totalPrice = $this->totalPrice($products); 
        
        $this->view('cart', [
            'cartProducts' => $products,
            'totalPrice' => $totalPrice
        ]);

    }

    public function totalPrice($products)
    {
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $product->quantity;
        }
        return $total;
    }

}