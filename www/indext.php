<?php
// PDO
$connection = new PDO('mysql:host=localhost;dbname=mytest;charset=utf8', $user="root", $pass="mysql");


//Запись данных 
//$query = "INSERT users (name, age, login, password) VALUE ('Даниал','19','danik01','aowidj3')";
//$count = $connection->exec($query);


$name = 'Olya';
$age = 45;
$login = 'olyalya02';
$password = 'oaiwjd55';

$param = [
    'n'=>$name,
    'age'=>$age,
    'l'=>$login,
    'p'=>$password
];

$sql = "INSERT users (name, age, login, password) VALUE (:n,:age,:l,:p)";
$query = $connection->prepare($sql);

$query->execute($param);