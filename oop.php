<?php
// Create class
class Person
{
    public $name, $age;

    function hello()
    {
        echo "Hello!<br>";
    }
}
//Create object
$tom = new Person();
$tom->name = "Tom"; // setting the $ name property
$tom->age = 36; // setting the $ age property
$personName = $tom->name;    // getting the value of the property $ name
echo "Имя пользователя: " . $personName . "<br>";
$tom->hello(); // method call hello ()
print_r($tom);

//The keyword this
class Person2
{
    public $name = "Undefined", $age = 18;

    function displayInfo()
    {
        //Through this we refer to the variable $name and $age
        echo "Name: " . $this->name ."; Age: " . $this->age . "<br>";

    }
}
$tom = new Person2();
$tom -> name = "Tom";
$tom -> displayInfo();   // Name: Tom; Age: 18

//__construct
class Person3
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function displayInfo()
    {
        echo "Name: $this->name; Age: $this->age<br>";
    }
}
//now, to create an object, we need to pass values for the corresponding parameters:
$tom = new Person3("Tom", 36);
$tom -> displayInfo();

$bob = new Person3("Bob", 41);
$bob -> displayInfo();

//__destruct
class Person4
{
    public $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo()
    {
        echo "Имя: $this->name ; Возраст: $this->age <br>";
    }
// I don't know why need destroy object
    function __destruct()
    {
        echo "Вызов деструктора";
    }
}