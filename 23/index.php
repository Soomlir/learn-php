<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="action.php" method="post"><!-- по умолчанию данные формы отправлются через GET -->
    Имя:<input type="text" name="name"> <!-- в GET запросе передаются данные: ключ - значение
                                            ключ - название name, а значение - значение input
                                            GET параметры передаются в адресной строке
                                        -->
    <button type="submit" name="send" value="test">Отправить</button>
</form>
</body>
</html>
<?php
    // В методе POST ограничение на передаваемый объем данных нет
    // В GET есть ограничение, но достаточно большой объем
