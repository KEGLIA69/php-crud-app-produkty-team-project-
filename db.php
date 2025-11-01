<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "food_catalog";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("❌ Błąd połączenia z bazą danych: " . $conn->connect_error);
}
?>
