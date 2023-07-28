<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $con= new mysqli('localhost','root','','form');
    if($con){
        $first=$_POST['first'];
        $last=$_POST['last'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];

        $sql= "INSERT INTO `data`(`firstname`, `lastname`, `gender`, `email`, `mobile`) VALUES ('$first','$last','$gender','$email','$mobile')";

        $result=mysqli_query($con,$sql);
        if($result){
            echo "<script>alert('data inserted sussefully')</script>";
           
        }else{
            die(mysqli_error($con));
        }
       
    }
    else{
        die(mysqli_error($con));
    }
};

?>