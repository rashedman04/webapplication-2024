<?php
include "Operations/connect.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(isset($_SESSION['accessed'])){
  $itemName=$_POST['itemName'];
  $itemPrice=$_POST['itemPrice'];
  $itemImage=$_POST['itemImage'];
  $userEmail=$_SESSION['accessed'];
 
  $sqlCheck="select * from `cart` where `itemName`='$itemName' and userEmail='$userEmail';";
  $checkRes=mysqli_query($con,$sqlCheck);
  $checkRow=mysqli_fetch_assoc($checkRes);
    if($checkRow){
      echo "<script>alert('This item is already in the cart.')</script>";

    }else{
  $sql="INSERT INTO `cart`
  (`itemName`, `itemPrice`, `itemImage`, `userEmail`)
   VALUES ('$itemName','$itemPrice','$itemImage','$userEmail');";
   $result=mysqli_query($con,$sql);
    }
  }else{
    echo "<script>alert('Please sign in first to add items.');
        
    window.location.href='./logIn.php';
    </script>"; 

  }}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
        include 'Partial/meta.php'
    ?>    <link rel="stylesheet" href="Style/reset.css" />
    <link rel="stylesheet" href="Style/footer.css" />
    <link rel="stylesheet" href="Style/nav.css" />
    <link rel="stylesheet" href="Style/category.css" />
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

    <title>Sweats</title>
  </head>
  <body>
  <?php
        include 'Partial/nav.php'
    ?>
    <main>
      <article class="subHeader">
        <h1>Sweats</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores atque
          impedit unde, doloribus ducimus obcaecati quaerat dolor eius ratione
          recusandae id ipsum numquam voluptatem deserunt dignissimos quisquam
          natus, nemo quasi!
        </p>
        </article>
      <article class="itemsContainer">





        <?php
        $sql="select * from `item` where category=4;";
        $result=mysqli_query($con,$sql);

         while($row=mysqli_fetch_array($result)){
            echo
            "<section class='item'>
            <div class='card'>
              <div class='cardInner'>
                <div class='cardFront'>
                  <img src='./Assets/".$row['category']."/".$row['id'].".jpg' alt='".$row["name"]."' />
                </div>
  
                <div class='cardBack'>
                  <h2>".$row["name"]."</h2>
                  <h3>ingredients:</h3>
                  <ul>
                ";
                $ingredients=explode(',',$row["ingredients"]);
                foreach ($ingredients as $ingredient) {
                    echo "<li>".$ingredient."</li>";
                }
                echo
                "
                  </ul>
                </div>
              </div>
            </div>
  
            <h4 class='info'>Price:".$row['price']."</h4>
            <form action='' method='post'>
            <input type='hidden' name='itemName' value='".$row["name"]."'>
            <input type='hidden' name='itemPrice' value=".$row["price"].">
            <input type='hidden' name='itemImage' value='./Assets/".$row['category']."/".$row['id'].".jpg'>
            <input type='submit' class='add' value='Add To Cart'>
            </form>
          </section>";
         }
          

        ?>

      </article>
    </main>
    <?php
        include 'Partial/footer.php'
    ?>
    
  </body>
  <script  src="Script/script.js"></script>

</html>
