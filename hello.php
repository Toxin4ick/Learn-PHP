<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8" />
</head>
<body>
<h1>
    <?php
    //An example of embedding php code in html
    echo "Первый сайт на PHP";

    //Abbreviated version of php tags
    ?>
    <?= "Первый сайт на PHP"; ?>
</h1>
<div>
    <?php
    echo "<h2>Заголовок параграфа</h2>";
    echo "Текст параграфа";
    ?>
    2 + 2 =  <?= 2+2 ?> <br />
    <?php
    // define the $ num variable
    $num = 10;
    // output the value of the variable $ num to the web page
    echo $num."<br/>";

    // change the value of the variable
    $num = 22;
    echo $num."<br/>";
    //assigning a value to another variable
    $a = 15;
    $b = $a;
    echo $b;
    //check what happens if you do not assign a value
    $numerror;
    echo $numerror;
    ?>
</div>
</body>
</html>
