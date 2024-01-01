<?php
$var = 3;

switch ($var) { // Сравниваем $var c case
    case 1:
        echo "1";
        break; // Для того, чтобы не срабатывали последующие кейсы
    case 1 + 1: // Можно писать выражения
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    default:
        echo "no have number";
}

$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;
if ($bool) { // Не удобно выводить html внутри PHP-кода
    echo "
            <table>
                <tr>
                    <td>" . $str1 . "</td>
                    <td>" . $str2 . "</td>
                    <td>" . $str3 . "</td>
                </tr>
            </table>
        ";
}
?>

<?php
// Альтернативный синтаксис
// : аналог {
// endif; аналог }
?>

<?php
if ($bool): ?> 
    <table>
        <tr>
            <td><?php echo $str1; ?></td>
            <td><?php echo $str2 ?></td><!-- Можно не ставить ; --> 
            <td><?php echo $str3; ?></td>
        </tr>
    </table>
<?php
endif;
?>


<?php
$names = [
    'Ivanov' => 'Ivan',
    'Petrov' => 'Petr',
    'Sidorov' => 'Sidr'
];
?>

<?php foreach ($names as $name): ?>
    Name: <?php echo $name; ?> <br>
<?php endforeach; ?>
