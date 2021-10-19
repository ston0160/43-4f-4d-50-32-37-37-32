<?php
session_start();
require_once 'inc/lock.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | Star Wars Collectables</title>
    <link rel="stylesheet" href="styles/thankyou-style.css">
    <link rel="stylesheet" href="styles/header-nav-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <link rel="icon" href="images/favicon_starwars.png" type="image/png" />
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER - NAVBAR -->
    <?php
    require_once "inc/header-nav.php";
    require_once "inc/dbconn.php";

    // Insert into DB Code Start

    // $custIDCount = $custIDCount + 1;
    // $orderNoCount = $orderNoCount + 1;
    $query = "INSERT INTO customer(name, address, suburb, postCode, state, email) VALUES (?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssss", $_POST['name'], $_POST['address'], $_POST['suburb'], $_POST['postcode'], $_POST['state'], $_POST['email']);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    $cardquery = "INSERT INTO creditcard(cardNo, nameOnCard, expiryMonth, expiryYear, cvv) VALUES (?, ?, ?, ?, ?);";

    $stmt = mysqli_prepare($conn, $cardquery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", crypt($_POST['cardno'], $salt), $_POST['cardname'], $_POST['month'], $_POST['year'], crypt($_POST['cvv'], $salt));

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    $cust = $_POST['name'];
    $sql = "SELECT * FROM customer WHERE name = '$cust'";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $customer = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
        }
    }
    $custID = $customer['custID'];


    $orderquery = "INSERT INTO purchaseorder(custID, totalPrice) VALUES (?, ?);";

    $stmt = mysqli_prepare($conn, $orderquery);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ii", $customer['custID'], $_SESSION['total']);

        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }


    $sql = "SELECT * FROM purchaseorder WHERE custID = '$custID'";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            $customerOrder = mysqli_fetch_assoc($result);
            mysqli_free_result($result);
        }
    }


    if (isset($_SESSION)) {
        foreach ($_SESSION as $key => $val) {

            $sql = "SELECT * FROM product WHERE prodID = '$key'";

            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    $product = mysqli_fetch_assoc($result);
                    mysqli_free_result($result);
                }
            }


            $orderproductquery = "INSERT INTO purchasedproduct(custID, orderID, orderedProduct, quantity) VALUES (?, ?, ?, ?);";

            $stmt = mysqli_prepare($conn, $orderproductquery);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "iisi", $customer['custID'], $customerOrder['orderID'], $product['prodID'], $val);

                mysqli_stmt_execute($stmt);

                mysqli_stmt_close($stmt);
            }
        }
    }

    // Insert into DB Code Finish


    ?>
    <div class="nav-spacer"></div>

    <div class="flex-container">
        <div class="column-30vh">
            <div class="icon-check"><i class="far fa-check-circle"></i></div>
            <h1>THANK YOU</h1>
            <h2><?php echo "$customer[name]"; ?></h1>
                <p>Sit back and relax, your Starwars Collectible Figurine is flying your way!</p>
                <form action="index.php">
                    <button id="submit-button" type="submit" class="btn-one">GOT IT</button><br><br><br>
                </form>
                <p>An order confirmation was sent to <b><?php echo "$customer[email]" ?></b></p>
                <p>Questions?</p>
                <p><i class="fas fa-phone"></i> Call us at 08 8201 2345</p>
        </div>
    </div>


    </div>
    <!-- FOOTER -->
    <?php
    require_once "inc/footer2.php";
    session_destroy();
    ?>
</body>

</html>