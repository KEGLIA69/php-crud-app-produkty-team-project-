<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "❌ Błąd dodawania produktu: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Dodaj produkt</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>➕ Dodaj nowy produkt</h1>

  <form method="POST" action="">
    <label>Nazwa:</label>
    <input type="text" name="name" required>

    <label>Cena:</label>
    <input type="number" step="0.01" name="price" required>

    <label>Opis:</label>
    <textarea name="description"></textarea>

    <button type="submit">Zapisz</button>
    <a href="index.php" class="btn">↩️ Powrót</a>
  </form>
</body>
</html>
