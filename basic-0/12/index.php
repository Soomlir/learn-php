<?php
/*
     * foreach (array_expression as $value) {
     *         statement
     * }
     *
     * foreach (array_expression as $key => $value) {
     *         statement
     * }
     * foreach - перебирает элементы массива, проходит по всем элементам
     * Когда ключи не по порядку идут, хоть ассоциативный массив, нужен foreach
     * Перебирает массив один элемент за другим до конца массива.
     * Цикл предназначен только для работы с массивами (нельзя выводить цифры и т.д.)
     */
$arr = ['Ivanov', 'Petrov', 'Sidorov'];

foreach ($arr as $item) {
    echo $item . "<br>";
} // 'Ivanov', 'Petrov', 'Sidorov'

foreach ($arr as $key => $item) {
    echo $key . " " . $item . "<br>";
}

for ($i = 0; $i <= 30; $i++) {
    echo $i . "<br>";
    if ($i == 7) {
        break; // прерывает выполнение цикла
    }
}

for ($i = 0; $i <= 30; $i++) {
    if ($i == 10) continue; // пропускает итерацию по условию
    echo $i . "<br>";
}
