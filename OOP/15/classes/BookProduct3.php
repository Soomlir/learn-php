<?php

class BookProduct3 extends Product3 implements i3D {

    public $numPages;

    const TEST = 20; // переопределение родительских констант

    public function __construct($name, $price, $numPages) { // когда переопределяем метод родительского класса, мы его перезаписываем
        parent::__construct($name, $price); // parent - указывает на родительский класс
        // Обратились к родительскому классу и вызвали нужный нам метод
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function test() { // реализация метода интерфейса
        var_dump(self::TEST2);
    }

     public function getProduct() {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Количество страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()} %<br>";
        return $out;
    }

    public function getNumPages() {
        return $this->numPages;
    }

    // должны следить за областью видимости, либо совпадать с родительским абстрактным, либо быть ниже
    public function addProduct($name, $price, $numPages = 0) {
        var_dump($name, $price, $numPages);
    }
}
