<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    задача 1
    <br>
    <?php
    $a=1;
    $b=0;
    $c=0;
    if($a+$b+$c==1 || $a+$b+$c==3){
        echo'q=1';
    }
    else{
        echo'q=0';
    }
    ?>
    <hr>
    задача 2
    <br>
    <?php
    $a=1;
    $b=3;
    $c=2;
    $d=$b**2-4*$a*$c;
    if($d>0){
        $x1=(-$b+sqrt($d))/(2*$a);
        $x2=(-$b-sqrt($d))/(2*$a);
        echo"x1 = $x1 x2 = $x2";
    } elseif($d==0){
        $x1=-$b/(2*$a);
        echo"x = $x1   ";
    } else{
        echo'корней нет';
    }
    ?>
</body>
</html>