<?php
session_start();
echo session_id();
echo session_name();
$name = "Tom";
$age = 36;
setcookie("name", $name);
setcookie("age", $age, time() + 3600);
echo "Куки установлены";
if (isset($_COOKIE["name"])) echo "Name: " . $_COOKIE["name"] . "<br>";
if (isset($_COOKIE["age"])) echo "Age: " . $_COOKIE["age"] . "<br>";
if (isset($_SESSION["name"]) && isset($_SESSION["age"]))
{
    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
    echo "Name: $name <br> Age: $age";
}
unset($_SESSION["age"]); 
session_destroy();