<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

function math($x, $y){
    $res = $x * $y;
    echoCall('from math', $res);
    return $res;
}

function echoCall($text, $number){
    static $stNum = 0;
    $stNum ++;
    echo 'function called: '.$stNum.' <br> ';
    echo $text."<br>". $number;
}
 $res = math(5, 7);
echo "<br>".$res;
 $res = math(5, 7);
echo "<br>".$res;
 $res = math(5, 7);
echo "<br>".$res
//echoCall(hi, 5);

?>
</body>
</html>