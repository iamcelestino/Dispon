<?php 

declare(strict_types=1);

namespace App\Controllers;
use App\Model\Auth;
use App\Model\Product as ModelProduct;
use Core\Controller;

class Product extends Controller 
{
    public function index()
    {

        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $products = $this->load_model('Product');

        $data = false;

        if(!empty($_POST['name'])) {

            $product = new ModelProduct();
            $name = "%" .trim($_POST['name']). "%";

            $query = "SELECT * FROM products WHERE name LIKE  :prod_name";
            $data = $product->query($query, ['prod_name' => $name]);
        }
        else {
            $errors[] = "please Type a name to find";
            $data = $products->findAll();
        }

        $this->view('products', [
            'title' => 'Products',
            'rows' => $data
        ]);
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

    public function edit($id = null)
    {
        $errors = [];

        if (!Auth::isLoggedIn()) {
            $this->redirect('login');
        }

        $product = $this->load_model('Product');
        if (count($_POST) > 0) {
            $user_id = Auth::getId();

            $_POST['supplier_id'] = $user_id;
            $_POST['price'] = (float)$_POST['price'];
      
            if($product->validate($_POST)) {

                $product->update($id, $_POST);
                $this->redirect('Product');
            }
            else {
               echo "this is not validated";
            }
        }

        $row = $product->where('id',$id);

        if($row)
        {
            $row = $row[0];
        }
        
        $this->view('editProduct', [
            'row' => $row,
            'errors' => $errors
        ]);
    }

    public function delete($id = null)
    {

        if (!Auth::isLoggedIn()) {
            $this->redirect('login');
        }

        $product = $this->load_model('Product');
        
        if (count($_POST) > 0) {
            $user_id = Auth::getId();

            $_POST['supplier_id'] = $user_id;
            $_POST['price'] = (float)$_POST['price'];
      
            $product->delete($id);
            $this->redirect('Product');
  
        }

        $row = $product->where('id',$id);

        if($row)
        {
            $row = $row[0];
        }
        
        $this->view('deleteProduct', [
            'row' => $row,
        ]);
    }

    public function details($id = null)
    {   
        if (!Auth::isLoggedIn()) {
            $this->redirect('login');
        }

        $product = $this->load_model('Product');

        $row = $product->where('id',$id);

        if($row)
        {
            $row = $row[0];

        }else {
            $this->redirect('Product'); 
        }
        
        $this->view('details', [
            'row' => $row,
        ]);
    }
}