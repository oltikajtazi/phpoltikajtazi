<?php

$host = "localhost";
$db="dbolti";
$user="root";
$pass ="root";

try{
    $pdo= new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    $sql = "ALTER TABLE products add email VARCHAR(255)";


    $pdo -> exec($sql);
    echo "coum is created succesfully";
    
    
}catch(Exception $e){
    echo "Error createin teble" . $e ->getMessage();
}
?>