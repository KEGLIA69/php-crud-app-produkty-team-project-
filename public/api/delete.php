<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    http_response_code(401);
    echo json_encode(['error' => 'Brak dostępu']);
    exit;
}
?>

<?php
include '../../db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Brak ID produktu");
}

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Produkt usunięty";
} else {
    echo "Błąd: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
