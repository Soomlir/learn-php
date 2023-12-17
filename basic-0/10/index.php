<?php
$arr = [1, 2, 3, 4];
echo count($arr); // считает колличество элементов в массиве

$arr[] = 7; // что-то добавляем в конец массива

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Крутой телефон последней модели'
    ],
    [
        'title' => 'iPad',
        'price' => 250,
        'description' => 'Новомодный планшет'
    ]
];

echo count($goods, 1); // Рекурсивно посчитан весь массив вместе с подмассивами. Результат - 8.
// 2 аргумент - когда нужно посчитать в многомерном массиве

array_diff($arr, $goods); // сравнивает два или более массивов с первым массивом
// Найти значения в первом массиве, которых нет во втором массиве (третьем, четвертом)

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
echo $result; // возвращает массив с элементами - отличиями

array_intersect($arr, $goods); // Берет только те элементы, которые совпадают
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);

// array_key_exists -  Проверяет наличие ключей в массиве (true || false)
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

$result = array_keys($arr); // Выбирает из массива ключи
$result2 = array_keys($goods[0]); // title, price, description

$result3 = array_values($goods[0]); // Выбирает из массива значения. Nokia, 100, ...

// array_merge(); //Обьединяет массивы в один массив
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
// green перезаписывает red

// При $array1 + $array2 - Значения не перезаписываются, из 2 массива берем не повторяющиеся значения
// array_rand(); // Позволяет выбрать из массива случайные элементы
// array_reverse(); // Переворачивает массив

// compact(); // Создает массив, содержащий названия переменных и их значения
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
//    $result = [
//        'city' => $city,
//        'state' => $state,
//        'event' => $event
//    ];
$result = compact('city', 'state', 'event'); // передаем название переменных в виде строк

// extract(); // Создает переменные из ключей массива


// arsort - сортирует массив в обратном порядке по значению, ключи сохраняются
// asort -
// sort -
// rsort -


// Познакомиться самостоятельно
// arr_combine
// arr_search
// array_shift
// array_unique
// array_unshift
// array_flip
// array_pop
// array_push
// in_array
// list
