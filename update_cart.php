<?php
session_start();
// echo session_id();
// echo "<br>";
$prodName = $_POST['prodName'];

$quantity = $_POST['quantity'];
// $_SESSION['$identifier'] = $product
$_SESSION[$prodName] += $quantity;
echo "item has been added into session <br>";

// key => value

// id => quantity 

if (isset($_POST['quantity'])) {
    echo "quantity =  $quantity <br>";
    echo "id =   $prodName <br>";

    print_r($_SESSION);
}

echo "<br> <a href='cart.php'>CART</a> <br>";
echo "<a href='check_session.php'>CHECK</a>";
// header("location: product.php?id=$prodIdent");
?>
