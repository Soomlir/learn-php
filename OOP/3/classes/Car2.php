<?php
    class Car2 {

        public $color = 'black';
        public $wheels;
        public $speed = 180;
        public $brand;

        // у методов локальная область видимости
        public function getCarInfo() { // при объявлении методов, модификаторы доступа не обязательны
            // если не указываем модификатор - будет public
            echo $this->color; // this - указатель на текущий объект
        }
    }
