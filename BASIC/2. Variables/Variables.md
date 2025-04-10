# Переменные в PHP
В PHP переменные и константы играют важную роль в хранении и манипуляции данными. Давайте рассмотрим их особенности:

## 1. Переменные в PHP
Переменная в PHP — это область памяти, которая используется для хранения данных. Она начинается с символа $, за которым следует имя переменной.
Создание переменной:
```php
$age = 25;  // переменная, хранящая число
$name = "Alice";  // переменная, хранящая строку
```

Основные моменты:
- Переменная в PHP не требует предварительного объявления типа данных. Тип данных определяется автоматически в зависимости от того, какое значение ей присваивается.
- Переменные регистрозависимы (например, $name и $Name — это разные переменные).
- Переменные можно изменять в процессе работы программы.

```php
$age = 25;
$age = $age + 1;  // изменяем значение переменной
echo $age;  // 26
```

## 2. Константы в PHP
Константы — это именованные значения, которые не могут быть изменены после их установки. Константы не начинаются с символа $.
Создание константы:

Константы можно создавать с помощью функции `define()`.
```php
define("PI", 3.14159);  // создаем константу PI со значением 3.14159
```

Основные моменты:
- Константы всегда глобальны, и их нельзя изменить или удалить.
- Константы не имеют знака $ перед их именем.
- Константы обычно используются для значений, которые не должны изменяться в программе, например, математические константы или настройки, которые не меняются.

```php
define("SITE_NAME", "MyWebsite");
echo SITE_NAME;  // выводит "MyWebsite"
```
