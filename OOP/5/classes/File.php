<?php

class File {
    public $fp;
    public $file;

    public function __construct($file) {
        echo $this->file = $file; // записываем путь

        if (!is_writable($this->file)) {
            echo 'Файл' . $this->file . 'не доступен для записи';
            exit;
        }

        // указатель на открытый файл
        $this->fp = fopen($this->file, 'a');
    }

    public function __destruct() {
        fclose($this->fp);
    }

    public function write($text) {
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) { // PHP_EOL - константа переноса строки
            echo 'Не могу произвести запись в файл' . $this->file;
            exit;
        }
    }
}
