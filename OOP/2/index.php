<?php
    require_once 'classes/Car.php';

    function debug($data) {
        echo "<pre>" . print_r($data, 1) . "</pre>";
    }

    $car1 = new Car();
    debug($car1);

    $car1->wheels = 4; // -> получить доступ к свойству или методу класса
    $car1->brand = 'Opel'; // brand - $ ставить не нужно
    $car1->speed = 400; // переопределим скорость
    // $car1->year = 2022; - лучше так не создавать новые свойства - добавление свойств динамически
    debug($car1);

    $car2 = new Car();
    $car2->wheels = 6;
    $car2->brand = 'BMW';
    $car2->speed = 250;
    debug($car2);

    echo "<h3>О моем авто:</h3>
    Марка: {$car1->name}<br>
    Цвет: {$car1->color}<br>
    Кол-во колес: {$car1->wheels}<br>
    Год выпуска: {$car1->year}<br>
    Скорость: {$car1->speed}";
