<?php

class BookProduct extends Product {

    public $numPages;

    public function __construct($name, $price, $numPages) { // когда переопределяем метод родительского класса, мы его перезаписываем
        parent::__construct($name, $price); // parent - указывает на родительский класс
        // Обратились к родительскому классу и вызвали нужный нам метод
        $this->numPages = $numPages;
    }

    public function getProduct() {
        $out = parent::getProduct();
        $out .= "Количество страниц: {$this->numPages}<br>";
        return $out;
    }

    public function getNumPages() {
        return $this->numPages;
    }
}
