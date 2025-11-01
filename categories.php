<?php
// Database connection
include 'db.php';

// Create category
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO categories (name, description) VALUES ('$name', '$description')";
    $conn->query($sql);
    header("Location: categories.php");
    exit;
}

// Delete category
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM categories WHERE id = $id");
    header("Location: categories.php");
    exit;
}

// Update category
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $conn->query("UPDATE categories SET name='$name', description='$description' WHERE id=$id");
    header("Location: categories.php");
    exit;
}

// Fetch all categories
$result = $conn->query("SELECT * FROM categories");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kategorie produktów</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f6f8fa; padding: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #f4f4f4; }
        form { margin-bottom: 20px; background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input[type="text"], textarea { width: 100%; padding: 8px; margin: 5px 0; }
        button { background: #007BFF; color: white; border: none; padding: 8px 15px; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        a { text-decoration: none; color: #007BFF; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<h1>Product Categories</h1>

<!-- Form for adding new category -->
<form method="POST" action="">
    <h2>Dodaj nową kategorię</h2>
    <label>Nazwa kategorii:</label>
    <input type="text" name="name" required>
    
    <label>Opis (opcjonalnie):</label>
    <textarea name="description"></textarea>
    
    <button type="submit" name="add">➕ Dodać</button>
</form>

<!-- Categories list -->
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td>
                <!-- Edit form -->
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
                    <input type="text" name="description" value="<?= htmlspecialchars($row['description']) ?>">
                    <button type="submit" name="update">💾 Ratuj</button>
                </form>

                <!-- Delete link -->
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this category?')">🗑️ Usuń</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>

<br>
<a href="index.php">⬅️ Powrót do listy produktów</a>

</body>
</html>

