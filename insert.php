<?php

    require "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    
    if(strlen($username)>0 &&strlen($password)>0 &&strlen($fullname)>0&&strlen($email)>0){
        $query="INSERT INTO iotusers VALUES (null,'$username','$password','$fullname','$email')";
        $data= mysqli_query($con,$query);
        if($data){
            echo "SUCCESSFUL";
        }else{
            echo "FAILED!!! PLEASE TRY AGAIN";

        }

    }else{       
        echo "NULL!!";
    }

?>