<?php

class NotebookProduct2 extends Product2 {

    public $cpu;

    public function __construct($name, $price, $cpu) { // когда переопределяем метод родительского класса, мы его перезаписываем
        parent::__construct($name, $price); // parent - указывает на родительский класс
        // Обратились к родительскому классу и вызвали нужный нам метод
        $this->cpu = $cpu;
    }

    public function getProduct() {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu() {
        return $this->cpu;
    }
}
