<?php
session_start(); //перед вызовом этой функции, не должно быть никакого вывода

$_SESSION['name'] = 'Igor';
echo $_SESSION['name'];

unset($_SESSION['name']); // - удаляет переменную
session_unset(); // Удалит все сессионные переменные

session_destroy(); // Удаляет всю сессию и файл тоже
?>
<ul>
    <li><a href="sess1.php">sess1</a></li>
    <li><a href="sess2.php">sess2</a></li>
    <li><a href="secret.php">secret</a></li>
</ul>