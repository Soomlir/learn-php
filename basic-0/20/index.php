<?php
$str = 'Привет, Мир';

// Ищет символ в строке, и возвращает позицию символа
echo mb_strpos($str, 'и', 0, 'utf-8'); // поиск символа - 2 или false, если ничего не найдено
echo mb_strpos($str, 'и', 3, 'utf-8'); // и из Мир - 9, третий аргумент смещение по строке поиска
// var_dump(mb_strpos($str, 'и', 0, 'utf-8')); // true

if (!mb_strpos($str, 'и', 3, 'utf-8')) echo "OK";
else echo "NO";

$str2 = 'привет, мир!';
$str3 = 'ПРИВЕТ, МИР!';

// Приводят строку к верхнему и нижнему регистру
echo strtoupper($str2);
echo strtolower($str3);

// mb_substr() - получить из строки подстроку
echo mb_substr($str, 2, null, 'utf-8');
echo mb_substr($str, -4, 3, 'utf-8');

// htmlspecialchars - Защита от XSS уязвимости - меняет теги на спецсимволы (мнемоники)
$str4 = '<h1><i>Привет</i>, меня зовут <b>Игорь</b>!</h1><iframe src="#"></iframe>'; // # - Не хороший сайт
echo htmlspecialchars($str4, ENT_QUOTES, 'utf-8', false); // двойное кодирование

$str5 = '<h1><i>Привет</i>, меня зовут <b>Игорь</b>!</h1><iframe src="#"></iframe>';
echo htmlspecialchars_decode($str5); // сущности преобразуются в реальный html-код (на практике практически не применяется)
