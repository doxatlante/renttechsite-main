<?php
$host = 'localhost';       // сервер базы данных
$dbname = 'renttech';      // имя вашей БД
$username = 'root';        // пользователь (по умолчанию root в XAMPP)
$password = '';            // пароль (по умолчанию пустой)

try {
    // Создаём подключение с помощью PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Включаем режим ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Можно использовать echo "Подключение успешно!";
} catch (PDOException $e) {
    // Если ошибка — показать её
    die("Ошибка подключения к базе данных: " . $e->getMessage());
}
?>
