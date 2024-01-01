<?php
$num = [1, 2, 3];
$names = ['Ivanov', 'Petrov'];
echo count($num);
echo count($names);

// Имя функции может начинаться только с _ или буквы
function sum()
{
    // нельзя переопределять функции, будет ошибка
    echo 3 + 7;
}

sum(); // 10
sum(); // Можно вызывать сколько угодно раз
// Может содержать 100 строк, а вызвать можем одной строкой

function sum2($a = 1, $b = 2)
{ // параметры по умолчанию
    echo $a + $b;
    echo "<br>";
}

$x = 100;
$y = 11;

sum2(); // 3
sum2(4, 3); // 7
sum2($x, $y); // 111


$a = 5; 
$b = 10;

function sum3(&$a, $b)
{ // передача по ссылке, переменная a меняется внутри функции
    echo $a + $b;
    echo "<br>";
    $a = 111;
}

sum3($a, $b); // меняется значение переменной $a потому, что передаем по ссылке
echo $a; // 111

function sum4($a, $b)
{
    $c = $a + $b;
    return $c; // возвращает результат работы функции
}

echo 4 + sum4(3, 7); // 14

$result = sum4(3, 2);
echo $result; // 5

// Функция выборки ключей массива
function my_array_keys($arr)
{
    $data = [];
    foreach ($arr as $k => $v) {
        $data[] = $k;
    }
    return $data;
}

$key = my_array_keys($names);
echo $key; // 0, 1

$names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
$key2 = my_array_keys($names2);
echo $key2; // 'Ivan', 'Petr'
