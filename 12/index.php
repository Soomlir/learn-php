<?php
    /*
     * foreach (array_expression as $value) {
     *         statement
     * }
     *
     * foreach (array_expression as $key => $value) {
     *         statement
     * }
     * Когда ключи не по порядку идут, хоть ассоциативный массив, нужен foreach
     * Перебирает массив один элемент за другим до конца массива.
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
