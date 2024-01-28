<?php
include "Operations/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
        include 'Partial/meta.php'
    ?>    <link rel="stylesheet" href="Style/reset.css" />
    <link rel="stylesheet" href="Style/footer.css" />
    <link rel="stylesheet" href="Style/nav.css" />
    <link rel="stylesheet" href="Style/cart.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
 

    <title>My Cart</title>
  </head>
  <body>
  <?php
        include 'Partial/nav.php'
    ?>
    <main >

        <h1 class="cartTitle">My shopping Cart</h1>
       
  
  
  <?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
} 
 $email=$_SESSION['accessed'];
  $sql="SELECT * FROM cart WHERE userEmail='$email';";
  $result=mysqli_query($con,$sql);
  if($result){
    
    $rowNumber=mysqli_num_rows($result);
    if($rowNumber>0){
      if($rowNumber==1){
       echo "<style>
          footer{
          position:fixed;}
        </style>";
        }
      
      $total=0;
    echo "<div class='cartContainer'>";
    while ($row=mysqli_fetch_array($result)){
      $totalItem=$row['itemQuantity']*$row['itemPrice'];
      $total+=$totalItem;
      echo "
          <div class='item'>
            <img src=".$row['itemImage']." alt='item image'>
            <h5>".$row['itemName']."</h5>
            <h6>".$row['itemPrice']."$</h6>
          </div>
          <div class='quantity'>
          <form action='./Operations/updateQuantity.php' method='get'>
          <input type='hidden' name='cartId' value=".$row['id'].">
          <input class='numnum' type='number' name='quantity'  min='1' id='itemQuantity' value=".$row['itemQuantity'].">
          <button name='update' type='submit'>Update</button>
        </form>
          </div>
          <div class='remove'>
          <form action='./Operations/delete.php' method='get'>
          <input type='hidden' name='cartId' value=".$row['id'].">
          <button name='delete' type='submit'>
            <i class='fa-solid fa-trash fa-xl' style='color: #696c72;'></i>
            </button>
            </form>
          </div>
          <div class='price'>
            Price:".$totalItem."$
          </div>";
    }
      $tax=$total*.16;
      $delivery=2;
      $finalTotal=$delivery+$total+$tax;
    echo "
        </div>
        <div class='priceContainer'>
          <div>Sub Total:".$total."$</div>
          <div>Tax:".$tax."$</div>
          <div>Delivery:".$delivery."$</div>
          <div>Total:".$finalTotal."$</div>
        </div>
        <div class='buttonContainer'>
          <button class='shopping' > <a href='./index.php'>Continue Shopping</a></button>
          <form action='./Operations/checkout.php' method='get'>
          <input type='hidden' value=".$_SESSION['accessed']." name='user'>
          <button type='submit' name='check' class='checkOut'> Check Out</button>
          </form>
        </div>";

      }else{
        echo "<style>
          footer{
          position:fixed;
        }
            h3{
              margin-left:200px;
            }
            </style>";
        echo "<h3>There is No items yet</h3>
         <div class='buttonContainer'>
          <button class='shopping' > <a href='./index.php'>Continue Shopping</a></button>
          
        </div>";
      }}
      ?>

      
    </main>
    <?php
        include 'Partial/footer.php'
    ?>
    </body>

    <script  src="Script/script.js"></script>

  </html>
  