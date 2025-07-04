<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    echo "Добро пожаловать, " . htmlspecialchars($user['username']) . "!<br>";
    echo "<a href='dashboard.php'>Перейти в личный кабинет</a>";
  } else {
    echo "Неверный email или пароль.";
  }
}
?>
