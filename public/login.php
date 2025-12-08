<?php
session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
    header('Location: index.html');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_user = 'admin';
    $valid_pass = '1337';

    if ($username === $valid_user && $password === $valid_pass){
        $_SESSION['logged_in'] = true;
        header('Location: index.html');
        exit;
    } else {
        $error = 'Nieprawidłowy login lub hasło';
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Logowanie</h1>
  <?php if($error): ?>
    <p style="color:red;"><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post">
    <input type="text" name="username" placeholder="Login" required><br>
    <input type="password" name="password" placeholder="Hasło" required><br>
    <button type="submit">Zaloguj</button>
  </form>
</body>
</html>