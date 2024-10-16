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

        $this->view('adminDashboard');

    }

    public function admin()
    {
        $this->view('adminDashboard');
    }

    public function suppliers($id = null)
    {
        $order = new Order();
        $orders = $order->where('user_id', Auth::getId());
        $totalIncomes = $order->query("SELECT SUM(total) as 'totalIncomes' FROM orders");

        $product = new Product();
        $SupplierProduct = $product->where('supplier_id', Auth::getId());

        $this->view('supplierDashboard', [
            'supplier_products' => $SupplierProduct,
            'supplierIncomes' => $totalIncomes,
            'orders' => $orders
        ]);
    }

}