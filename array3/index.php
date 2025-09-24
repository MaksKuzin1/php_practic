<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>задача на многомерный массив 4</h4>
    <?php
    for ($i=0; $i < 6; $i++) { 
        for ($j= 0; $j < 5; $j++) {
            $array[$i][$j] = mt_rand(2,5);
            echo $array[$i][$j] . ", ";
        }
        echo"<br>";
    }
    ?>
    <hr>
    <h4>задача на многомерный массив 18</h4>
    <?php

    ?>
    <hr>
</body>
</html>