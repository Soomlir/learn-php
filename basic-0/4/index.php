<?php
/*
     * boolean, integer, float, string
     */

// PHP - язык со слабой типизацией (не нужно указывать тип перменной при объявлении)

/*
        В php 8 типов данных.
        boolean, integer, float, string...
        true, false - Регистронезависимые 
        TRUE, FALSE - True, False - без разницы
    */

$is_auth = false; // не авторизован пользователь
$var = true;
echo $var; // 1 - преобразуется к 1 
$var2 = false;
echo $var2; // false - преобразуется к пустой строке
var_dump($var2); // функция предназначенная для дебага // bool(false)
echo gettype($var); // функция для просмотра типа данных (редко используется)

$int = 123;
var_dump($int);

$int2 = '-10' + 20; // 10 - intenger // '-10' - числовая строка

$float = 13.3; // Дробное число или число с плавающей точкой
var_dump($float);

echo $str = 'This is string';
var_dump($str);

$str2 = "This \"is\" value {$int}"; // {} - указываем, что переменная ограничивается {}
echo $str2;

$str3 = "This trick \$int";
echo $str3;

// HEREDOC - аналог ""
// NOWDOC - аналог ''

// HEREDOC - аналог "", LABEL - индификатор (Называть можно как угодно)
// после индентификатора должен быть только перенос строки, ничего больше
// Экранировать ничего не нужно.
// правило именнования, как для переменных
$str4 = <<<LABEL
        This "is" 'string' $int
LABEL;
echo $str4;

// NOWDOC - аналог ''
$str5 = <<<HERE
        This "is" 'string' $int
HERE;
echo $str5;
