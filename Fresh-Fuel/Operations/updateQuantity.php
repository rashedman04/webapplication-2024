<?php
include "./connect.php";

if(isset($_GET['update'])){
    
        $id=$_GET['cartId'];
        $itemQuanitity=$_GET['quantity'];
        $sql="update cart set itemQuantity=".$itemQuanitity." where id=".$id.";";
        $result=mysqli_query($con,$sql);
        if($result){
            header("location:../cart.php");
        }else{
            die(mysqli_error($con));
        }
        
}else{
    die(mysqli_error($con));
}


?>