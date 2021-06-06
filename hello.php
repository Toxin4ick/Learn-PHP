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
    2 + 2 =  <?= 2+2 ?>
</div>
</body>
</html>
