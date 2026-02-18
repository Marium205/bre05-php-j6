<?php

$host = "db.3wa.io";
$port = "3306";
$dbname = "mariyamabdulrauf_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "mariyamabdulrauf_";
$password = "e832cf62941e3fa2da0f3adea80ed631";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);
?>