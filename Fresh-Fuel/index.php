<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
        include 'Partial/meta.php'
    ?>    <link rel="stylesheet" href="Style/reset.css">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/nav.css">   
    <link  rel="stylesheet" href="Style/styles.css" /> 
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

    <title>Home</title>
    
  </head>
  <body>
    <?php
        include 'Partial/nav.php'
    ?>
    <main >
      <article class="home">

        <img src="./Assets/home_pic.png" alt="home">
        <h1>Fresh Fuel</h1>
        <br>
        <p>
          Energize your body with fresh fuel, nourishing it with the vibrant vitality of wholesome, healthy foods.
        </p>
        
        
      </article>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="./salads.php"><img src="./Assets/Salad.jpg" class="d-block w-100" alt="Salads"></a>
          </div>
          <div class="carousel-item">
            <a href="./toasts.php"><img src="./Assets/Toast.jpg" class="d-block w-100" alt="Toasts"></a>
          </div>
          <div class="carousel-item">
            <a href="./sweats.php"><img src="./Assets/Sweet.jpg" class="d-block w-100" alt="sweats"></a>
          </div>
          <div class="carousel-item">
            <a href="./juices.php"><img src="./Assets/Juice.jpg" class="d-block w-100" alt="juices"></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      <article class="research">
        <div class="chartContainter">
          <div class="chart">
          <img src="./Assets/chart1.png" alt="chart">
          <p>Diverse weight distribution in the Middle East</p>
        </div>
        <div class="chart">
          <img src="./Assets/chart2.png" alt="chart">
          <p>Health issues associated with obesity</p>
        </div>
        </div>

        <p class="chartConclusion">In the pursuit of optimal health, these charts serve as beacons of awareness. By understanding the weight distribution in the Middle East and the associated health risks, we empower ourselves to make informed choices, fostering a commitment to wellness. Let these insights inspire a journey towards a healthier, vibrant life—where mindful choices become the cornerstone of well-being.</p>
      </article>
        
    </main>
    <?php
        include 'Partial/footer.php'
    ?>
</body>
<script  src="Script/script.js"></script>


</html>
