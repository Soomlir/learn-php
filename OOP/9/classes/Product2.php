<?php

class Product2
{
    private $name;
    protected $price;

    public $discount = 10;

    public $public = 'public'; // Публичный (общедоступный) - доступен отовсюду, он доступен в том классе
    // где объявлен, во всех классах наследниках. Публичное свойство или метод доступен вне класса
    protected $protected = 'protected'; // Защищенный - данное свойство или метод - доступны только в том классе
    // где они объявлены и во всех классах наследниках. Из вне класса доступны не будут. При попытке обратиться
    // к ним, мы получим ошибку
    private $private = 'private'; // Самый строгий модификатор в плане области видимости. Означает - закрытый,
    // приватный. Доступен только в том классе, в котором объявлен. Не в наследниках не вне класса такое свойство
    // либо метод будут не доступны.

    // Модификаторы доступа - предназначены для контроля кода

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

    // По совету Мэта Застры изначально для всех свойство поставить private.
    // Большинство методов будут public. По необходимости понижать контроль доступа.
}
