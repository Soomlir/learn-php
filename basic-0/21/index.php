<?php
// date() - чаще всего используется при работе с датой и временем
echo date('Y-m-d H:i:s'); // в одинарных, либо двойных кавычках
// выводится дата сервера, а не компьютера

// Выводится дата и время на сервере
echo "<br>" . date('Y-m-d a g:i:s') . "<br>";

// получить временной пояс
echo date_default_timezone_get();
echo "<br>";

// устанавливает временной пояс, возвращает true/false
date_default_timezone_set('Europe/Moscow');

echo date('Y-m-d g:i:s', 1); // 1970-01-01 0:00:01
echo date('Y-m-d g:i:s', time() + 60); // +1 минута

// количество секунд с начала эпохи unix
echo time();

// показывать в футере дату создания - текущий год 
echo '2010 - ' . date('Y');

// phpinfo(); // выводит все настройки PHP

// getdate() - получить дату в виде массива
$date = getdate();
print_r($date);
echo $date['year'];

echo date('Y-m-d g:i:s', strtotime("+ 1 day")); // завтра в это же время

// mktime(); // Возвращает метку timestamp для заданной даты
echo time() . "<br>";
echo mktime(
    date('H'),
    date('i'),
    date('s') + 1,
    date('m'),
    date('d'),
    date('Y')
);

$t = mktime(
    date('H'),
    date('i'),
    date('s'),
    date('m'),
    date('d'),
    date('Y') + 1
);
echo date('Y-m-d g:i:s', $t);
