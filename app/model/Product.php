<?php

namespace App\Model;
use Core\Model;

class Product  extends Model 
{
    protected $allowedColumns = [
        'name',
        'description',
        'price',
        'gender',
        'sku',
    ];

    public function validate($DATA) 
    {
       $this->errors = [];

       if (empty($DATA['name'])) {
        $this->errors['name'] = "Please enter a valid name";
       }

       if (empty($DATA['description'])) {
        $this->errors['description'] = "please enter a valid description";
       }

       if (empty($DATA['price'] || is_string($DATA['price']) || is_bool($DATA['price']))) {
        $this->errors['price'] = "Insert the right price of product";
       }

       if (empty($DATA['sku'])) {
        $this->errors['sku'] = "enter a valid sku";
       }

       if(count($this->errors) == 0) {
        return true;
       }
       
       return false;
    }
}