<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Product Page</title>
    <meta charset="UTF-8">
    <meta name="Richard" content="Star Wars">
    <link rel="stylesheet" href="styles/product-style.css"/>
    <link rel="stylesheet" href="styles/header-nav-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
    <script src="" defer></script>
</head>

<body>
  <!-- HEADER - NAVBAR -->
  <?php
  require_once "inc/header-nav.php"
  ?>
  <div class="nav-spacer"></div>
    
  <!-- START OF PRODUCT PAGE CONTENT -->
  <div class="productPage-banner"></div>

  <div class="productPage-contentArea">
      
    <div class="productPage-imageContentArea">
      <div class="productPage-mainImage">
        <img src="images/example_front.png" alt="Main" style="width:100%">
      </div>

      <div class="productPage-subImages">
        <img src="images/example_front.png" alt="Front" style="width:25%">
        <img src="images/example_side.png" alt="Side" style="width:25%">
        <img src="images/example_bottom.png" alt="Bottom" style="width:25%">
      </div>
    </div>

    <div class="productPage-productInformation">
      <div class="productPage-productInformationTopSection">
        <h1>Product Name</h1>
        <p class="productPage-price">AUD$0.00</p>
      </div>
        
      <div class="productPage-productInformationMiddleSection">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna tempus congue magna dapibus, venenatis tincidunt lectus praesent vestibulum.</p>
      </div> 

      <div class="productPage-productInformationBottomSection">
        <div class="productPage-buttonCart">
        <p><button>Add to Cart</button></p>
      </div>

      <div class="productPage-quantityInput">
          <label class="productPage-quantityText">Quantity</label>
          <input type="number" class="productPage-quantityTextInput" step="1" min="1" max="99" name="quantity" value="1">
      </div>
    </div>
  </div>

  </div>
      <!-- FOOTER -->
    <?php
    require_once "inc/footer2.php"
    ?>
</body>
</html>
