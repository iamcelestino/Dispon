<?php

namespace App\Controllers;

use Core\Controller;
use App\Model\{Auth, Order, Product};

class Dashboard extends Controller {

    public function index()
    {
        if(!Auth::isLoggedIn()) {
            $this->redirect('login');
        }

        $role = Auth::getRole();

        if($role === 'admin') {

            return $this->admin();

        }
        elseif($role === 'supplier') {
            
            return $this->suppliers();

        }
        else {

        }
    }

    public function admin()
    {
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

    public function suppliers()
    {
        $order = new Order();

        $supplier_id = Auth::getId();

        $orders = $order->where('user_id', $supplier_id);

        $product = new Product();
        $SupplierProduct = $product->where('supplier_id', $supplier_id);

        $this->view('supplierDashboard', [
            'supplier_products' => $SupplierProduct,
            'supplierIncomes' => $this->totalSales($supplier_id),
            'orders' => $orders
        ]);
    }

    public function totalSales($supplier_id = null) 
    {
        $order = new Order();

        if ($supplier_id) {

            $totalSales = $order->query("SELECT SUM(total) as 'totalIncomes' FROM orders WHERE user_id = ?", [$supplier_id] );

        }
        else {

            $totalSales = $order->query("SELECT SUM(total) as 'totalIncomes' FROM orders");

        }
    
        return $totalSales;
    }

}