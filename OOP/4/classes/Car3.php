<?php
// construct - вызывается всегда, при создании объекта (создаем экзепляр класса, вызывается конструктор)
// destruct - срабатывает, когда освобождаются все ссылки на объект (удаляется объект из памяти)
class Car3
{

    public $color = 'black';
    public $wheels;
    public $speed = 180;
    public $brand;

    // если создать метод с названием класса, и не будет конструктора, будет считаться, что данный методо конструктор
    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

        // echo __METHOD__ . "<br>"; // проверить работу конструктора
    }

    // public function Car3() {} - аналог конструктора - не рекомендуется использовать

    public function getLorem()
    {
?>
        <div class="one">Hello World!</div>
<?php
    }

    public function getCarInfo()
    { // при объявлении методов, модификаторы не обязательны
        echo $this->color; // this - указатель на текущий объект
    }

    // cрабатывает всегда, перед удалением объекта
    public function __destruct()
    { // сложную логику в деструкторе писать смысла нет
        var_dump($this);           // Например в конструкторе открыть соединение к БД, а в деструкторе закрыть
    }
}
