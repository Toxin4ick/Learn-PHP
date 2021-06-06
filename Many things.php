<?php
//if..else

$a = 4;
if ($a > 0) {
    echo "Переменная a больше нуля";
} else {
    echo "Переменная a меньше нуля";
}
echo "<br>конец выполнения программы<br>";

//elseif
$a = 5;
if($a>0){
    echo "Переменная a больше нуля";
}
elseif($a < 0){
    echo "Переменная a меньше нуля";
}
else{
    echo "Переменная a равна нулю";
}

//Defining a condition
if (0) {}       // false
if (-0.0) {}    // false
if (-1) {}      // true
if ("") {}      // false (пустая строка)
if ("a") {}     // true (непустая строка)
if (null) {}    // false (значие отсутствует)

//Alternative  if
$a = 5;
if($a > 0):
    echo "<br>Переменная a больше нуля";
elseif($a < 0):
    echo "<br>Переменная a меньше нуля";
else:
    echo "<br>Переменная a равна нулю";
endif;

//Ternary operation
//very hard for me
$a = 1;
$b = 2;
$z = $a < $b ? $a + $b : $a - $b;
echo $z;


//switch..case
/**
$a = 3;
if($a==1)     echo "сложение";
elseif($a==2) echo "вычитание";
elseif($a==3) echo "умножение";
elseif($a==4) echo "деление";
 */
$a = 3;
switch($a)
{
    case 1:
        echo "сложение";
        break;
    case 2:
        echo "вычитание";
        break;
    case 3:
        echo "умножение";
        break;
    case 4:
        echo "деление";
        break;
}

//match. This is new chip in PHP 8.0
/**
 * $a = 2;
switch($a)
{
case 1:
$operation = "сложение";
break;
case 2:
$operation = "вычитание";
break;
default:
$operation = "действие по умолчанию";
break;
}
echo $operation;
 */
$a = 2;
$operation = match($a)
{
    1 => "сложение",
    2 => "вычитание",
    default => "действие по умолчанию",
};
echo $operation;

//Cycles

//Cycle for

for ($i = 1; $i < 10; $i++) {
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
//or
for ($i = 1; $i < 10; $i++):
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
endfor;

//Cycle while
$counter = 1;
while($counter<10)
{
    echo $counter * $counter . "<br />";
    $counter++;
}
//If there is only one statement in the while block, then the curly braces of the block can be omitted.
$counter = 0;
while(++$counter<10)
    echo $counter * $counter . "<br />";

//do..while
$counter = 1;
do
{
    echo $counter * $counter . "<br />";
    $counter++;
}
while($counter<10);

//Continue and break
for ($i = 1; $i < 10; $i++)
{
    $result = $i * $i;
    if($result>80)
    {
        break;
    }
    echo "Квадрат числа $i равен $result <br/>";
}

for ($i = 1; $i < 10; $i++)
{
    if($i==5)
    {
        continue;
    }
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}

//Nested cycles
?>
<table>
    <?php
    for ($i = 1; $i < 10; $i++)
    {
        echo "<tr>";
        for ($j = 1; $j < 10; $j++)
        {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

<?php
//arrays
$numbers = array();
//or
$numbers = [1, 2, 3, 4];
//Index numbering starts at zero, that is, the first element of the array has index 0, the second element has index 1, and so on.
echo $numbers[2];   // 9
    /**
    the function print_r() shows how the keys and values
    of elements are matched in a specific array
     */
    print_r($numbers);

    //Loop through an array and a foreach cycle
$users = [1 => "Tom", 4 => "Sam", 5 => "Bob", 21 => "Alice"];
$num = count($users);
foreach($users as $element)
{
    echo "$element<br />";
}

//Associative arrays
//just um ... don't use numbers, but words?
$words = ["red" => "красный", "blue" => "синий", "green" => "зеленый"];

foreach($words as $english => $russian)
{
    echo "$english : $russian<br />";
}
?>
<body>
<?php
//Multidimensional arrays
$phones = array(
    "apple"=> array("iPhone 12", "iPhone X", "iPhone 12 Pro") ,
    "samsumg"=>array("Samsung Galaxy S20", "Samsung Galaxy S20 Ultra"),
    "nokia" => array("Nokia 8.3", "Nokia 3.4"));
foreach ($phones as $brand => $items)
{
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value)
    {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}
?>
</body>
