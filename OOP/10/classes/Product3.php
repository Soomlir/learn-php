<?php

// Абстрактные классы появились в PHP 5
// Основная задача состоит в том, чтобы не дать возможности создавать экземпляр такого класса

// При наследовании от абстрактного класса, все методы помечены как абстрактные, должны обязательно 
// быть определены в дочернем классе
abstract class Product3 // abstract - делает класс абстрактным
{ // создаем абстрактный класс
    private $name;
    protected $price;

    public $discount = 10;

    const TEST = 7;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    { // цена со скидкой
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getProduct()
    {
        return "<hr><b>О товаре: </b><br>
                    Наименование:" . $this->name . "<br>
                    Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getDiscount(): int // - int - декларация возвращаемого значения
    {
        return $this->discount;
    }

    public function setDiscount(int $discount) // int - декларация установленного значения
    {
        $this->discount = $discount;
    }

    abstract protected function addProduct($name, $price);
    // Абстрактные методы - просто описательные, не должны содержать реализацию
    // Должны быть описаны в дочернем классе
}
