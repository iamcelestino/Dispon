<?php
namespace App\Controllers;
use Core\Controller;

class Customer extends Controller
{
    public function index($id = null)
    {
        echo "this the customer controller ". $id;
    }
}