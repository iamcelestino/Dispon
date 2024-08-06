<?php 

namespace Core;

use PDO;
use PDOException;

class Database {

    private $pdo;

    public function connect()
    {
        try {
            $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME . ";charset=utf8";
            $this->pdo = new PDO($dsn, USER, PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch(PDOException $e) {
            echo "Connection failed". $e->getMessage();
        }
        return $this->pdo;
    }

    public function query(string $query, array $data = [],  $data_type = "object")
    {
        $connection = $this->connect();
        $stm = $connection->prepare($query);

        if($stm) {
            $check = $stm->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }
                else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
        return false;
    }
}

