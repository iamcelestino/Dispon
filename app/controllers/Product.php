<?php 

declare(strict_types=1);

namespace App\Controllers;
use App\Model\{Product as ModelProduct, Auth, Pager};
use Core\Controller;

class Product extends Controller 
{
    public function index()
    {

        if(!Auth::isLoggedIn()) {

            $this->redirect('login');
        }
        
        $product = new ModelProduct();

        $limit = 8;
        $pager = new Pager($limit);
        $offset = $pager->offset;

        $data = false;

        if(!empty($_POST['name'])) {

            $name = "%" .trim($_POST['name']). "%";

            $query = "SELECT a.id, a.name, a.price, a.created_at, a.image, b.username 
                    FROM products as a 
                    INNER JOIN users as b on a.supplier_id = b.id
                    WHERE a.name LIKE :prod_name
                    ORDER BY a.created_at  DESC 
                    LIMIT $limit OFFSET $offset ";

            $data = $product->query($query, [
                'prod_name' => $name,
            ]);
        }
        else {

            $errors[] = "please Type a name to find";

            $query = "SELECT a.id, a.name, a.price, a.created_at, a.image, b.username
            FROM products AS a 
            INNER JOIN users AS b ON a.supplier_id = b.id 
            ORDER BY a.created_at  DESC 
            LIMIT $limit OFFSET $offset "; 
                $data = $product->query($query);
        }
        
        $this->view('products', [
            'rows' => $data,
            'pager' => $pager
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

                if(count($_FILES) > 0) {
                   
                    $allowed[] = "image/jpeg";
                    $allowed[] = "image/png";

                    if($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                        
                        $folder = "uploads/products/";

                        if(!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }

                        $destination = $folder . $_FILES['image']['name'];

                        move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                        $_POST['image'] = $destination;
                    }
                }
                
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

                if(count($_FILES) > 0) {
                   
                    $allowed[] = "image/jpeg";
                    $allowed[] = "image/png";

                    if($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
                        
                        $folder = "uploads/products/";

                        if(!file_exists($folder)) {
                            mkdir($folder, 0777, true);
                        }

                        $destination = $folder . $_FILES['image']['name'];

                        move_uploaded_file($_FILES['image']['tmp_name'], $destination);

                        $_POST['image'] = $destination;
                    }
                }

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