<?php

namespace App\Model;
use Core\Model;

class Product  extends Model 
{
    protected $allowedColumns = [
        'supplier_id',
        'category_id',
        'name',
        'description',
        'price',
        'created_at'
    ];

    public $beforeInsert = [];

    public function validate($DATA) 
    {

       if(empty($DATA['name'])) 
       {
        $this->errors['name'] = "Please enter a valid name";
       }

       if (empty($DATA['description'])) 
       {
        $this->errors['description'] = "please enter a valid description";
       }

        if (empty($DATA['price']) || !is_numeric($DATA['price'])) 
        {
            $this->errors['price'] = "Insert the right price of product";
        }

       $category_id = ['H&B', 'ELE', 'CLT'];
        if (empty($DATA['category_id']) || !in_array($DATA['category_id'], $category_id)) 
        {
            $this->errors[''] = "Please Select a category";
        }

       if(count($this->errors) == 0) {
        return true;
       }

       return false;
    }
}