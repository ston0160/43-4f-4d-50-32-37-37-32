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
  <?php
  require_once "inc/dbconn.php";

  $id = ($_GET["id"]);
  $sql = "SELECT * FROM product WHERE prodID = '$id'";
  $sqlimage = "SELECT imageRef FROM productimage WHERE prodID = '$id'";
  $i = -1;

  if ($result = mysqli_query($conn, $sql)){
    if (mysqli_num_rows($result) > 0){
      $product = mysqli_fetch_assoc($result);
      mysqli_free_result($result);
    }
  }

  if ($result = mysqli_query($conn, $sqlimage)){
    if (mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_row($result)){
        $i++;
        $productimage[$i] = $row[0];
      }
      mysqli_free_result($result);
    }
  }
        ?>
        

    <!-- HEADER - NAVBAR -->
    <?php
    require_once "inc/header-nav.php"
    ?>
    <div class="nav-spacer"></div>
    
    <!-- START OF PRODUCT PAGE CONTENT -->
    <div class="productPage-banner"></div>

    <div class="contentArea">
      
        <div class="mainImage_proPage">
        <?php echo "<img src='$productimage[0]' alt='Main' style='width:100%'>" ?>
        </div>

        <div class="subImages_proPage">
        <?php echo "<img src='$productimage[0]' alt='Front' style='width:25%'>"?>
        <?php echo "<img src='$productimage[1]' alt='Side' style='width:25%'>"?>
        <?php echo "<img src='$productimage[2]' alt='Bottom' style='width:25%'>"?>
        </div>
       

        <div class="productInformation_proPage">
          <div class="productInformationTopSection_proPage">
          <h1><?php echo "$product[prodName]"; ?></h1>
          <p class="price_proPage">AUD$<?php echo "$product[price]"; ?></p>
        </div>
        
        <div class="productInformationMiddleSection_proPage">
          <p><?php echo "$product[description]"; ?></p>
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
<?php
mysqli_close($conn);
?>
  </body>
</html>
