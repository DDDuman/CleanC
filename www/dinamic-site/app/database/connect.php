<?php
$driver = 'mysql'; 
$host = 'localhost'; 
$db_name = 'dinamic-site'; 
$user = "root";
$password = "mysql";
$host = "localhost";
$db = "dinamic-site";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]; /*пробрасываем опции*/
$dsn = 'mysql:host='.$host.';dbname='.$db;

try{
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $i){
    die("Error connect DB");
}


