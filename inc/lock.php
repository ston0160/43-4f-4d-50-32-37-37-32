<?php

$salt = random_bytes(5);;

function hashCC($string, $salt)
{
    $string = crypt($string, $salt);
}

echo 'hashCC = ';
//echo hashCC("1212 1212 1212 1212", $salt);
echo crypt('1212 1212 1212 1212', $salt);

echo '<br>';
echo 'Naked = ';
echo $salt;
