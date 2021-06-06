<?php
// int
$num = -100;
echo $num."<br />";
// using binary, octal and hexadecimal numbers
$num_10 = 28; // decimal number
$num_2 = 0b11100; // binary number (28 decimal)
$num_8 = 034; // octal number (28 decimal)
$num_16 = 0x1C; // hexadecimal number (28 decimal)
echo "num_10 = $num_10 <br>";
echo "num_2 = $num_2 <br>";
echo "num_8 = $num_8 <br>";
echo "num_16 = $num_16 <br>";

//Float type (floating point numbers)
$a1 = 1.5;
$a2 = 1.3e4; // 1.3 * 10^4
$a3 = 6E-8; // 0.00000006

//Bool type (boolean type)
$foo = true;
$boo = false;

//String type
$a=10;
$b=5;
//variables in double quotes are replaced with values
$result = "$a+$b <br>";
echo $result;
//variables in single quotes remain unchanged.
$result = '$a+$b';
echo "$result <br>";
$text = "Модель \"Apple II\"";
//The special value null
$a = null;
echo "a = $a";

//Dynamic typing
$id = 123;
echo "<p>id = $id</p>";
// we change the int type to string for the same variable
$id = "jhveruuyeru";
echo "<p>id = $id</p>";