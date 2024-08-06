<?php

namespace App\Controllers;

use App\Model\Auth;
use Core\Controller;

class Logout extends Controller 
{
    public function index()
    {
       Auth::logout();
       $this->redirect('login');
    }
}