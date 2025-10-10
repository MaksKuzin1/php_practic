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
        <h1>задача на многомерный массив 4</h1>
        <br>
        <?php
        $descipline = ["","Математика", "Физика", "Химия", "Информатика", "География", "Ср.балл"];
        $student = ["Васюткин", "Иванов", "Михеев", "Анабоков", "Челобряк","Ачпучмек", "Михалков"];
        echo"<table ><tr>";
        foreach ($descipline as $value) echo "<td> $value </td>";
        echo"</tr>";
        for ($i=0; $i < count($student); $i++) { 
            echo"<tr><td> $student[$i] </td>";
            $count = 0;
            for ($j= 0; $j < count($descipline)-2; $j++) {
                $array[$i][$j] = mt_rand(2,5);
                $count += $array[$i][$j];
                echo"<td>" . $array[$i][$j] . "</td>";    
            }
            $count /= count($descipline) -2;
            echo "<td>$count</td></tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>
</html>