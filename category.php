<!DOCTYPE html>
<html lang="en">

<head>
    <title>Star Wars - Category</title>
    <meta charset="UTF-8"/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="styles/category-style.css">
    <link rel="stylesheet" href="styles/header-nav-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
    <script src="" defer></script>
</head>

  <body>
    <?php 
    require_once "inc/dbconn.php";
    
    $category = ($_GET["category"]);
    $sql = "SELECT * FROM product, productimage WHERE product.prodID = productimage.prodID AND category = '$category' AND imageRef LIKE '%1.jpg';";

    if ($result = mysqli_query($conn, $sql)){
      if (mysqli_num_rows($result) > 0){
          while ($row = mysqli_fetch_assoc($result)){
              echo "<a href='product.php?id=$row[prodID]'>
              <img src='$row[imageRef]'/>
              </a>";
          }
          mysqli_free_result($result);
      }
  }
  mysqli_close($conn);
    ?>




  <!-- Richard's Code -->

  <!-- HEADER - NAVBAR -->
  <?php
  require_once "inc/header-nav.php"
  ?>
  <div class="nav-spacer"></div>
    
  <!-- START OF CATEGORY PAGE CONTENT -->
  <div class="productPage-banner">
    <div class="productPage-bannerInformation">
      <h1>Categories</h1>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit tempora explicabo voluptatem error pariatur omnis.</p>
    </div>
  </div>

  <div class="categoryPage-productInformationCard">

    <div class="categoryPage-productImage">
        <img src="images/example_front.png" alt="Product Image" style="width:75%">
    </div>

    <div class="categoryPage-productData">
        <h1 class="categoryPage-productName">Product Name</h1>
        <p class="categoryPage-productPrice">AUD$0.00</p>
    </div>

  </div>
  <!-- End of Richard's Code -->



    <!-- <div class="row">
      <div class="column">
       <img src="images/LukeSkywalker1.jpg"/>
      </div>
      <div class="column">
       <img src="images/Rey1.jpg"/>
      </div>
     <div class="column">
        <img src="images/Yoda1.jpg"/>
    </div>
    </div> -->

    </div>
      <!-- FOOTER -->
    <?php
    require_once "inc/footer2.php"
    ?>
  
</body>
</html>