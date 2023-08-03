<?php
    // construct - вызывается всегда, при создании объекта
    // destruct - срабатывает, когда освобождаются все ссылки на объект (удаляется объект из памяти)
class Car4 {
    public $color = 'black';
    public $wheels;
    public $speed = 180;
    public $brand;
    public static $countCar = 0; // static - указываем, что данное свойство и метод является статическим
    // и использовать их можно не в контексте объекта, а именно в контексте класса
    // могут быть полезны в том случае, если нам по каким-то причинам не хочется создавать объект
    // но хочется работать со свойствами, методами класса

    // принадлежит классу, а не объекту

    const TEST_CAR = 'Прототип';
    const TEST_CAR_SPEED = 275; // константы как и свойства принадлежат классу
    // const - по умолчанию являются public, но с PHP 7.1 мы можем ограничивать область видимости используя
    // модификаторы доступа

    public function __construct($color = 'green', $wheels = 4, $speed = 130, $brand = 'Pegeot') {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        // self - сам, этот. Указывает не текущий класс.
        self::$countCar++; // :: - Оператор разрешения области видимости
    }

    // $this - не доступен в статическом методе
    public static function getCount() {
        return self::$countCar; // self указывает на текущий класс. Car4::$counterCar - можем так писать, но правильней
        // внутри класса писать - self
    }

    public function test() {
        echo "Hello World";
    }

    public function getCarInfo() { // при объявлении методов, модификаторы не обязательны
        echo $this->color; // this - указатель на текущий объект
    }

    public function getPrototypeInfo() {
        return "<p>Данные тестового авто " . self::TEST_CAR_SPEED . "</p>";
    }
}
