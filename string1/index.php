<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Задача 1</h1>
    <?php
    $str = "php";
    echo strtoupper($str);
    ?>
    <h1>Задача 2</h1>
    <?php
    $str = "Кузин Максим Александрович";
    $str = explode(" ", $str);
    echo "$str[1] $str[0]";
    ?>
    <h1>Задача 3</h1>
    <?php
    $str = "Привет мир";
    echo $str . "<br>" . substr_count(strtolower($str),"и");
    ?>
    <h1>Задача 4</h1>
    <?php
    $str = "штмл ксс пхп";
    $str1 = mb_substr($str, 0, 4);
    $str2 = mb_substr($str, 5, 3);
    $str3 = mb_substr($str, 9, 3);
    echo $str1 ."<br>". $str2 ."<br>" . $str3; 
    ?>
    <h1>Задача 5</h1>
    <?php
    $str = "image.png";
    echo (mb_substr($str,strpos($str,".")+1, 3) == "png") ? "да" : "нет";
    ?>
    <h1>Задача 6</h1>
    <?php
    $str = "стра";
    $str = (mb_strlen($str)>5) ? mb_substr($str,0, 5) . "..." : $str;
    echo $str;
    ?>
    <h1>Задача 7</h1>
    <?php
    $str = "who are you? maybe god)";
    $str = str_replace(['a','b','c'],[1,2,3], $str);
    echo $str;
    ?>
    <h1>Задача 8</h1>
    <?php
    $str = "abc abc abc";
    echo mb_strrpos($str,"b")+1;
    ?>
    <h1>Задача 9</h1>
    <?php
    $str = "html css php";
    $str = explode(" ", $str);
    print_r($str);
    ?>
    <h1>Задача 10</h1>
    <?php    
    $str2 = strtotime( "23-07-2023");
    $str1 = strtotime( "23-07-2024");
    echo "Между этими датами проло: " . abs($str2-$str1)/(60*60*24) . " дней";
    ?>
</body>
</html>