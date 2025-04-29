<?php
include "config.php";

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($passwords))
    {
        echo "fill all the fields";
        header("refresh:2; url=login.php");
    }else{
        $sql = "SELECT * FROM user where username=:username";
        $insertSql = $conn-> prepare($sql);
        $insertSql ->bindparm(':username', $username);
        $insertSql-> execute();

       if($insertSql->rowCount()>0){
            $data = $instertSql->fetch(); 
            if(password_verify($password,$data['passwords'])){
                $_SESSION['username']=$data['username'];
            }else{
                echo"Password incorrect";
                header("refresh:2; url=login.php");
            }
        }else{
            echo "user not found";
        }
      
    }
}

?>