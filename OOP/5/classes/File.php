<?php

class File
{
    public $fp; // указатель на открытый файл 
    public $file; // путь к файлу

    // Конструктор, Деструктор - принято писать в начале класса
    public function __construct($file)
    {
        echo $this->file = $file; // записываем путь файла

        if (!is_writable($this->file)) { // если не доступен для записи файл
            echo 'Файл' . $this->file . 'не доступен для записи';
            exit;
        }

        // указатель на открытый файл (открываем файл для записи)
        $this->fp = fopen($this->file, 'a');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function write($text)
    {
        // записываем в файл, иначе срабатывает if
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) { // PHP_EOL - константа переноса строки
            echo 'Не могу произвести запись в файл ' . $this->file;
            exit;
        }
    }
}
