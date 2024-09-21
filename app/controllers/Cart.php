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

        $userId = Auth::getId();

        $cartId = $this->getCartId($userId);

        if($cartId) {
            $data = [
                'cart_id' => $cartId,
                'product_id' => $_POST['product_id'] ?? null,
                'quantity' => $_POST['quantity'] ?? 1
            ];
    
            $cartItem = new CartItem();
            $cartItem->insert($data);
    
           $this->redirect('cart');
        }else {
            echo "COULD NOT CREATE OR RETRIEVE A CART";
        }
    }

    public function delete($id = null)
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }
        
        $cartItem = new CartItem();
        $cartItem->delete($id);

        $this->redirect('cart');
    }

    public function totalPrice($products)
    {
        $total = 0;
        foreach ($products as $product) {
            $total += $product->price * $product->quantity;
        }
        return $total;
    }

    public function getCartId($userId)
    {
        $cart = new CartModel();
        $cartIds = $cart->query('SELECT id FROM carts WHERE user_id = :user_id', ['user_id' => $userId]);

        if ($cartIds && count($cartIds) > 0) {
            return $cartIds[0]->id; 
        }

        $cart->insert(['user_id' => $userId]);
    }
}