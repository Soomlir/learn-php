<?php
copy('text.txt', 'folder/gg.txt'); // копирует файл

if (file_exists('folder/gg.txt')) { // проверяет, существует ли файл
    echo 'Файл существует';
} else {
    echo 'Такого файла нет';
}

// file_get_contents() - прочитать содержимое файла
// file_put_contents() - откроет и запишет файл, а после закроет файл

// file_get_contents() - открывает, читает, закрывает файл
echo $file = file_get_contents('text.txt');

// прочитать главную страницу php.net и записать в файл gg.txt
$file = file_get_contents('https://www.php.net');
file_put_contents('folder/gg.txt', $file);

// file() - читает файл построчно, каждая строка будет элементом массива
$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo "<pre>";
print_r($file);
echo "</pre>";

// is_dir('folder') - проверка - это Каталог
// is_file('text.txt') - Не только проверяет файл ли это и проверяет путь

rename('text.txt', 'folder/file2.txt'); // переносит файл по указаному пути

mkdir("1/2/3"); // создает каталог - вложенную структу создать не может по умолчанию
mkdir("1/2/3", 0777, true); // теперь может

    // rmdir() - удаляет папку по указаному пути
    // touch() - установить время доступа и модификации файла
    // unlink('folder/file.txt') - удаляет файл
