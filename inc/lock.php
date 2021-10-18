<?php

$salt = md5('jim');

function hashCC($string, $salt)
{
    $string = crypt($string, $salt);
}

echo 'hashCC = ';
//echo hashCC("A212 1212 1212 1212", $salt);
echo crypt('1212 1212 1212 1212', $salt);

echo '<br>';
echo 'Naked = ';
echo $salt;
