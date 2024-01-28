<?php
include("./connect.php");
session_start();
if(isset($_GET['check'])){


    $userEmail=$_GET['user'];
    $sql="DELETE FROM cart WHERE userEmail= '".$userEmail."'; ";
    $result=mysqli_query($con,$sql);
    if($result){
        //to appear the alert i dont use php header i used JS
        echo "<script>alert('the order has been checkedout wait the delivery,,,');
        
        window.location.href='../index.php';
        </script>"; 
    }else{
        die(mysqli_error($con));
    }
    
}else{
die(mysqli_error($con));

}



?>