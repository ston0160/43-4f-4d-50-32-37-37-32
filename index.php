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

  <div class="main-buttons">
    <button class="button" id="rebellion-btn" onmouseover="newBannerJedi()" onmouseout="oldBanner()" onclick="window.location.href='category.php?association=Light'">
      <span>The Rebellion</span>
    </button>
    <button class="button" id="empire-btn" onmouseover="newBannerEmpire()" onmouseout="oldBanner()" onclick="window.location.href='category.php?association=Dark'">
      <span>The Empire</span>
    </button>
  </div>
  <div class="banner-text">
    <h1>eCommerce Website</h1>
    <p>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos,
      ratione. Facilis id perspiciatis officia sint, enim assumenda numquam
      cupiditate adipisci eveniet totam, asperiores fugiat labore cumque,
      accusantium.
    </p>
  </div>

  <!-- FOOTER -->
  <?php
  include 'inc/footer2.php';
  ?>
</body>

</html>