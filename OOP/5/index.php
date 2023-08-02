<?php
    require_once 'classes/File.php';

    $file = new File(__DIR__ . '/file.txt'); // передаем в конструктор путь к файлу
    $file->write('Строка 1');
    $file->write('Строка 2');
    $file->write('Строка 3');
    $file->write('Строка 4');
