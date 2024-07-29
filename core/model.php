<?php

namespace Core;
use Core\Database;

class Model extends Database 
{
    protected $table;

    function __construct()
    {
        if (property_exists($this, 'table')) 
        {
            $this->table = strtolower((new \ReflectionClass($this))->getShortName()) . "s";
        }  
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
        $query = " SELECT * FROM ". $this->table;
        return $this->query($query);
    }

    public function insert($data) 
    {
        

    }


    public function update($id, $value) {

    }

}