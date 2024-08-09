<?php 

declare(strict_types=1);

namespace App\Controllers;
use App\Model\Auth;
use Core\Controller;


class Product extends Controller 
{
    public function index()
    {

        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $product = $this->load_model('Product');

        $data = $product->findAll();

        $this->view('products', ['rows' => $data]);
    }

    public function add()
    {
        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $product = $this->load_model('Product');

        $data = $product->findAll();

        $this->view('addProduct');
    }


}