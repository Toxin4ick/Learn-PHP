<!DOCTYPE html>
<html>
<head>
    <title>METANIT.COM</title>
    <meta charset="utf-8" />
</head>
<body>
<?php
//checkbox
if(isset($_POST["technologies"])){

    $technologies = $_POST["technologies"];
    foreach($technologies as $item) echo "$item<br />";
}
//switchers
if(isset($_POST["course"]))
{
    $course = $_POST["course"];
    echo $course;
}
if(isset($_POST["courses"]))
{
    $courses = $_POST["courses"];
    foreach($courses as $item) echo "$item<br>";
}
//File upload.... UPD Multiupload
if($_FILES)
{
    foreach ($_FILES["uploads"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["uploads"]["tmp_name"][$key];
            $name = "upload/" . $_FILES["uploads"]["name"][$key];
            move_uploaded_file($tmp_name, "$name");
        }
    }
    echo "Файлы загружены";
}
?>
<h3>Форма ввода данных</h3>
<form method="POST">
    <p>ASP.NET: <input type="checkbox" name="technologies[]" value="ASP.NET" /></p>
    <p>PHP: <input type="checkbox" name="technologies[]" value="PHP" /></p>
    <p>Node.js: <input type="checkbox" name="technologies[]" value="Node.js" /></p>
    <input type="submit" value="Отправить">
</form>
<form method="POST">
    <input type="radio" name="course" value="ASP.NET" />ASP.NET <br>
    <input type="radio" name="course" value="PHP" />PHP <br>
    <input type="radio" name="course" value="Node.js" />Node.js <br>
    <input type="submit" value="Отправить">
</form>
<h3>Форма ввода данных</h3>
<form method="POST">
    <select name="courses[]" size="4" multiple="multiple">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
    </select><br>
    <input type="submit" value="Отправить">
</form>
<h2>Загрузка файла</h2>
<h2>Загрузка файла</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="uploads[]" /><br />
    <input type="file" name="uploads[]" /><br />
    <input type="file" name="uploads[]" /><br />
    <input type="submit" value="Загрузить" />
</form>