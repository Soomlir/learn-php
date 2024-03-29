<?php
// construct, destruct - магические методы
// construct - вызывается всегда, при создании объекта (создаем экзепляр класса, вызывается конструктор,
// если он объявлен в классе)
// destruct - срабатывает, когда освобождаются все ссылки на объект (удаляется объект из памяти)
class Car3
{

    public $color = 'black';
    public $wheels;
    public $speed = 180;
    public $brand;

    // если создать метод с названием класса, и не будет конструктора, 
    // будет считаться, что данный метод конструктор
    // так делать уже не рекомедуется

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color; // инициализируем свойства с помощью конструктора
        $this->wheels = $wheels; // это классическое использование конструктора
        $this->speed = $speed;
        $this->brand = $brand;

        // echo __METHOD__ . "<br>"; // проверить работу конструктора
    }

    // public function Car3() {} - аналог конструктора - не рекомендуется использовать

    // Мы можем вызывать конструктор вручную, это обычный метод, 
    // просто он срабатывает автоматически (нет потребности вызывать вручную)

    public function getCarInfo()
    { // при объявлении методов, модификаторы не обязательны
        echo $this->color; // this - указатель на текущий объект
    }

    // Возможность вставлять html в классы (вряд ли)
    public function getLorem() {
        ?>
        <div>Hello World!</div>
    <?php }


    // cрабатывает всегда, перед удалением объекта
    public function __destruct()
    { // Порядок удаления объектов не определен, поэтому сложную логику в деструкторе писать смысла нет
        var_dump($this);  // Например в конструкторе открыть соединение к БД, а в деструкторе закрыть
      // Пытаться обратиться к другим объектам из деструктора не нужно
    }
}
