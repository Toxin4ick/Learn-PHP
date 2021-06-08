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
//Anonymous class
$person = new class {

    public $name;
    function sayHello(){
        echo "Hello!<br>";
    }
};
$person->sayHello();
$person -> name = "Sam";
echo "Name: " . $person -> name . "<br>";

//Inheritance
class Person5
{
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Имя: $this->name<br>";
    }
}
//Class Employee child Person5
class Employee extends Person5
{
    public $company;
    function __construct($name, $company)
    {
        parent::__construct($name);
        $this->company = $company;
    }
    function displayInfo()
    {
        parent::displayInfo();
        echo "Работает в $this->company<br>";
    }
}

$tom = new Employee("Tom", "Microsoft");
$tom -> displayInfo();


//Access modifiers: public, protected, private
class Person6
{
    private $privateA ="private";
    public  $publicA = "public";
    protected $protectedA = "protected";

    private function getPrivateMethod()
    {
        echo "private method <br />";
    }

    protected function getProtectedMethod()
    {
        echo "protected method <br />";
    }

    public function getPublicMethod()
    {
        echo "public method <br />";
    }
    function test()
    {
        $this->getPrivateMethod();
        $this->getProtectedMethod();
        $this->getPublicMethod();

        echo "$this->privateA <br />";
        echo "$this->protectedA <br />";
        echo "$this->publicA <br />";
    }
}
class Employee2 extends Person6
{
    function test()
    {
        //echo $this->privateA;
        echo $this->protectedA;
        echo $this->publicA;
        //$this->getPrivateMethod();
        $this->getProtectedMethod();
        $this->getPublicMethod();
    }
}
$person = new Person6;
// $person->getPrivateMethod(); // not available since private
// $person->getProtectedMethod(); // unavailable because protected
$person->getPublicMethod();
// echo $person->privateA; // not available since private
// echo $person->protectedA; // unavailable because protected
echo $person->publicA;

//interface
interface iMessenger
{
    function send();
}
// One interface child another interface
interface iEmailMessenger extends iMessenger
{

}
class SimpleEmailMessenger implements iEmailMessenger
{
    function send()
    {
        echo "Отправка сообщения на email.";
    }
}
$outlook = new SimpleEmailMessenger();
$outlook->send();

//abstract class
abstract class Messenger
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo "Выход из мессенджера...";
    }
}

class EmailMessenger extends Messenger
{
    function send($message)
    {
        echo "$this->name отправляет сообщение: $message<br>";
    }
}
$outlook = new EmailMessenger("Outlook");
$outlook->send("Hello PHP 8");
$outlook -> close();

//traits
trait Printer
{
    public function printSimpleText($text) { echo "$text<br>"; }
    public function printHeaderText($text) { echo "<h2>$text<h2>"; }
}

class Message
{
    use Printer;
}
$myMessage = new Message();
$myMessage->printSimpleText("Hello World!");
$myMessage->printHeaderText("Hello PHP 8");

//Copying Class Objects
class Person7{

    public $name;
    function __construct($name){

        $this->name = $name;
    }
}
$tom = new Person7("Tom");
$bob = clone $tom;      // copy the object from $ tom to the variable $ bob
$bob->name = "Bob";
echo $tom->name; // Tom