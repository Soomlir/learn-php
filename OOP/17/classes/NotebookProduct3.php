<?php

use classes\traits\TColor;

class NotebookProduct3 extends Product3 implements IGadget
{

    use TColor;
    public $cpu;

    public function __construct($name, $price, $cpu)
    { // когда переопределяем метод родительского класса, мы его перезаписываем
        parent::__construct($name, $price); // parent - указывает на родительский класс, вызываем конструктор родительского класса
        // Обратились к родительскому классу и вызвали нужный нам метод
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function addProduct($name, $price)
    {
    }

    public function getCase()
    {
    }
}
