<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? 0;
    $description = $_POST['description'] ?? '';

    $stmt = $conn->prepare("INSERT INTO products (name, price, description) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $name, $price, $description);

    if ($stmt->execute()) {
        echo "Produkt dodany";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

