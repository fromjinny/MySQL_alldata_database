<?php
    require "connect.php";
    $username=$_POST['username']; 
    $password=$_POST['password']; 
    class Customer{
        function Customer($id,$user,$password,$fullname,$email){
            $this->id=$id;
            $this->username=$user;
            $this->password=$password;
            $this->fullname=$fullname;
            $this->email=$email;

        }
    }
    if(strlen($username)>0 &&strlen($password)>0){
        $clientarr= array();
        $query="SELECT * FROM iotusers WHERE FIND_IN_SET('$username', username) AND FIND_IN_SET('$password',password)";
        $data=mysqli_query($con,$query);
        if($data){
            while($row = mysqli_fetch_assoc($data)){
                array_push($clientarr, new Customer($row['id']
                                                    ,$row['username']
                                                    ,$row['password']
                                                    ,$row['fullname']
                                                    ,$row['email']));
            }
            if(count($clientarr)>0){
                echo json_encode($clientarr);

            }else{
                echo "Fail";
            }
        }

    }else{
        echo "Empty";
    }
?>

