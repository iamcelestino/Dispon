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

                $this->redirect('login');

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