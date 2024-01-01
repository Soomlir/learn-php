<?php
require_once 'funcs.php';

if (!empty($_POST)) {
    save_mess();
    header('Location: index.php');
    exit;
}

$messages = get_mess();
$messages = array_mess($messages);
// print_r(array_print($messages)) - массив с сообщениями
?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .message {
            border: 1px solid #cccccc;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <form action="index.php" method="post">
        <p>
            <label for="name">Имя:</label><br>
            <input id="name" type="text" name="name">
            <label for="text">Текст:</label><br>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
            <button type="submit">Написать</button>
        </p>
        <hr>

        <?php if (!empty($messages)) : ?>
            <?php foreach ($messages as $message) : ?>
                <?php $message = get_format_message($message); ?>
                <div class="message">
                    <p>Автор:<?= $message[0] ?> | Дата:<?= $message[2] ?></p>
                    <div class="text">
                        <?= nl2br(htmlspecialchars($message[1])) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </form>
</body>
</html>
