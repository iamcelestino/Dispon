<?php

namespace App\Controllers;
use Core\Controller;
use App\Model\{Order as ModelOrder, Auth};

class Order extends Controller {

    public function index()
    {   
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }

        $order = $this->load_model('Order');
        $orders = $order->findAll();

        $this->view('myOrders', [
            'orders' => $orders
        ]);
    }

    public function create()
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }
        
        $user_id = Auth::getId();

        $data = [
            'user_id' => $user_id,
            'total' => $_POST['total'] ?? null,
            'status' => 'pending'
        ];

        $orders = new ModelOrder;
        $orders->insert($data);

        $this->redirect('cart');
    }
}

