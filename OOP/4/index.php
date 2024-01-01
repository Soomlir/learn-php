<?php

require_once 'classes/Car3.php';

// аргументы попадают в конструктор
$car = new Car3('green', '2', 130, 'Pegeot');
echo $car->getCarInfo();
echo "<br>";
$car->getLorem();