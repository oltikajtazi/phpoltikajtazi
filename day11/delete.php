<?php
   include_once("config.php");

   $id=$_GET['id'];
   $sql="DELETE from users where id=:id";


   $getUsers = $conn->prepare($sql);

   $getUsers->bindParam(':id',$id);

   $getUsers->execute();

   header("Location:dashboard.php");
?>