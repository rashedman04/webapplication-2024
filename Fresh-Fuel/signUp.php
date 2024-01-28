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
    <link rel="stylesheet" href="Style/signUp.css" />
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
    <title>Sign Up</title>
  </head>
  <body>
  <?php
        include 'Partial/nav.php'
    ?>
    <main>

        <div class="signUpContainer">
            <h1>Create an account</h1>
            <form action="./Operations/register.php" method="post" class="signUp">
              <div class="inputArea">
                <input type="text" name="email" id="email" required>
                <span>Email</span>
              </div>
              <div class="name">
                <div class="inputArea nameInput">
                  <input type="text" name="fName" id="fName" required>
                  <span>First Name</span>
                </div>
                <div class="inputArea nameInput">
                  <input type="text" name="lName" id="lName" required>
                  <span>Last Name</span>
                </div>
              </div>
              <div class="inputArea">
                <input type="tel" name="phoneNumber" id="phoneNumber" required>
                <span>PhoneNumber</span>
              </div>
              <div class="inputArea">
                <input type="password" name="password" id="password" required>
                <span>Password</span>
              </div>
              <div class="inputArea">
                <input type="password" name="confirmPassword" id="confirmPassword" required>
                <span>Confirm Password</span>
              </div>
              <input type="submit" class="button" value="Submit">
              <div class="logInPage"><p class="member">Have an account? <a href="logIn.php">logIn here</a></p></div>
            </form>
    
          </div>

    </main>
    <?php
        include 'Partial/footer.php'
    ?>
    
    </body>
    <script  src="Script/signUP.js"></script>
    <script  src="Script/script.js"></script>

  </html>
  