<?php
    require_once 'classes/i3D.php';
    require_once 'classes/IGadget.php';
    require_once 'classes/Product3.php';
    require_once 'classes/BookProduct3.php';
    require_once 'classes/NotebookProduct3.php';
    
    // function debug($data)
    // {
    //     echo "<pre>" . print_r($data, 1) . "</pre>";
    // }

    // $book = new BookProduct3("Три мушкетера", 20, 1000);
    // debug($book);

    // echo $book->getProduct();

    // // не можем создать экземпляр класса, который является абстрактным
    // $product = new Product('Test', 1); // абстрактный продукт
    // // чтобы не создавать абстрактные продукты существуют абстрактные классы
  
    // $book->addProduct('Test', 10);

    // // Абстрактный классы нужны для того, чтобы не могли создать от них экземпляр класса
    // // Если есть хоть один абстрактный метод, класс должен быть абстрактным


    // // Интерфейс - это те же самые классы, но без реализации
    // // Вместо слово class используется interface
    // // Плюс интерфейсов состоит в том, что их можно наследовать очень много
    // // Все методы которые объявляем в интерфейсе они должны быть public

    // // От интерфейса, как и абстрактного класса нельзя создать экземпляр объекта
    // // Все методы не должны иметь реализацию

    // // Все методы интерфейса должны быть реализованы в классе реализующий данный интерфейс
    
    $notebook = new NotebookProduct3('Dell', 1000, 'Intel');

    function offerCase(IGadget $product) { // передаем экземпляр объекта - принимает объект реализующий интерфейс IGadget
        echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
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
