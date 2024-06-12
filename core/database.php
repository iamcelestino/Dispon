<?php 

namespace Core;

use PDO;
use PDOException;

class Database {

    private $pdo;

    public function connect()
    {
        try {
            
            $dsn = DBDRIVER .":host=".HOST.";dbname=".DBNAME.";charset=UTF-8";
            $this->pdo = new PDO($dsn, USER, PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            echo "CONNECTED TO THE ". DBNAME . "DATABASE SUCCESSFULLY";

        } catch(PDOException $e) {
            echo "Connection failed". $e->getMessage();
        }
    }

    public function getConnetion() 
    {
        return $this->pdo;
    }

}

