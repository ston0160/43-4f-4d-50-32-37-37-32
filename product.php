<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Product Page</title>
    <meta charset="UTF-8">
    <meta name="Richard" content="Star Wars">
    <link rel="stylesheet" href="styles/style_proPage.css"/>
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

    <div class="contentArea">
      
    <div class="imageContentArea_proPage">
        <div class="mainImage_proPage">
          <img src="images/example_front.png" alt="Main" style="width:100%">
        </div>

        <div class="subImages_proPage">
            <img src="images/example_front.png" alt="Front" style="width:25%">
            <img src="images/example_side.png" alt="Side" style="width:25%">
            <img src="images/example_bottom.png" alt="Bottom" style="width:25%">
        </div>
    </div>
       

        <div class="productInformation_proPage">
          <div class="productInformationTopSection_proPage">
          <h1>Product Name</h1>
          <p class="price_proPage">AUD$0.00</p>
        </div>
        
        <div class="productInformationMiddleSection_proPage">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna tempus congue magna dapibus, venenatis tincidunt lectus praesent vestibulum.</p>
        </div> 

        <div class="productInformationBottomSection_proPage">
          <div class="buttonCart_proPage">
            <p><button>Add to Cart</button></p>
          </div>

          <div class="quantityInput_proPage">
            <label class="quantityText_proPage">Quantity</label>
            <input type="number" class="quantityTextInput_proPage" step="1" min="1" max="99" name="quantity" value="1">
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
