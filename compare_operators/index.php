<?php
 $x = 10;
 $y = 10;

// equivalent by type data
echo '<br>';
echo "" === false ? "True" : "False";
echo '<br>';

// < > <= >= == !=
//if else if else block
 if ($x == $y){
//     && AND, || OR
     echo 'They are equals';
 }elseif ($x == 12){
     echo 'x is 12';
 }
 else{
     echo 'They are not equals';
 }

echo '<br>';
// ternary operator
 echo $x < $y ? 'True': 'False';
echo '<br>';
// Switch case operator
$numberForSwitch = 4;
switch ($numberForSwitch){
    case 56:
        echo "num = 56";
        break;
    case 4:
        echo "num = 4";
        break;
    default:
        echo "Error";
}