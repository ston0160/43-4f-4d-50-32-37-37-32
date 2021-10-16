<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StarWars</title>
  <!-- Stylesheets-->
  <link rel="stylesheet" href="styles/index-style.css" />
  <link rel="stylesheet" href="styles/footer-style2.css" />
  <link rel="stylesheet" href="styles/header-style.css" />
  <link rel="icon" href="images/favicon_starwars.png" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- HEADER NAVBAR -->
  <?php
  include 'inc/navbar.php';
  ?>

  <!-- HOMEPAGE CONTENT -->
  <!-- BANNER IMAGE -->
  <div class="banner-homepage" id="banner-homepage"></div>
  <!-- BANNER BUTTONS -->
  <script>
    function newBannerJedi() {
      let x = document.getElementById("banner-homepage");
      x.style.backgroundImage =
        "url('images/banner-jedi-concil-2415x1200.png')";
    }

    function newBannerEmpire() {
      let x = document.getElementById("banner-homepage");
      x.style.backgroundImage =
        "url('images/banner-sith-empire-2415x1200.png')";
    }

    function oldBanner() {
      let x = document.getElementById("banner-homepage");
      x.style.backgroundImage =
        "url('images/banner-homepage-2415x1200.png')";
    }
  </script>
  <div class="banner-content">
    <div class="banner-text">
      <h1>Quality Star Wars Colletables</h1>
      <p>
        An Adelaide-based shop specialized in Star Wars Figurines.
        We have a wide variety of figurines ranging from the Rise of the Empire era to the New Jedi Order.
        Shipping Australia Wide.
      </p>
    </div>
    <div class="main-buttons">
      <button class="button" id="rebellion-btn" onmouseover="newBannerJedi()" onmouseout="oldBanner()" onclick="window.location.href='category.php?association=Light'">
        <span>The Rebellion</span>
      </button>
      <button class="button" id="empire-btn" onmouseover="newBannerEmpire()" onmouseout="oldBanner()" onclick="window.location.href='category.php?association=Dark'">
        <span>The Empire</span>
      </button>
    </div>
  </div>

  <!-- FOOTER -->
  <?php
  include 'inc/footer2.php';
  ?>
</body>

</html>