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

                $user->insert($_POST);
                $this->redirect('Login');
            }
            else {
                $errors = $user->errors;
            }
        }

        $mode = isset($_GET['mode']) ? $_GET['mode'] : '';

        $this->view('signup', [
            'errors' => $errors,
            'mode' => $mode
        ]);
    }

}