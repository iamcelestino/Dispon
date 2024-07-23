<?php

namespace Core;
use Core\Database;

class Model extends Database 
{
    protected $table = "users";

    function __construct()
    {
        
    }

    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM ". $this->table . " WHERE". $column = ":value";
        return $this->query($query, [
            'value' => $value
        ]);
    }

    public function findAll()
    {
        $query = "SELECT * FROM ". $this->table;
        return $this->query($query);
    }

}