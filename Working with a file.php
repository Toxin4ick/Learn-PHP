<?php
//open
$fd = fopen("form.php", 'r') or die("не удалось открыть файл");
fclose($fd);


//read
$fd = fopen("form.php", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fgets($fd));
    echo $str;
}
fclose($fd);

$str = htmlentities(file_get_contents("form.php"));
echo $str;
//fread()
$fd = fopen("form.php", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
    $str = htmlentities(fread($fd, 600));
    echo $str;
}
fclose($fd);
//rename
if (!rename("hello.txt", "subdir/hello.txt"))
    echo "Ошибка перемещения файла";
else echo "Файл перемещен";

//unlink
if (unlink("hello_copy.txt"))
    echo "Файл удален";
else echo "Ошибка при удалении файла";

//rmdir
if(rmdir("newdir"))
    echo "Каталог удален";
else
    echo "Ошибка при удалении каталога";


//flock
$fd = fopen("hello.txt", 'r+') or die("Ошибка открытия файла");
$str = "Hello World!";

if (flock($fd, LOCK_EX)) // setting an exclusive write lock
{
    fseek($fd, 0, SEEK_END); //jump to the end of the file
    fwrite($fd, "$str") or die("Ошибка записи"); // recording
    flock($fd, LOCK_UN); // unblocking
}
fclose($fd);