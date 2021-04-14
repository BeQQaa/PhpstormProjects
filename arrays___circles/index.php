<?php
//Arrays
$arr = [5,7];
$arr = array(0,4,6,3,2,"asd", true);
//$arr[0] = 7;
echo $arr[0];
echo "<br>";
$arr2 = array(array(1,2,3), array("Test",false,6));
echo $arr2[1][2];
echo "<br>";
// associative array key value.
$assoArray = array(1 => "first", 2 => "Second");
echo $assoArray["1"];

//Circle forEach example
echo "<br>";
foreach ($assoArray as $key => $value){
    echo 'Key is ' . $key. ' Value is ' . $value;
    echo "<br>";
}
//Circle for
//or count($arr)
for ($i = 0 ; $i < sizeof($arr); $i++){
    echo $arr[$i];
    echo "<br>";
}
// Circle while
//or boolean false true or bool var
$i = 20;
while ($i != 0) {
    echo $i;
    echo ',';
    $i --;
}
//Circle do while
echo "<br>";
do {
 echo $i;
}while ($i != 0);