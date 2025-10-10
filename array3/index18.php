<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="content">
        <br>
        <h1>задача на многомерный массив 18</h1>
        <br>
        <?php
        $hero = ["Васюткин", "Иванов", "Михеев", "Анабоков", "Челобряк", "Емельянов", "Чумак", "Папаев"];
        $starts = ["","1 старт", "2 старт", "3 старт", "4 старт","5 старт","6 старт","7 старт", "Общ. зачет"];
        echo"<table ><tr>";
        foreach ($starts as $value) echo "<td> $value </td>";
        echo"</tr>";

        for ($i=0; $i < count($hero); $i++) { 
            $count = 0;
            for ($j= 0; $j < count($starts)-2; $j++) {
                do {
                    $array[$i][$j] = mt_rand(1, count($hero));
                    $isOnlyOn = 1;
                    for ($k=0; $k < $i; $k++) { 
                        if ($array[$i][$j] == $array[$k][$j]) $isOnlyOn = false;
                    }
                } while (!$isOnlyOn);
                $count += $array[$i][$j];
            }
            $array[$i][count($starts)-2] = $count;
        }
        for ($i=0; $i < count($hero); $i++) {
            $countRate = 1;
            for ($j=0; $j < count($hero); $j++) { 
                if($array[$i][count($starts)-2]>$array[$j][count($starts)-2]){
                    $countRate += 1;
                }elseif($array[$i][count($starts)-2]==$array[$j][count($starts)-2] && $i != $j)
                    $countRate += ($array[$i][count($starts)-3]>$array[$j][count($starts)-3]) ? 1 : 0;
                // else $countRate = 1;
            } 
            $array[$i][count($starts)-1] = $countRate;
            // $count = $array[$i][count($starts)-2] ;
            // echo "<script>console.log(`$countRate`); </script>";
        }
        
        for ($i=0; $i < count($hero); $i++) { 
            echo"<tr><td> $hero[$i] </td>";
            for ($j= 0; $j < count($starts)-2; $j++) {
                echo"<td>" . $array[$i][$j] . "</td>";      
            }
            $count = $array[$i][count($starts)-2] ;
            $rate = $array[$i][count($starts)-1];
            echo "<td>$rate место ($count)</td></tr>";
        }
        
        // for ($i=0; $i < count($hero); $i++) { 
        //     echo"<tr><td> $hero[$i] </td>";
        //     $count = 0;
        //     for ($j= 0; $j < count($starts)-2; $j++) {
        //         $array[$i][$j] = mt_rand(1, count($hero));
        //         do {
        //             $array[$i][$j] = mt_rand(1, count($hero));
        //             $isOnlyOn = 1;
        //             for ($k=0; $k < $i; $k++) { 
        //                 if ($array[$i][$j] == $array[$k][$j]) $isOnlyOn = false;
        //             }
        //         } while (!$isOnlyOn);
        //         $count += $array[$i][$j];
        //         echo"<td>" . $array[$i][$j] . "</td>";      
        //     }
        //     echo "<td>($count)</td></tr>";
        // }
        echo "</table>";
        ?>
    </div>
</body>
</html>