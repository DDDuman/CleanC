<?php
require_once 'setting.php';

// подключение к MySQL
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Error connection');

// запрос данных 
$query = "SELECT * FROM users";
$result = $connection->query($query);

if (!$result) die('Error select');


$rows = $result->num_rows;
for ($i = 0; $i < $rows; ++$i) {
    $result->data_seek($i);
    echo 'ID: ' . $result->fetch_assoc()['id_user'] . ' ';
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>';
}

$result->close();
$connection->close();


//echo '<pre>';
//print_r($rows); 
//echo '</pre>'; 
 