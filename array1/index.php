<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    задача c массивами 1
    <br>
    <?php
    $sumNum = [50, 45, 40, 35, 30];
    $result = 0;
    foreach ($sumNum as $num) {
        $result += $num;
    }
    echo'$result = ' . $result 
    ?>
    <hr>
    задача c массивами 2
    <br>
    <?php
    $randomMatrix = [];
    for ($i=0; $i < 10; $i++) { 
        $randomMatrix[] = mt_rand(-44, 50);
    }
    foreach ($randomMatrix as $num) {
        echo $num . ' ';
    }
    echo '<hr>';
    for ($i=count($randomMatrix)-1; $i >=0 ; $i--) { 
        echo $randomMatrix[$i] . ' ';
    }
    ?>
    <hr>
    задача c массивами 3
    <br>
    <?php
    $randomImg = ["elephant.jpg", "leo.jpg", "zebr.jpg"];
    $randImg = $randomImg[mt_rand(0,2)];
    // $randImg = array_rand($randomImg);
    // $rImg = $randomImg[$randImg];
    echo "<img src='img/$randImg' height='300px'/>";
    ?>
    <hr>
    задача c массивами 4
    <br>
    <?php
    $arrTausen = [];
    $countMinus = 0; 
    $sum = 0;
    for ($i=0; $i < 100; $i++) { 
        $arrTausen[] = mt_rand(-15, 14);
        echo $arrTausen[$i] . ', ';
        // array_push($arrTausen, mt_rand(-15, 14));
    }
    for ($i=count($arrTausen)-1; $i >=0 ; $i--) {  
        $value = $arrTausen[$i];
        $countMinus += ($value < 0)? 1 : 0;
        if ($countMinus == 1) {
            $sum += $value;
        } elseif ($countMinus == 2){
            $sum += $value;
            break;
        }
        // break;
    }
    // foreach (array_reverse($arrTausen) as $value ) {
    //     $countMinus += ($value < 0)? 1 : 0;
    //     if ($countMinus == 1) {
    //         $sum += $value;
    //     } elseif ($countMinus == 2){
    //         $sum += $value;
    //         break;
    //     }
    //     break;
    // }
    echo "Сумма чисел от предпоследнего до последнего отриц. числа = $sum"
    ?>
    <hr>
</body>
</html>