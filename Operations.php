<?php
//Common operations
$a = 8 + 2; // 10, addition
$a = 8 - 2; // 6, subtraction
$a = 8 * 2; // 16, multiplication
$a = 8 / 2; // 4, division
$a = 8 % 2; // 0 modulo
$a = 8 ** 2; // 64 exponentiation

//Increment and decrement

//prefix increment
$a = 12;
$b = ++$a; // $b = 13
echo "a = $a   b = $b <br />";
//postfix increment
$a = 12;
$b = $a++; // $b = 12
echo "a = $a   b = $b <br />";
// prefix decrement
$a = 12;
$b = --$a; // $b = 11
echo "a = $a   b = $b <br />";
// postfix decrement
$a = 12;
$b = $a--; // $b = 12
echo "a = $a   b = $b <br />";

//Concatenating strings
// Use . and you don't have to echo many times
$a="Привет, ";
$b=" Вася";
echo $a . " " . $b . "! <br />";

//Comparison operations
/**
 * Comparison operations are usually used in conditional constructions,
 * when it is necessary to compare two values,
 * and depending on the result of the comparison,
 * perform some actions. The following comparison operations are available.*/
//Equality and Identity Operator
$a = (2 == "2");    // true (values are equal)
$b = (2 === "2");   // false (values represent different types) ?!?!?!?!?!
//inequality operators
$a = (2 != "2");    // false, since the values are equal
$b = (2 !== "2");   // true, since the values represent different types

// Operator <=> or spaceship?
/**
0 if both values are equal

1 if the value on the left is greater than the value on the right

–1 if the value on the left is less than the value on the right
 */
$a = 2 <=> 2;     // 0    (эквивалентно 2 == 2)
$b = 3 <=> 2;     // 1    (эквивалентно 3 > 2)
$c = 1 <=> 2;     // -1   (эквивалентно 1 < 2)
echo "a=$a   b=$b   c=$c <br />";  // a=0  b=1  c=-1
//Logical operations


//exemple
$a = (true && false);   // false
// analogically
$a = (true and false);  // false

$b = (true || false); // true
// analogically
$b = (true or false); // true

$c = !true;           // false

//Bitwise operations
//&
$a = 4; //100
$b = 5; //101
echo $a & $b; //  4 - 100
//|
$a = 4; //100
$b = 5; //101
echo $a | $b; //  5 - 101

$a=12;
$a += 5;
echo $a; //  17



$a=12;
$a -= 5;
echo $a; //  7



$a=12;
$a *= 5;
echo $a; //  60


$a=12;
$a /= 5;
echo $a; //  2.4

$a=12;
$a .= 5;
echo $a; //  125

$b="12";
$b .="5"; //  125


$a=12;
$a %= 5;
echo $a; //  2


$a=8;
$a **= 2;
echo $a; //  64 (8 in equle 2)


$a=5; $a &= 4; // 101&100=100 - 4


$a=5; $a |= 4; // 101|100=101 - 5


$a=5; $a ^= 4; // 101^100=001 - 1


$a=8; $a <<= 1; // 1000 << 1 = 10000 - 16


$a=8; $a >>= 1; // 1000 >> 1 = 100 - 4