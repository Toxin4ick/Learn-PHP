<?php
try
{
    // code that can throw an exception
    $a = 5;
    $b = 0;
    $result = $a / $b;
    echo $result;
}
catch(DivisionByZeroError $ex)
{
    // exception handling
    echo "Произошло исключение:<br>";
    echo $ex . "<br>";
}
echo "Конец работы программы";
try
{
    $result = 5 / 0;
    echo $result;
}
catch(ParseError $p)
{
    echo "Произошла ошибка парсинга";
}
catch(DivisionByZeroError $d)
{
    echo "На ноль делить нельзя";
}

try
{
    $result = 5 / 0;
    echo $result;
}
catch(DivisionByZeroError $ex)
{
    echo "Сообщение об ошибке: " . $ex->getMessage() . "<br>";
    echo "Файл: " . $ex->getFile() . "<br>";
    echo "Номер строки: " . $ex->getLine() . "<br>";
}


//throw
class Person7
{
    private $name, $age;
    function __construct($name, $age)
    {
        if($age < 0)
        {
            throw new Exception("Недействительный возраст");
        }
        $this->name = $name;
        $this->age = $age;
    }
    function printInfo()
    {
        echo "Name: $this->name<br>Age: $this->age";
    }
}
$tom = new Person7("Tom", -105);
$tom->printInfo();