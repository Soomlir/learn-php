<?php

class NotebookProduct extends Product //extends - расширять, наследовать
{
// Весь код, который есть в Product мы мысленно копируем в дочерний класс

    public $cpu;

    public function __construct($name, $price, $cpu)
    { // когда переопределяем метод конструктора родительского класса, мы его перезаписываем
        parent::__construct($name, $price);
         // parent - указывает на родительский класс, вызываем конструктор родительского класса
        // Обратились к родительскому классу и вызвали нужный нам метод (конструктор)
        // Сначала вызывает родительский конструктор, а затем дописываем наш код ($cpu)
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct(); // Возвращаем строку с данными и дописываем
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu()
    {
        return $this->cpu;
    }
}
