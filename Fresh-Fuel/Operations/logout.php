<?php
include "./connect.php";
session_start();

if(isset($_SESSION['accessed'])){
    
        unset($$_SESSION['accessed']);
        header("location:../index.php");
        
}else{
    die(mysqli_error($con));
}

session_destroy();

?>