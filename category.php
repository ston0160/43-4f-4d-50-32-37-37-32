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
  </body>
</html>