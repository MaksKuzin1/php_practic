<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    график 1
    <br>
    <?php
    $y=1;
    $x=0;
    if($y<=($x**2) && $y>=0 && $x<=1.5 && $x>=0){
        echo"Точка лежит в заданной области";
    } else{ 
        echo"Точка не лежит в заданной области";
    }
    ?>
    <hr>
    график 2
    <br>
    <?php
    $y=1;
    $x=0;
    if(($y<=(2-2*($x**2)) && $y>=0) || ($y>=$x**2-5 && $y>=0 && $y<=1-$x) || ($y>=$x**2-5 && $y<=1-$x && $x>=0 && $y>=(2-2*($x**2)))){
        echo"Точка лежит в заданной области";
    } else{ 
        echo"Точка не лежит в заданной области ";
    }
    ?>
    <hr>
    <?php
    if(($y<=(2-2*($x**2)) && $y>=0) || ($y<=1-$x && $y>=$x**2-5 && ($y>=0 || ($y>=2-2*($x**2)) && $x>=0))){
        echo"Точка лежит в заданной области";
    } else{ 
        echo"Точка не лежит в заданной области";
    }
    ?>
    <hr>
</body>
</html>