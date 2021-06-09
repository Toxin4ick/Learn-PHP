<?php
try {
    // подключаемся к серверу
    $conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "root");
    // SQL-выражение для создания таблицы
   // $sql = "create table users (id integer auto_increment primary key, name varchar(30), age integer);";
    // выполняем SQL-выражение
    //$conn->exec($sql);
    echo "Table Users has been created";
    // выполняем SQL-выражение
   // $conn->exec($sql);
    echo "Database has been created";
    // SQL-выражение для добавления данных
    $sql = "INSERT INTO Users (name, age) VALUES ('Tom', 37)";

    $affectedRowsNumber = $conn->exec($sql);
    echo "В таблицу Users добавлено строк: $affectedRowsNumber";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}