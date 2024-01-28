<?php
include "./connect.php";

if(isset($_GET['delete'])){
    
        $id=$_GET['cartId'];
        $sql="delete from cart where id=".$id.";";
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