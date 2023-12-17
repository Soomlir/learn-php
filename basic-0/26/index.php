<?php
// cookie хранят авторизации (remember me)
// перед cookie не должно быть никакого вывода в браузер
setcookie('test', 'My value', time() + 3600); // функция, которая работает с заголовками
setcookie('test', '', time() - 3600); // удаляем куку
echo $_COOKIE['test'];

isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time() + 3600, '/')
    : setcookie('counter', 1, time() + 3600, '/');

echo isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 1;
