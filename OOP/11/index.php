<?php
    require_once 'classes/i3D.php';
    require_once 'classes/IGadget.php';
    require_once 'classes/Product3.php';
    require_once 'classes/BookProduct3.php';
    require_once 'classes/NotebookProduct3.php';
    
    $notebook = new NotebookProduct3('Dell', 1000, 'Intel');

    // контроль типов. принимает объект конкретного класса
    function offerCase(IGadget $product) { // передаем экземпляр объекта - принимает объект реализующий интерфейс IGadget
        // echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
    }

    offerCase( $notebook);

    var_dump($notebook instanceof NotebookProduct3); // true
    var_dump($notebook instanceof IGadget); // true

    class A {}
    class B extends A {}
    class C {}

    $a = new A();
    $b = new B();
    $c = new C();

    // является ли экзепляром данного класса
    // var_dump($a instanceof A);
    // var_dump($b instanceof B); // A, B наследуется от родителя
    // var_dump($c instanceof C);
