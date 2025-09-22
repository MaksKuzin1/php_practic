<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    задача на одномерный массив 3
    <br>
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
    foreach ($array as $value) {
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
    <br>
    задача на одномерный массив 21
    <br>
    <?php
    $N = 10;
    
    ?>
    <hr>
</body>
</html>