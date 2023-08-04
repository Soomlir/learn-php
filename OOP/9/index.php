<?php
    // c PHP 7.1 модификаторы доступа можно использовать для констант

    require_once 'classes/Product2.php';
    require_once 'classes/BookProduct2.php';

    function debug($data)
    {
        echo "<pre>" . print_r($data, 1) . "</pre>";
    }

    $book = new BookProduct2("Три мушкетера", 20, 1000);
    debug($book);

    echo $book->getProduct();

    // var_dump($book->public);
    // var_dump($book->protected); // - ошибка, обращаемся к защищенному свойству
    // var_dump($book->private); // - ошибка, обращаемся к не определенному свойству
