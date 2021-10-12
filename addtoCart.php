<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    // echo session_id();
    // echo "<br>";
    $prodID = htmlspecialchars($_GET['prodID']);

    $quantity = htmlspecialchars($_GET['quantity']);
    // $_SESSION['$identifier'] = $product
    $_SESSION[$prodID] += $quantity;
    echo "item has been added into session <br>";

    if (isset($_GET['quantity'])) {
        echo "quantity =  $quantity <br>";
        echo "id =   $prodID <br>";

        print_r($_SESSION);
    }

    echo "<br> <a href='cart.php'>CART</a> <br>";
    echo "<a href='check_session.php'>CHECK</a>";
    // header("location: product.php?id=$prodIdent");


    ?>
</body>

</html>