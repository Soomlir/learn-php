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
<?php
//    while(expr) {
//
//    }
//    $i = 1;
//    while($i <= 10) {
//        echo $i++ . "<br>";
//    }
?>
    <table border="1" style="border-collapse: collapse;">
<?php
    $i = 1;
    while ( $i <= 3 ) {
        echo "<tr>";
        $j = 1;
        while ( $j <= 5 ) {
            echo '<td style="padding: 15px;">';
            echo "$";
            echo '</td>';
            $j++;
        }
        echo "</tr>";
        $i++;
    }
?>

</table>

<?php
    $year = 1900;
    echo '<select>';
        while ( $year <= 2022 ) {
            echo "<option value=". $year . ">" . $year . "</option>";
            $year++;
        }
    echo '</select>';
    echo "<br>";
?>
    
<?php
    $j = 1;
    do {
        echo $j++ . "<br>";
    } while ( $j <= 7 );

    // Итерация - каждый шаг цикла
    // $i++  -  $i = $i + 1; $i += 1;
?>
</body>
</html>
