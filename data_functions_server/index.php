<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//Arrays functions
//date_default_timezone_get('Europe/Kiev'); telling it's not using
//$date = date('Current time: H:i:s');
//echo $date;
//----------------------------------------------------------------
//echo time() . '<br>';
//$date = date('Time - H:i:s', time() + 3600 * 24 * 30);
//echo $date;
//$date = new DateTime();
//$date->modify('+1 hour');
////day week month etc.
//echo $date->format('Time - H:i:s')
//---------------------------------------------------------------------
//$arr = [5, 7, 5, 1, 4, 2, 4, 6, 8, 9, 6, 5];
//$arrNew = [6, 81,3];
//echo count($arr) . '<br>';
//
////delete from array in index
//unset($arr[5]);
//echo in_array(2, $arr) ? "True" : "False";
//echo '<br>';
//
//print_r($arr);
//echo '<br>';
//
//$arrMerge = array_merge($arr, $arrNew);
//echo '<br>';
//print_r($arrMerge);
//
//$aaSlice = array_slice($arrMerge , 0 ,6);
//print_r($aaSlice);
//
//rsort($arr);
//
//sort($arr);
//
//print_r($arr);
//echo '<br>';
//
//$asoArr = ["a" => 12, "b" => 8, "c" => 56];
//asort($asoArr);
//arsort($asoArr);
//ksort($asoArr);
//krsort($asoArr);
//print_r($asoArr);
//echo '<br>';
//
//shuffle($arr);
//print_r($arr);
//echo '<br>';
//*********************************************************************
//Functions test values
//$x = 12;
//echo "Is Numeric: " . is_numeric($x) . '<br>';
//echo "Is Integer: " . is_integer($x) . '<br>';
//echo "Is Double: " . is_double($x) . '<br>';
//echo "Is String: " . is_string($x) . '<br>';
//echo "Is Boolean: " . is_bool($x) . '<br>';
//echo "Is Array: " . is_array($x) . '<br>';
//echo "Just get type: " . gettype($x) . '<br>';
//********************************************************************
// format string's
//$str = "Simple String Example";
//echo strlen($str) . '<br>';
//echo strpos($str, "Exa") === false ? '\'Exa\' not found' : '\'Exa\' exist';
//echo '<br>';
//echo substr($str, 0, 8) . '<br>';
////strtolower(); mb_strtolower() etc. first for latin second for cyrillic
//echo strtolower($str) . '<br>' . strtoupper($str) . '<br>';
//echo trim("              spaced text   example                ");
//****************************************************************************
//Math functions
//$num = -15;
//echo abs($num) . '<br>';
//$num = 26.85;
//echo round($num) . '<br>';
//echo ceil($num) . '<br>'; /* always round up*/
//echo floor($num) . '<br>';/*always round down*/
//
//echo mt_rand(1, 20) . '<br>';
//echo min(12, 33, 14, 55, 88) . '<br>';
//echo max(12, 33, 14, 55, 88) . '<br>';
//
//$num = 1;
//echo sin($num) . '<br>';
//echo cos($num)  . '<br>';
//echo tan($num)  . '<br>';
//echo 1 / tan($num)  . '<br>';
//-------------------------------------------------------------------
//SERVER
echo $_SERVER['REQUEST_URI'];
echo '<br>';
echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_ADDR'];
echo '<br>';

phpinfo();
?>
</body>
</html>