<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Урок 1</title>
</head>

<body>
    <?php
    // Можно скачать документацию с оф сайта

    // Однострочный комментарий
    # Однострочный комментарий (unix - комментарий)
    /*
     * Многострочный 
     * комментарий
     */

    echo "Hello World!";
    print " Hello World!";

    /*
        php-комментарии не видны в исходном коде
        
        .php - сервер отдает интерпритатору на обработку
        больше никаких отличий с .html

        <?php - Открывающий тег php. ?> - Закрывающий тег php.

        Интерпритатор обрабатывая код, отдает не сам код, а результат работы.
        Клиент не увидет код php.

        Каждая инструкция заканчивается ;

        ?> - автоматически проставляет ; в конце перед ним можно не ставить ;

        php отдает результат работы, а не исходный код.
    */
    ?>
</body>
</html>