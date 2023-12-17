<?php
$num = [1, 2, 3];
$names = ['Ivanov', 'Petrov'];
echo count($num);
echo count($names);

// имя функции может начинаться только с _ или буквы
function sum()
{ // нельзя переопределять функции
    echo 3 + 7;
}

sum();

function sum2($a = 1, $b = 2)
{ // параметры по умолчанию
    echo $a + $b;
    echo "<br>";
}

$x = 100;
$y = 11;

sum2(4, 3);
sum2($x, $y);

$a = 5; // станет 111
$b = 10;

function sum3(&$a, $b)
{ // передача по ссылке
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

echo 4 + sum4(3, 7);

$result = sum4(3, 2);
echo $result;

// Функция подсчета элементов массива, аналог count
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
