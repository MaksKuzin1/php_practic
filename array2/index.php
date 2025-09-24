<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>задача на одномерный массив 3</h4>
    <?php
    $N = 10;
    $array = [];
    $sum = 0;
    $count = 0;
    for ($i=0; $i < $N; $i++) { 
        $array[] = mt_rand(1, 10);
        echo $array[$i] . ', ';
    } 
    echo"<hr>";
    foreach ($array as $key => $value) {
        $value = ($value < 2) ? 0 : $value;
        echo $value . ', ';
        if ($value > 2 && $value < 7) {
            $sum += $value;
            $count += 1;
        }
    }
    echo"<hr>";
    echo"Сумма эл. от 3 до 6 = $sum <br> Кол-во = $count"
    ?>
    <hr>
    <h4>задача на одномерный массив 21</h4>
    <?php
    $N = 10;
    $A = 2;
    $B = 4;
    $C = 7;
    $D = 9;
    $arr1 = [];
    $arr2 = [];
    $arr3 = [];
    echo"массив 1 = ";
    for ($i=0; $i < $N; $i++) { 
        $arr1[] = mt_rand(-30, 30);
        echo $arr1[$i]. ", ";
        if ($i>=$A && $i <= $B) {
            $arr3[] = $arr1[$i];
        }
    }
    echo"<hr>";
    echo"массив 2 = ";
    for ($i=0; $i < $N; $i++) { 
        $arr2[] = mt_rand(-30, 30);
        echo $arr2[$i]. ", ";
        if ($i>=$C && $i <= $D) {
            $arr3[] = $arr2[$i];
        }
    }
    echo"<hr>";
    echo"массив 3 = ";
    foreach ($arr3 as $key => $value) {
        echo"$value, ";
    }
    ?>
    <hr>
</body>
</html>