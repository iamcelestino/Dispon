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

        $order = $this->load_model('Order');
        $orders = $order->findAll();

        $user = $this->load_model('User');
        $suppliers = $user->where('role', 'supplier');
        $clients = $user->where('role', 'client');

        $topSupplier = $user->query("SELECT a.username, MAX(b.total) as 'incomes'
                                    FROM users as a 
                                    INNER JOIN orders as b on a.id = b.user_id
                                    where a.role = 'supplier'");
                                    

        $this->view('adminDashboard', [
            'totalSales' => $this->totalSales(),
            'orders' => $orders,
            'suppliers' => $suppliers,
            'clients' => $clients,
            'topSupplier' => $topSupplier
        ]);
    }

    public function admin()
    {
        $this->view('adminDashboard');
    }

    public function suppliers($id = null)
    {
        $order = new Order();
        $orders = $order->where('user_id', Auth::getId());

        $product = new Product();
        $SupplierProduct = $product->where('supplier_id', Auth::getId());

        $this->view('supplierDashboard', [
            'supplier_products' => $SupplierProduct,
            'supplierIncomes' => $this->totalSales(),
            'orders' => $orders
        ]);
    }

    public function totalSales() 
    {
        $order = new Order();
        $totalSales = $order->query("SELECT SUM(total) as 'totalIncomes' FROM orders");
        return $totalSales;
    }

}