<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма входа</title>
</head>
<body>
    <h1>Вход в систему</h1>
    <form action="your_php_script.php" method="POST">
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
