<?php  
    if (isset($_POST['send'])) { // Кнопка формы была нажата и форма была отправлена
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post"><!-- по умолчанию данные формы отправлются через GET -->
        Имя:<input type="text" name="name"> <!-- в GET запросе передаются данные: ключ - значение
                                            ключ - название name, а значение - значение input
                                            GET параметры передаются в адресной строке
                                        -->
        <textarea name="text" cols="30" rows="10"></textarea>
        <button type="submit" name="send" value="test">Отправить</button>
    </form>

    <p>Введенное имя: <?php if (isset($_POST['name'])) echo $_POST['name'];
                        else echo 'Форма не отправлена'; ?></p>
    
    <p>Введенный текст: <?php if (isset($_POST['text'])) echo nl2br($_POST['text']);
                        else echo 'Текст не отправлен'; ?></p>
</body>

</html>
<?php
    // В методе POST ограничение на передаваемый объем данных нет
    // В GET есть ограничение, но достаточно большой объем
