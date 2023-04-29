<?php
    require "connect.php";
    $id=$_GET['id'];

   if(strlen($id)>0){
        $query="DELETE FROM iotusers WHERE id=$id";
        $data=mysqli_query($con,$query);
        if($data){
            echo "deleted";
        }else{
            echo "failed! try again";
        }
    }
   

?>