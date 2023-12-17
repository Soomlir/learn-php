<?php
$var = 3;

switch ($var) {
    case 1:
        echo "1";
        break;
    case 1 + 1:
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
if ($bool) {
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
// : аналог {
// endif; аналог }
?>

<?php
if ($bool) : ?>
    <table>
        <tr>
            <td><?php echo $str1; ?></td>
            <td><?php echo $str2; ?></td>
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

<?php foreach ($names as $name) : ?>
    Name: <?php echo $name; ?> <br>
<?php endforeach; ?>
