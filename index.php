<?php
    $host = "127.0.0.1";
    $db = 'netland';
    $user = 'root';
    $pass = '';

    $dsn = "mysql:host=$host;dbname=$db;port=3306";

try {
        $pdo = new PDO($dsn, $user, $pass);
        echo"connected to db 'Netland'!!";
} catch (\PDOException $e) {
        throw new \PDOException($e->getMessage("Not connected"));
}


?>