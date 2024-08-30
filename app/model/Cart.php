<?php

namespace App\Model;
use Core\Model;

class Cart extends Model {
    
    protected $allowedColumns = [
        'user_id',
        'created_at',
        'updated_at'
    ];

    protected $beforeInsert = [];

    protected $afterSelect = [];
}