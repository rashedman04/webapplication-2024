<?php
include "Operations/connect.php";
?>
<?php
  session_start();
if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from users where email='$email' and password='$password';";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row){
        $_SESSION["accessed"]=$email;
        header("location:index.php");
        }else{
        
          echo "<script>alert('Wrong email or password.');
        
          window.location.href='./logIn.php';
          </script>"; 
    
      }
        

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
        include 'Partial/meta.php'
    ?>    <link rel="stylesheet" href="Style/reset.css" />
    <link rel="stylesheet" href="Style/footer.css" />
    <link rel="stylesheet" href="Style/nav.css" />
    <link rel="stylesheet" href="Style/login.css" />
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
    <title>Sign In</title>
  </head>
  <body>
  <?php
        include 'Partial/nav.php'
    ?>
    <main>
        <div class="logInContainer">
            <img src="Assets/logo-no-background.png" alt="logo">
            <h1>Log In</h1>
            <form action="logIn.php" method="post" class="logIn">
              <div class="inputArea">
                <input type="text" name="email" id="email" required>
                <span>Email</span>
              </div>
              <div class="inputArea">
                <input type="password" name="password" id="password" required>
                <span>Password</span>
              </div>
     
              <input type="submit" class="button" name="signIn" value="Sign-in">
              <label for="">Or</label>
              <input type="button" onclick="location.href='signUp.php';" class="button" id="signUp" value="Create an account">
    
            </form>
          </div>


    </main>
    <?php
        include 'Partial/footer.php'
    ?>
    </body>
    <script  src="Script/script.js"></script>

  </html>
  