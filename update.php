<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "❌ Błąd aktualizacji: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Edytuj produkt</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>✏️ Edytuj produkt</h1>

  <form method="POST" action="">
    <label>Nazwa:</label>
    <input type="text" name="name" value="<?= $product['name'] ?>" required>

    <label>Cena:</label>
    <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required>

    <label>Opis:</label>
    <textarea name="description"><?= $product['description'] ?></textarea>

    <button type="submit">Zapisz zmiany</button>
    <a href="index.php" class="btn">↩️ Powrót</a>
  </form>
</body>
</html>
