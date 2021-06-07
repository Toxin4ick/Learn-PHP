<?php
//Links

$tom = "Tom";
$sam = &$tom;   // & this is link
$sam = "Sam";
echo "tom = $tom <br>";   // tom = Sam
echo "sam = $sam";              // sam = Sam

//
function square(&$a)
{
    $a *= $a;
    echo "a = $a";
}

$number = 5;
square($number);            //a=25
echo "<br />number = $number";  //number=25 not 5

//Const
//PI will never change
/**
const PI = 3.14;
$pi_value = PI;
echo pi_value;      // 3.14
 */

//define function
define("NUMBER", 22);
echo NUMBER;    // 22

//Magic constants
//I have a list of these constants written in notion
echo "<br />Cтрока " . __LINE__ . " в файле " . __FILE__;

//Checking for the existence of a variable
//isset
$message;
if(isset($message))
    echo $message;
else
    echo "<br />переменная message не определена";

//empty
$message = "";
if(empty($message))
    echo "<br />переменная message не определена";
else
    echo $message;

//unset
//yeap, i can destroy variable
$a=20;
echo $a; // 20
unset($a);
echo $a;

//Getting and setting the type of a variable. Type conversion
//gettype
$a = 10;
$b = "10";
echo gettype($a); // integer
echo "<br>";
echo gettype($b);  // string

//Setting the type. settype () function
$a = 10.7;
settype($a, "integer");
echo $a; // 10

//Array operations

//is_array
$users = ["Tom", "Bob", "Sam"];
$isArray = is_array($users);
echo ($isArray==true)?"это массив":"это не массив";

//count/sizeof
$users = ["Tom", "Bob", "Sam"];
$number = count($users);
echo "В массиве users $number элемента/ов";

//shuffle wtf
$users = ["Tom", "Bob", "Sam", "Alice"];
shuffle($users);
print_r($users);
//compact
$model = "Apple II";
$producer = "Apple";
$year = 1978;

$data = compact("model", "producer", "year");
print_r($data); // Array ( [model] => Apple II [producer] => Apple [year] => 1978 )

//Sorting arrays= sort
$users = ["Tom", "Bob", "Sam","Alice"];
asort($users);
print_r($users); // Array ( [3] => Alice [1] => Bob [2] => Sam [0] => Tom )

// natsort()
$os = array("Windows 7", "Windows 8", "Windows 10");
natsort($os);
print_r($os);
// Array ( [0] => Windows 7 [1] => Windows 8 [2] => Windows 10)