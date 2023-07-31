<?php
    class Car2 {

        public $color = 'black';
        public $wheels;
        public $speed = 180;
        public $brand;

        public function getCarInfo() { // при объявлении методов, модификаторы не обязательны
            echo $this->color; // this - указатель на текущий объект
        }
    }
