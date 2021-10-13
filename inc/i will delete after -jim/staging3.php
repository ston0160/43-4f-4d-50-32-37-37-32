<?php
session_start();
var_dump($_SESSION['cart']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br>
    <a href="staging.php">Back to shopping</a>
    <br><br><br><br>
    <a href="staging4.php">go here to destroy the session</a>
</body>

</html>