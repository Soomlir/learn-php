<?php
// PHP7 вышел в 2015 - PHP7 стал значительно быстрее PHP5 (PHP6 Не было)

// Оператор объединения с NULL
echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';
echo $user = $_GET['user'] ?? 'guest'; // если true - $_GET['user'], false - 'guest'
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

echo ANIMALS[2];

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

// групповые декларации use - группировка одинаковых пространств имен

// декларация скалярных типов (int ...$ints) - приведет к int
function sum(int ...$ints)
{ // $ints - массив
    return array_sum($ints);
}

// декларация возможных значений
function sum2($a, $b): int
{
    return $a + $b;
}

// функция целочисленного деления intdiv()
intdiv(10, 3);
