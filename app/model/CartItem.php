<?php

namespace App\Model;

use Core\Model;

class CartItem extends Model {
    
    protected $allowedColumns = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    protected $beforeInsert = [];

    protected $afterSelect = [];

    public function validate($DATA)
    {
        $this->errors = [];

        if (empty($DATA['quantity']) || !is_numeric($DATA['quantity']) && is_float($DATA['quantity'])) 
        {
            $this->errors['price'] = "Insert the right price of product";
        }
    }
}