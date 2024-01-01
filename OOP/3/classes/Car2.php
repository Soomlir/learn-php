<?php
class Car2
{

    public $color = 'black';
    public $wheels;
    public $speed = 180;
    public $brand;

    // у методов локальная область видимости
    public function getCarInfo() // правила именнования как и для функций
    { 
        // при объявлении методов, модификаторы доступа не обязательны
        // если не указываем модификатор - будет public (виртуально подставляется)
        return $this->color; // this - указатель на текущий объект
    }
}
