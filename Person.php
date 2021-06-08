<?php
namespace base\classes;
const adminName = "Odmen";
function printPerson($person){

    echo $person->name . "<br>";
}
class Person
{
    public $name;
    function __construct($name) { $this->name = $name; }
}