<?php
    // сохраняем данные
    function save_mess() {
        // получить данные
        $str = $_POST['name'] . "|" . $_POST['text'] . "|" . date('Y-m-d H:i:s') . "\n***\n";
        // записать строку в файл
        file_put_contents('gb.txt', $str, FILE_APPEND);
    }

    // считываем данные
    function get_mess() {
        return file_get_contents('gb.txt');
    }

    // из строки получаем массив
    function array_mess($messages) {
        $messages = explode("\n***\n", $messages);
        // array_pop() - возвращает последний элемент массива и удаляет его из массива
        array_pop($messages);
        return array_reverse($messages); // переворачиваем массив
    }

    // распечатываем массив
    function array_print($arr) {
        echo "<pre>" . print_r($arr, true) . "</pre>"; // true - не выводить, а буферизировать данные 
        // выводится после буферизации, то есть сначала построение массива, после вывод
    }

    // создаем массив сообщений
    function get_format_message($message) {
        return explode('|', $message);
    }
