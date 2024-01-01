<?php
function array_print($arr)
{
    echo "<pre>" . print_r($arr, true) . "</pre>"; // true - не выводить, а буферизировать данные
}

// @ - не выводит ошибки, чтобы пользователи не видели
// mysqli_connect() - возвращает объект подключения либо false
$db = @mysqli_connect('127.0.0.1', 'root', 'root', 'gb') or // подключаемся к БД
    die('Ошибка соединения с БД');
if (!$db) die(mysqli_connect_error()); // - ошибки при работе с БД

// установка кодировки соединения
// $db - указать соединения
mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка');

// название таблиц, полей можно оборачивать в ``, чтобы не было конфликтов
echo $insert = "INSERT INTO `gb` (`name`, `text`) VALUES ('Катя', 'lorem ipsum')";
// выполняем запрос к бд, в случае неудачи вернет false, true/объект в случае успеха
// 1 аргумент - индификатор соединения, 2 - сам запрос к бд
$res_insert = mysqli_query($db, $insert); 

// $res_insert - возвращает после выполнения запроса к БД - true или false
if ($res_insert) echo "OK";
else echo "Error";

// посмотреть ошибку последнего обращения к бд
echo mysqli_error($db);

$update = "UPDATE `gb` SET text = CONCAT(text, '||||') WHERE id > 1";
$res_update = mysqli_query($db, $update) or die(mysqli_error($db));

$delete = "DELETE FROM `gb` WHERE id = 3";
mysqli_query($db, $delete) or die(mysqli_error($db));

// получает число измененных строк в результате предыдущего запроса
echo mysqli_affected_rows($db);

$res = mysqli_query($db, "SELECT name, text, date FROM `gb` ORDER BY id DESC LIMIT 2");

// выбирает все строки и помещает в нумерованный массив
$data = mysqli_fetch_all($res, MYSQLI_ASSOC); // - получить ассоциативный массив
array_print($data);

// получает число рядов при выборке
echo mysqli_num_rows($res); // целое число - количество измененных рядов
// 0 - ничего не изменилось
// -1 - ошибка

$res = mysqli_query($db, "SELECT * FROM gb ORDER BY id DESC"); // сортировать в обратном порядке
$data = mysqli_fetch_all($res); // нумированный массив с данными
$data = mysqli_fetch_all($res, MYSQLI_ASSOC); // получить ассоциативный массив
echo mysqli_num_rows($res); // посмотреть количество записей

foreach ($data as $item) {
    echo "NAME: {$item['name']} <br>";
    echo "TEXT: {$item['text']} <br>";
    echo "DATE: {$item['date']} <br>";
}

$data2 = [];

while ($row = mysqli_fetch_assoc($res)) { // - выбирает одну строку в виде ассоциативного массива
    $data2[$row['id']] = $row;
}

print_r($data2); // - получить доступ к данным и сформировать массив

$str = "d'Artanian";
$str = mysqli_real_escape_string($db, $str);

$query = "INSERT INTO gb (name, text) VALUES ('$str', 'Имя с апострофом')";
mysqli_query($db, $query) or die(mysqli_error($db));
