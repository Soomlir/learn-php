<?php

class BookProduct2 extends Product2
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    { // когда переопределяем метод родительского класса, мы его перезаписываем
        parent::__construct($name, $price); // parent - указывает на родительский класс
        // Обратились к родительскому классу и вызвали нужный нам метод
        $this->numPages = $numPages;
        $this->setDiscount(5);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Количество страниц: {$this->numPages}<br>";
        $out .= "Скидка: {$this->getDiscount()} %<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
}
