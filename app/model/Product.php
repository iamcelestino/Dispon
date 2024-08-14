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

    protected $beforeInsert = [];

    protected $afterSelect = [
        'get_user'
    ];

    public function validate($DATA) 
    {
        $DATA['name'] = trim($DATA['name']);
        $DATA['description'] = trim($DATA['description']);
        
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

    public function get_user($data) 
    {
        $user = new User();

        foreach ($data as $key => $row) {
            $result = $user->where('id', $row->supplier_id);
            $data[$key]->user = is_array($result) ? $result[0] : false;
        }
        return $data;
    }
}