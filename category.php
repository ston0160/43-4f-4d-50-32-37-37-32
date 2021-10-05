<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Star Wars</title>
    <meta charset="UTF-8"/>
    <meta name="author" content=""/>
    <link rel="stylesheet" href="styles/checkoutStyle.css">
    <script src="" defer></script>
  </head>
  <body>
    <?php 
    require_once "inc/dbconn.php";
    
    $category = ($_GET["category"]);
    $sql = "SELECT * FROM product, productimage WHERE product.prodID = productimage.prodID AND category = '$category' AND imageRef LIKE '%1.jpg';";

    if ($result = mysqli_query($conn, $sql)){
      if (mysqli_num_rows($result) > 0){
          // echo "<ul id='tasks'>";
          while ($row = mysqli_fetch_assoc($result)){
              echo "<a href='checkout.php'>
              <img src='$row[imageRef]'/>
              </a>";
          }
          // echo "</ul>";
          mysqli_free_result($result);
      }
  }
  mysqli_close($conn);
    ?>

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
  </body>
</html>