<?php
require 'db.php'; // подключаем базу данных

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Пример: сохранить в базу
$stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->execute([$name, $email, $password]);

echo "Регистрация успешна!";
?>
