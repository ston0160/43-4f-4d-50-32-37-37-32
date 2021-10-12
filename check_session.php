<?php
session_start();
echo session_id();
echo "<br>";
echo "Your array: <br>";
print_r($_SESSION);

echo "<br> <a href='cart.php'>CART</a> <br>";
echo "<a href='check_session.php'>CHECK</a>";
?>