<?php
$host = 'localhost';      
$user = 'root';            
$password = '';            
$dbname = 'food_catalog';  

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => "Connection failed: " . $conn->connect_error]));
}

$conn->set_charset("utf8mb4");
?>
