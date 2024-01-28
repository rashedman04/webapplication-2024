<?php
include "./connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $email=$_POST['email'];
   $fName=$_POST['fName'];
   $lName=$_POST['lName'];
   $phoneNumber=$_POST['phoneNumner'];
   $password=$_POST['password'];
    
   $sql="INSERT INTO `users`
   (`email`, `fName`, `lName`, `password`, `phoneNumber`)
    VALUES ('$email','$fName','$lName','$password','$phoneNumber');";
    $result=mysqli_query($con,$sql);
    if($result){
    header("location:../logIn.php");
    }else{
        die(mysqli_error($con));
    }
}
?>