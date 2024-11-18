<?php
// Проверка, был ли отправлен запрос POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = isset($_POST['username']) ? $_POST['username'] : 'Unknown';
    $password = isset($_POST['password']) ? $_POST['password'] : 'Unknown';

    // Выводим данные на страницу
    echo "<h1>Полученные данные</h1>";
    echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
</head>
<body>
    <h1>Вход в систему</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
