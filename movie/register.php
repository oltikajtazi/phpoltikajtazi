<?php

     include_once('config.php');
     if(isset($_POST['submit']))
     {
        $name= $_POST['emri'];
        $username= $_POST['username'];
        $email= $_POST['email'];

        $tempPass=$_POST['password'];
        $password= password_hash( $tempPass, PASSWORD_DEFAULT);

        

        if(empty($name) || empty($username) || empty($email) || empty($password)){
            echo "fill all the fields. ";
        }else{
            $sql ="INSERT INTO users (name,username,email,password) 
            Values (name,:username,:email,:password)";

            $insertSql = $conn->prepare($sql);
            $insertSql->bindParam(':name', $name);
            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);
            

            $insersql -> execute();

            header("Location:login.php");
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    

        }


     }

?>