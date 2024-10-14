<?php

namespace App\Model;
use Core\Model;

class Order extends Model {
    
    protected $allowedColumns = [
        'user_id',
        'total',
        'STATUS',
        'created_at'
    ];

    public function validate($DATA) 
    {

       $STATUS = ['pending', 'paid'];
        if (empty($DATA['STATUS']) || !in_array($DATA['STATUS'], $STATUS)) 
        {
            $this->errors['STATUS'] = "Please Select a Status";
        }

       return false;
    }



    protected $beforeInsert = [];

    protected $afterSelect = [];
}