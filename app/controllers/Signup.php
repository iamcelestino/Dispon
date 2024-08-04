<?php

namespace App\Controllers;

use App\Model\User;
use Core\Controller;

class Signup extends Controller {

    public function index() 
    {   
        $errors = [];
        
        if(count($_POST) > 0) {
            
            $user = new User();

            if($user->validate($_POST)) {

                $arr['username'] = $_POST['username'];
                $arr['email'] = $_POST['email'];
                $arr['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $arr['gender'] = $_POST['gender'];
                $arr['role'] = $_POST['role'];

                $user->insert($arr);

                $this->redirect('Login');
            }
            else {
                $errors = $user->errors;
            }
        }
        $this->view('signup', [
            'errors' => $errors
        ]);
    }

}