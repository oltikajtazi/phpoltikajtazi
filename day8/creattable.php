<?php

$host = "localhost";
$db="dbolti";
$user="root";
$pass ="root";

try{
    $pdo= new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    $sql = "CREATE TABLE USERS (
    id INT(6) NOT NULL PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password varchar(50) not null)";

    $pdo -> exec($sql);
    echo "table is created succesfully";
    
    
}catch(Exception $e){
    echo "Error createin teble" . $e ->getMessage();
}
?>