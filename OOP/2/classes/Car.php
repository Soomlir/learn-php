<?php
class Car
{
    // модификаторы доступа - характеризируют область видимости того или иного свойства
    // public
    // protected
    // private

    public $name = 'Camaro';
    public $color = 'black';
    public $wheels;
    public $speed = 180;
    public $year = 2022;
    var $brand; // var (синоним public) - 4 версия PHP - не было public protected private

    // доступно с PHP 5.6
    public $path = __DIR__ . '/test';
    public $test = 1 + 2;
}

// scope - Область видимости
// Переменные объявленные в функции являются локальными, 
// вне функции они не видны
// Со свойствами можем работать и вне класса
