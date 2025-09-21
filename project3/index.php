<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    задача 6.47
    <br>
    <?php
    $a = 7;
    $k = 2;
    for ($i=5673; $i <= 5673; $i++) { 
        $summNum = 0;
        $iSecond=$i;
        for ($j=0; $j < strlen($i);$j++) { 
            $summNum = $summNum + ($iSecond % 10);
            $iSecond=$iSecond/10;
        }
        echo"Число $i cумма цифр = $summNum ";
        if($summNum > $a) echo"это больше $a.";
        elseif($summNum < $a) echo"это меньше $a.";
        else echo"это равно $a.";
        if($k==strlen($i)) echo " Это число ". $k . " значное.";
        else echo " Это число не ". $k . " значное, оно ". strlen($i) . " значное.";
        echo "<br>";
    }
    ?>
    <hr>
    задача 8.30
    <br>
    <?php
    $a = 1;
    $b = 2000;
    $max=$a-1;
    $min=$b+1; 
    $dividerMax=0;
    $dividerMin=$b+1;
    for ($a; $a<=$b; $a++) { 
        $divider=0;
        for ($i=1; $i <= $a; $i++) { 
            ($a % $i == 0) ? $divider++ :"";
        }
        if($dividerMax <= $divider){
            $max = $a;
            $dividerMax = $divider;
        }
        if($dividerMin > $divider){
            $min = $a;
            $dividerMin = $divider;
        } 
    }
    echo"Больше всего делителей у числа $max целых $dividerMax";
    echo "<br>";    
    echo"Меньше всего делителей у числа $min целых $dividerMin";
    ?>
    <hr>
</body>
</html>