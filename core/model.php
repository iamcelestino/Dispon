<?php

namespace Core;

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
        $data =  $this->query($query, [
            'value' => $value
        ]);

        if(is_array($data)) {

            if(property_exists($this, 'afterSelect'))
            {
                foreach($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            } 
        }
        return $data;
    }

    public function findAll()
    {
        $query = " SELECT * FROM ". $this->table;
        $data = $this->query($query);

        //Run functions after SELECT
        if(is_array($data)) {

            if(property_exists($this, 'afterSelect'))
            {
                foreach($this->afterSelect as $func) {
                    $data = $this->$func($data);
                }
            } 
        }
        return $data;
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
            $string .= "$key = :$key, "; 
        }

        $strg = rtrim($string, ", "); 

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