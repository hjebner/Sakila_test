<?php

$host = 'localhost';
$db = 'sakila';
$user = 'root';
$password = '';
$charset = 'utf8mb4';



$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//    echo 'Hello Database';
} catch(PDOException $e) {
    echo "No Database Found!";
    // throw new PDOException($e->getMessage());
}

