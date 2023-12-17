<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam commodi dolore
        earum eligendi facilis libero quibusdam saepe sed ullam. Eaque, ex fugit id minima molestias
        obcaecati repellendus reprehenderit unde?
    </p>
    <?php include("inc.php"); // подключаем содержимое файлов 
    ?>
    <?php include "inc.php"; // Альтернативный синтаксис, можно также использовать одиночные кавычки и без скобок 
    ?>
    <?php require("inc.php");
    // Отличие include и require - если указан не верный путь к файлу при include
    // весь скрипт отработает до конца и будет ошибка Warning, 
    // в случае require - будет Fatal Error и прекращение отработки скрипта (код дальше не будет работать)
    // require - нужен например, чтобы подключать БД. Лучше всегда использовать require
    ?>
    <?php require "inc.php"; ?>
    <?php require 'inc.php'; ?>
    <?php require("inc.php"); // можно подключать сколько угодно раз с include и require 
    ?>
    <?php include_once("inc.php"); ?>
    <?php include_once("inc.php"); // once - подключение файла только один раз 
    ?>
    <?php
    // разница между include_once и require_once - такая же как и между include и require 
    ?>
</body>
</html>
