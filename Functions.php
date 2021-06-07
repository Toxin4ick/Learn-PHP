<?php
//Creating and calling a simple function with no parameters
    function hello()
    {
        echo "Hello PHP";
    }
    hello();
//function with parameters
function displayInfo($name, $age)
{
    echo "<div>Имя: $name <br />Возраст: $age</div><hr>";
}

displayInfo("Tom", 36);
displayInfo("Bob", 39);
displayInfo("Sam", 28);

//Variable number of parameters
function sum(...$numbers)
{
    $result = 0;
    // array in function
    foreach($numbers as $number) {
        $result += $number;
    }
    echo "<p>Сумма: $result</p>";
}
sum(1, 2, 3);
sum(2, 3);
sum(4, 5, 8, 10);

//Returning values and the return statement

function add($a, $b)
{
    return $a + $b;
}

$result = add(5, 6);
echo $result;           // 11

//An example of what happens if you continue to write after return
function add2($a, $b)
{
    $sum = $a + $b;
    return $sum;        // function completion
    echo "sum = $sum";  // this line will not be executed
}
//If the function does not use a return statement, it still returns a value, only in this case the value is null:
function add3($a, $b)
{
    $sum = $a + $b;
    echo "sum = $sum<br />";
}

$result = add(5, 6);

if($result === null)
    echo "result равен null";
else
    echo "result не равен null";

//Anonymous functions
$hello = function($name)
{
    echo "<h2>Hello $name</h2>";
};
// just variable as standard function ?!?!?!?!!?
$hello("Tom");
$hello("Bob");

//Anonymous functions uses in comeback
function welcome($message)
{
    $message();
}
$goodMorning = function() { echo "<h3>Доброе утро</h3>"; };
$goodEvening = function() { echo "<h3>Добрый вечер</h3>"; };

welcome($goodMorning);
welcome($goodEvening);
welcome(function(){ echo "<h3>Привет</h3>"; });

//understande
function sum2($numbers, $condition)
{
    $result = 0;
    foreach($numbers as $number){
        if($condition($number))
        {
            $result += $number;
        }
    }
    return $result;
}
//We check the output values of the array after, in another function, but what prevented us from doing this through if
$isEvenNumber = function($n){ return $n % 2 === 0;};

$isPositiveNumber = function($n){ return $n > 0;};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum2($myNumbers, $isPositiveNumber);
$evenSum = sum2($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum";

//Closure
//An even stranger thing
$a = 8;
$b = 10;

$closure = function($c) use($a, $b)
{
    return $a + $b + $c;
};

$result = $closure(22); // 40
echo $result;

//Arrow functions
//The same, just more succinctly
$a = 8;
$b = 10;

$closure = fn($c) => $a + $b + $c;

$result = $closure(22); // 40

//Generator
//This means that the yield statement works in much the same way as return, only after its execution, the function continues to work.
function generateNumbers($start, $end)
{
    for($i = $start; $i < $end; $i++){
        yield $i;
    }
}
foreach(generateNumbers(4, 9) as $number)
{
    echo $number; // 45678
}

