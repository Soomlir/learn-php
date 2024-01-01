<?php
/*
     * if (expression) { - всегда приводится к boolean
     *  instructions;
     * }
*/

$light = 'green';

if ($light == 'green') {
    echo 'We may go';
}

var_dump((bool) 0); // приведение к булеан

// 0, 0.0, NULL, "", "0", false - приводятся к false


if (5 > 3) {
    echo "ok";
}

// ! - отрицание либо инверсия
if (5 != 4) // запись без скобок для одной строки внутри (if действует на одну строку последующую)
    echo "OK";

if (5 != 4) echo "OK"; // можно так записывать для одной строки 

if ($light == 'green') {
    echo 'We may go';
} else {
    echo "We must stop";
}

if ($light == 'green') {
    echo 'We may go';
} elseif ($light == 'yellow') {
    echo 'We may ready';
} else {
    echo "We must stop";
}

// else if - два слова иногда может не работать (смотреть документацию)
// elseif - работает всегда
// elseif - может быть сколько угодно
// можно не писать else, если не нужна эта ветка
