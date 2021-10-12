<?php
session_start();
$prodID = htmlspecialchars($_GET['prodID']);
$quantity = htmlspecialchars($_GET['quantity']);
$_SESSION[$prodID] += $quantity;
//echo "item has been added into session <br>";

//if (isset($_GET['quantity'])) {
//  echo "quantity =  $quantity <br>";
//echo "id =   $prodID <br>";

// print_r($_SESSION);
//}

//echo "<br> <a href='cart.php'>CART</a> <br>";
//echo "<a href='check_session.php'>CHECK</a>";
// header("location: product.php?id=$prodIdent");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/addtoCart-style.css">
    <link rel="stylesheet" href="styles/header-nav-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <!-- HEADER - NAVBAR -->
    <?php
    require_once "inc/header-nav.php";
    require_once "inc/dbconn.php";
    ?>
    <div class="nav-spacer"></div>

    <!-- PAGE CONTENT -->
    <div class="flex-container">
        <div class="column-30vh">
            <div class="icon-check"><i class="far fa-check-circle"></i></div>
            <h2>Well Done!</h2>
            <h2>Your item is now in your shopping cart</h2>
            <h3>What would you like to do next?</h3>
            <div class="flex-inner-container">
                <button onclick="window.location.href='index.php'" id="submit-button" type="" class="btn-one"><i class="fas fa-arrow-circle-left"></i> MORE SHOPPING</button><br>
                <button onclick="window.location.href='cart.php'" id="submit-button" type="" class="btn-two">LET's CHECKOUT <i class="fas fa-arrow-circle-right"></i></button><br>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php
    require_once "inc/footer2.php"
    ?>

</body>

</html>