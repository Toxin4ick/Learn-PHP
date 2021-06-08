<?php
namespace work;
include "Person.php";

use \base\classes\Person;
use const \base\classes\adminName;
use function \base\classes\printPerson;

$tom = new Person(adminName);
printPerson($tom);  // Odmen