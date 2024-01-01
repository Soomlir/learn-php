<?php
// PHP7 вышел в 2015 - PHP7 стал значительно быстрее PHP5 (PHP6 Не было)
// Значительно увеличилась скорость работы PHP7 по сравнению с PHP5

// Оператор объединения с NULL
echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';

echo $user = $_GET['user'] ?? 'guest'; 
// Есть ли в $_GET['user'] - ключ user
// если true - $_GET['user'], false - 'guest'

echo $user = $_GET['user'] ?? $_POST['user'] ?? 'guest'; // цепочка проверок


// Оператор spaceship (Космический корабль)
$a = 1;
$b = 2;
echo $a <=> $b; // проверяет на -меньше -равно -больше
// если а меньше б - -1, если а равно б - 0, если а больше б - 1

if (($a <=> $b) === 1) {
    echo "$a > $b";
} elseif (($a <=> $b) === -1) {
    echo "$a < $b";
} else {
    echo "$a == $b";
}

// Возможность определять массив констант
define("ANIMALS", [
    'dog',
    'cat',
    'bird'
]);

echo ANIMALS[2]; // bird

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'root');
define('DBBASE', 'database');

define('DB', [
    'localhost',
    'root',
    'root',
    'database'
]);
echo DB[1]; // login

define('DB2', [
    'DBHOST' => 'localhost',
    'DBUSER' => 'root',
    'DBPASS' => 'root',
    'DBBASE' => 'database'
]);
echo DB['DBUSER'];

// Групповые декларации use - группировка одинаковых пространств имен
// Классы, функции и константы импортируемые из одного и того же namespace,
// теперь можно группировать в одном операторе use

// Декларация скалярных типов (int ...$ints) - приведет к int все элементы
function sum(int ...$ints)
{ // $ints - массив
    return array_sum($ints);
}

// Декларация возвращаемых значений
function sum2($a, $b): int
{
    return $a + $b;
}

// функция целочисленного деления intdiv()
intdiv(10, 3);
