<?php
session_start();
define('ADMIN', 'admin');
if (!empty($_POST['login'])) {
    if ($_POST['login'] === ADMIN) {
        $_SESSION['admin'] = ADMIN;
        $_SESSION['res'] = 'Вы успешно авторизовались';
    } else {
        $_SESSION['res'] = 'Неверный логин';
    }

    header('Location: sess1.php');
    die;
}

?>

<ul>
    <li><a href="sess1.php">sess1</a></li>
    <li><a href="sess2.php">sess2</a></li>
    <li><a href="secret.php">secret</a></li>
</ul>

<p><?php
    if (isset($_SESSION['res'])) {
        echo $_SESSION['res'];
        unset($_SESSION['res']); // удалить переменную
    }
    ?></p>

<form action="" method="post">
    <input type="text" name="login">
    <button type="submit">Войти</button>
</form>