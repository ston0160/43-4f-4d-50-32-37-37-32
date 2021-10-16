<!DOCTYPE html>
<html lang="en">

<head>
  <title>About us | Star Wars Collectables</title>
  <meta charset="UTF-8" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="styles/aboutUs-style.css">
  <link rel="stylesheet" href="styles/header-nav-style.css">
  <link rel="stylesheet" href="styles/footer-style2.css">
  <link rel="icon" href="images/favicon_starwars.png" type="image/png" />
  <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Richard's Code -->
  <!-- HEADER - NAVBAR -->
  <?php
  require_once "inc/header-nav.php"
  ?>
  <div class="nav-spacer"></div>

  <!-- ABOUT US PAGE BANNER -->
  <div class="aboutUsPage-banner">
    <div class="aboutUsPage-bannerInformation">
      <h1>About Us</h1>
    </div>
  </div>

  <!-- CONTENT -->

  <div class='aboutUs-flex-container'>
    <div class="aboutUs-infoCard">
        <img src="images/YODA1.png" alt="Avatar" style="width:25%">
        <div class="container">
            <h4><b>Name</b></h4>
            <p>Content</p>
     </div>
</div>
  </div>

  <!-- FOOTER -->
  <?php
  require_once "inc/footer2.php"
  ?>

</body>

</html>