<?php
// wrong $2 or $%$%^&%^*%(
$number2 = 7; // Integer
$num = 3.14; // Float
$word = 'Переменная равна '; //String char
$result = $number2 + $num;
$bool = false;
 echo  $word.$number2."<br>". $result;
 $num += $num;
 echo "<br>". $num;

// constants
echo '<br>';
echo PHP_VERSION;
echo '<br>';
echo defined(PI);
echo '<br>';
define("PI", 3.14);
echo defined(PI)
echo PI;
echo '<br>';
