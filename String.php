<?php
$input = "This is the end";
$search = "is";
$position = strpos($input, $search); // 2
if($position!==false)
{
    echo "Позиция подстроки '$search' в строке '$input': $position";
}
$input = "Мама мыла раму";
$search = "мы";
// not work with Russian language
$position = strpos($input, $search); // 9
$position = mb_strpos($input, $search); // 5

//strrpos
$input = "This is the end";
$search = "is";
$position = strrpos($input, $search); // 5
$position = mb_strrpos($input, $search);
$input = "The World is Mine";
$input = strtolower($input);
echo  $input;

$input = "Мама мыла раму";
$subinput1 = mb_substr($input, 2);
$subinput2 = mb_substr($input, 2, 6);
echo $subinput1;
echo "<br>";
echo $subinput2;