<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for your Order</title>
    <link rel="stylesheet" href="styles/thankyou-style.css">
    <link rel="stylesheet" href="styles/header-nav-style.css">
    <link rel="stylesheet" href="styles/footer-style2.css">
    <script src="https://kit.fontawesome.com/646e59b3d4.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- HEADER - NAVBAR -->
    <?php
    require_once "inc/header-nav.php"
    ?>

    <div>
        <p><i class="far fa-check-circle"></i></p>
        <h1>Thank you</h1>
        <h2>$Full Name</h1>
            <p>Sit back and relax, your Starwars Collectible Figurine is on its way!</p>
            <button>GOT IT</button>
            <p>Order confirmation was sent to <b>$your-email</b></p>
            <p>Your order was confirmed at $date-time.</p>
            <p>Questions?</p>
            <p><i class="fas fa-phone"></i> Call us at 08 8201 2345</p>
    </div>


    </div>
    <!-- FOOTER -->
    <?php
    require_once "inc/footer2.php"
    ?>
</body>

</html>