<?php

namespace App\Controllers;
use Core\Controller;

class Home extends Controller 
{

    public function index()
    {
        $user = $this->load_model('User');

        // $arr['username'] = 'user117';
        // $arr['password'] = 'hashedpassword117';
        // $arr['email'] = 'user117@example.com';
        // $arr['role'] = 'supplier';

        // $user->insert($arr);
        // $user->update(17, $arr);
        //  $user->delete(24);
        $data = $user->findAll();

        $this->view('home', ['rows' => $data]);
    }
}