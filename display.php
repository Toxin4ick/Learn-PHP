<?php
//Here the variables $ name and $ surname value is obtained by $ _POST that the user enters in the form.
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
//The echo statement will print to the page any value or text that the user entered.
echo "Ваше имя: <b>".$name . " " . $surname . "</b>";
?>
