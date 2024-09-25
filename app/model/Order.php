<?php

namespace App\Model;
use Core\Model;

class Order extends Model {
    
    protected $allowedColumns = [
        'user_id',
        'total',
        'status',
        'created_at'
    ];

    protected $beforeInsert = [];

    protected $afterSelect = [];
}