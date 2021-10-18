<?php
session_start();
$prodID = htmlspecialchars($_GET['prodID']);

if ($_SESSION[$prodID]) {
    unset($_SESSION[$prodID]);
}

header("location: cart.php?id=$prodIdent");
?>