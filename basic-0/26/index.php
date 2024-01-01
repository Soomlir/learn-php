<?php
// cookie хранят авторизации (remember me) - Куки хранятся на клиенте
// перед cookie не должно быть никакого вывода в браузер
setcookie('test', 'My value', time() + 3600); // куки - функция, которая работает с заголовками
setcookie('test', '', time() - 3600); // удаляем куку (указываем время меньше текущего)
echo $_COOKIE['test']; // вывести куку
// по умолчанию кука создается для директории и всех вложенных директорий
// меняется с помощью аргумента $path

isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/')
                           : setcookie('counter', 1, time() + 3600, '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1; // 1 - первый раз обратились к странице
