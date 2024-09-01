<?php

namespace App\Controllers;
use Core\Controller;
use App\Model\{Auth, Product};

class Supplier extends Controller
{
    public function index()
    {
        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $user = $this->load_model('User');

        $data = $user->where('role', 'supplier');
        $this->view('suppliers', ['rows' => $data]);
    }

    public function products($id = null)
    {
        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }

        $supplier_id = $id;

        if($supplier_id) {
            $products = $this->load_model('Product');
            
            $supplierProducts = $products->where('supplier_id', $supplier_id);

            $this->view('supplierProducts', [
                'supplerProducts' => $supplierProducts
            ]);
        }
        else {
            $this->redirect('suppliers');
        }
    }
}

