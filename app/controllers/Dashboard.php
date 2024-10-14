<?php

namespace App\Controllers;

use Core\Controller;
use App\Model\{Auth, Order, Product, User};

class Dashboard extends Controller {

    public function index()
    {
        if(!Auth::isLoggedIn()) {
    
            $this->redirect('login');
        }

        $order = new Order();
        $orders = $order->where('user_id', Auth::getId());
        $totalIncomes = $order->query("SELECT SUM(total) as 'totalIncomes' FROM orders");

        $this->view('supplierDashboard', [
            'supplierIncomes' => $totalIncomes,
            'orders' => $orders
        ]);
    }

    public function admin()
    {
        $this->view('adminDashboard');
    }

    public function suppliers($id = null)
    {
        $this->view('supplierDashboard');
    }

}