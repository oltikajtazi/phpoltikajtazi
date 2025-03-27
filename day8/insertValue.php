<?php

$host = "localhost";
$db="dbolti";
$user="root";
$pass ="root";

try{
    $pdo= new PDO("mysql:host=$host; dbname=$db", $user, $pass);


    $username="olti";
    $passwords="olti123";

    $sql = "INSTERT INTO USERS (id,username,password) Values (1,$username','$password')";

    $pdo ->exec($sql) ;
    echo "user is addedd";
  }catch(Exception $e){
    echo "Error createin teble" . $e ->getMessage();
}