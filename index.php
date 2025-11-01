<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Katalog produktów spożywczych</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>🍎 Katalog produktów spożywczych</h1>
  <a href="create.php" class="btn">➕ Dodaj produkt</a>

  <table>
    <tr>
      <th>ID</th>
      <th>Nazwa</th>
      <th>Cena</th>
      <th>Opis</th>
      <th>Akcje</th>
    </tr>

    <?php
      $sql = "SELECT * FROM products";
      $result = $conn->query($sql);

      if (!$result) {
          die("❌ Błąd zapytania SQL: " . $conn->error);
      }

      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']} zł</td>
                <td>{$row['description']}</td>
                <td>
                  <a href='update.php?id={$row['id']}'>✏️ Edytuj</a>
                  <a href='delete.php?id={$row['id']}'>🗑️ Usuń</a>
                </td>
              </tr>";
      }
    ?>
  </table>
</body>
</html>

