<?php
$arr = ['Ivanov', 'Petrov', 'Sidorov'];
$arr[] = 'Pupkin'; // Добавление элементов в конец массива

/*
    * for (expr1; expr2; expr3) {
    *      instructions;
    * }
    */
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i] . "<br>";
}

$names = [ // Не возможно пройтись по данному массиву с помощью for
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov'
];

// Цикл for не подходит, когда ключи идут не по порядку
