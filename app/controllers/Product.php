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
        $errors = [];

        if (!Auth::isLoggedIn()) {
            $this->redirect('login');
        }

        if (count($_POST) > 0) {

            $product = $this->load_model('Product');
            $user_id = Auth::getId();

            $_POST['supplier_id'] = $user_id;
            $_POST['price'] = (float)$_POST['price'];

            if($product->validate($_POST)) {

                $product->insert($_POST);
                $this->redirect('Product');
            }
            else {
               echo "this is not validated";
            }
        }

        $this->view('addProduct', [
            'errors' => $errors
        ]);
    }


}