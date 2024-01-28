<header>
      <nav>
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars fa-lg" style="color: #F3F3F3;"></i>
        </label>
        <label class="logo"
          ><img src="Assets/logo.png" alt="logo"
        /></label>
        <ul class="menu">
          <li><a href="index.php" id='index'>HOME</a></li>
          <li><a href="">PROGRAMS</a></li>
          <li>
            <div class="dropdown">
              <button class="categoryBtn">CATERGORY</button>
              <ul class="dropdownContent">
                <li><a href="./toasts.php" id='toasts'>Toasts</a></li>
                <li><a href="./salads.php" id='salads'>Salads</a></li>
                <li><a href="./juices.php" id='juices'>Juices</a></li>
                <li><a href="./sweats.php" id='sweats'>Sweats</a></li>
              </ul>
            </div>
          </li>
          <?php
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }

          if(isset($_SESSION['accessed'])) {
          echo "<li>
            <a href='cart.php' id='cart'>Cart<i class='fa-solid fa-cart-shopping fa-sm' style='color: #F3f3f3;'></i> </a>
          </li>
          <li>
          <a href='Operations/logout.php'>Logout </a>
          </li>";
          
        }else{
          echo "<li><a href='logIn.php' id='logIn'>Log In</a></li>";
          
        }
          ?>
        </ul>
        <?php
            $baseBefore=basename($_SERVER['PHP_SELF']);
            $base=explode('.',$baseBefore);

            echo "<script> document.addEventListener('DOMContentLoaded', function() {
              document.querySelector('#$base[0]').classList.add('active');
            });

            document.querySelector('.logo').addEventListener('click', function () {
              window.location.href = './index.php';
            });
            
            </script>";
        ?>
      </nav>
    </header>