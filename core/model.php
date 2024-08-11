<?php

namespace Core;

use App\Model\{User, Product};
use Core\Database;

class Model extends Database 
{
    protected $table;
    public $errors = [];

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
        $query = "SELECT * FROM " . $this->table . " WHERE " . $column . " = :value";
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


        if(property_exists($this, 'allowedColumns'))
        {
            foreach($data as $key => $columns) 
            {

                if(!in_array($key, $this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        } 

        if(property_exists($this, 'beforeInsert'))
        {
            foreach($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        } 

       $keys = array_keys($data);
       $columns = implode(',', $keys);
       $values = implode(',:', $keys);

       $query = "INSERT INTO $this->table($columns) VALUES(:$values)";

       return $this->query($query, $data);
    }

    public function update($id, $data) 
    {
     
        $string = '';

        foreach ($data as $key => $value) {
            $string .= $key. "=:".$key.",";
        }

        $strg = trim($string, ",");

        $data['id'] = $id;

        $query = "UPDATE $this->table SET $strg WHERE id = :id";
        return $this->query($query, $data);
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";
        $data['id'] = $id;
        return $this->query($query, $data);
    }

}