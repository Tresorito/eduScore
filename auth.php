<?php
session_start();

$db = new PDO('sqlite:database.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

function ensureTableExists($db) {
  try {
      $query = "CREATE TABLE IF NOT EXISTS users (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
          username TEXT UNIQUE,
          password TEXT
      )";
      $db->exec($query);
  } catch (PDOException $e) {
      die("DB error: " . $e->getMessage());
  }
}

ensureTableExists($db);

$message = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: index.php');
        exit;
    } else {
        $message = 'Incorrect username or password';
    }
} elseif (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    try {
        $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        $message = 'User registered successfully';
    } catch (PDOException $e) {
        $message = 'Username already exists';
    }
}

$username = null;

if (isset($_SESSION['user_id'])) {
    $username = strtoupper(htmlspecialchars($_SESSION['username']));
}
