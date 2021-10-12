<?php 
session_start(); 
require_once "inc/dbconn.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles/cartStyle.css"> 
        <meta charset="utf-8"/>
        <meta name="author" content="Illia Sheshyn"/>
        <meta name="description" content="Shopping Cart"/>
        <title>Shopping Cart</title>
    </head>
    <body>
        <div class="wrapper">

            <div class="title">
                <div class="inner-title"><h3 class="pageTitle">SHOPPING CART</h3></div>
            </div>

            <div class="content">
                <div class="group">

                    <div class="cart">
                        <div class="inner-cart">
                            <div class="cartHeader">Cart</div>
                            <?php if (isset($_SESSION)) {
                                // print_r($_SESSION);
                                // echo "id =   $prodIdent";
                                foreach ($_SESSION as $key => $val){
                                    
                                    $sql = "SELECT * FROM product WHERE prodName = '$key'";
                                    $sqlimage = "SELECT imageRef FROM productimage WHERE prodName = '$key'";

                                    if ($result = mysqli_query($conn, $sql)) {

                                        if (mysqli_num_rows($result) > 0) {
                                          $product = mysqli_fetch_assoc($result);
                                          mysqli_free_result($result);
                            ?>
                                        <div class="cartItem">
                                            <div class="inner-cartItem group">
                                                <div class="itemImage"></div>
                                                <div class="itemContent">
                                                    <div class="itemTitle"><?php echo $product['prodName']; ?></div>
                                                    <div class="itemDescr">
                                                        <p><?php echo $product['description'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <?php
                                        }
                                    }
                                }
                            }
                            ?>
                            




                        </div>
                    </div>

                    <div class="sidebar">
                        <div class="inner-sidebar">sidebar</div>
                    </div>

                    <div class="footer">footer</div>

                </div>
            </div>

        </div>
    </body>
</html>