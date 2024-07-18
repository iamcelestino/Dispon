<?php
declare(strict_types=1);

use Core\Database;

$db = new Database();
$pdo = $db->connect();

if($pdo) {
    $stmt = $pdo->query('SELECT * FROM ');
    $results = $stmt->fetchAll();

    echo "<pre>";
        print($results);
    echo "</pre>";
}
