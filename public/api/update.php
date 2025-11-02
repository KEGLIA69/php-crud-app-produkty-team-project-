<?php
include 'db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Brak ID produktu");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $description = $_POST['description'] ?? '';

    $stmt = $conn->prepare("UPDATE products SET name=?, price=?, description=? WHERE id=?");
    $stmt->bind_param("sdsi", $name, $price, $description, $id);

    if ($stmt->execute()) {
        echo "Produkt zaktualizowany";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

